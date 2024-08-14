@extends('layouts.guest')
@section('auth-form')
    <form method="post" action="{{ route('login') }}" class="login-form mt-4">
        @csrf
        <div class="row">
            <div class="col-lg-12">
                <div class="mb-3">
                    <label class="form-label">{{ __('Email') }} <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus
                        autocomplete="username">
                </div>
            </div>

            <div class="col-lg-12">
                <div class="mb-3">
                    <label class="form-label">{{ __('Password') }} <span class="text-danger">*</span></label>
                    <input type="password" class="form-control" name="password" required autocomplete="current-password">
                </div>
            </div>

            <div class="col-lg-12">
                <div class="d-flex justify-content-between">
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input align-middle" type="checkbox" name="remember"
                                id="remember-check">
                            <label class="form-check-label" for="remember-check">{{ __('Remember me') }}</label>
                        </div>
                    </div>

                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}"
                            class="text-dark text-small mb-0">{{ __('Forgot your password?') }}</a>
                    @endif
                </div>
            </div>
            <div class="col-lg-12 mb-0">
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">{{ __('Log in') }}</button>
                </div>
            </div>

            {{-- <div class="col-lg-12 mt-3 text-center">
                                        <h6 class="text-muted">Or</h6>
                                    </div><!--end col-->

                                    <div class="col-6 mt-3">
                                        <div class="d-grid">
                                            <a href="#" class="btn btn-soft-primary"><i
                                                    class="uil uil-facebook"></i> Facebook</a>
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-6 mt-3">
                                        <div class="d-grid">
                                            <a href="#" class="btn btn-soft-primary"><i
                                                    class="uil uil-google"></i> Google</a>
                                        </div>
                                    </div><!--end col--> --}}

            <div class="col-12 text-center">
                <p class="mb-0 mt-3"><small class="text-dark me-2">Don't have an account
                        ?</small> <a href="{{ route('register') }}" class="text-dark fw-bold">Register</a>
                </p>
            </div>
        </div>
    </form>
@endsection
