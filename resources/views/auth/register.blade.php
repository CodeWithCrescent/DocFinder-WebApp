@extends('layouts.guest')
@section('auth-form')
    <form method="POST" action="{{ route('register') }}" class="login-form mt-4">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="mb-3">
                    <label class="form-label">{{ __('Name') }} <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus
                        autocomplete="name">
                </div>
            </div>
            <div class="col-md-12">
                <div class="mb-3">
                    <label class="form-label">{{ __('Email') }} <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" required
                        autocomplete="username">
                </div>
            </div>
            <div class="col-md-12">
                <div class="mb-3">
                    <label class="form-label">{{ __('Password') }} <span class="text-danger">*</span></label>
                    <input type="password" class="form-control" name="password" required autocomplete="new-password">
                </div>
            </div>
            <div class="col-md-12">
                <div class="mb-3">
                    <label class="form-label">{{ __('Confirm Password') }} <span class="text-danger">*</span></label>
                    <input type="password" class="form-control" name="password_confirmation" required
                        autocomplete="new-password">
                </div>
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="col-md-12">
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input align-middle" type="checkbox" name="terms"
                                id="accept-tnc-check">
                            <label class="form-check-label" for="accept-tnc-check">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                    'terms_of_service' =>
                                        '<a target="_blank" href="' . route('terms.show') . '" class="text-primary">' . __('Terms of Service') . '</a>',
                                    'privacy_policy' =>
                                        '<a target="_blank" href="' . route('policy.show') . '" class="text-primary">' . __('Privacy Policy') . '</a>',
                                ]) !!}
                            </label>
                        </div>
                    </div>
                </div>
            @endif

            <div class="col-md-12">
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
            </div>

            {{-- <div class="col-lg-12 mt-3 text-center">
                <h6 class="text-muted">Or</h6>
            </div><!--end col-->

            <div class="col-6 mt-3">
                <div class="d-grid">
                    <a href="javascript:void(0)" class="btn btn-soft-primary"><i class="uil uil-facebook"></i> Facebook</a>
                </div>
            </div><!--end col-->

            <div class="col-6 mt-3">
                <div class="d-grid">
                    <a href="javascript:void(0)" class="btn btn-soft-primary"><i class="uil uil-google"></i> Google</a>
                </div>
            </div><!--end col--> --}}

            <div class="mx-auto">
                <p class="mb-0 mt-3"><small class="text-dark me-2">Already have an account ?</small> <a
                        href="{{ route('login') }}" class="text-dark fw-bold">Login</a></p>
            </div>
        </div>
    </form>
@endsection
