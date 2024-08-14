@extends('layouts.guest')

@section('auth-form')
    <form method="POST" action="{{ route('password.email') }}" class="login-form mt-4">
        @csrf
        <div class="row">
            <div class="col-lg-12">
                <p class="text-muted">
                    {{ __('Forgot your password? No problem. Please enter your email address. You will receive a link to create a new password via
                                        email.') }}
                </p>
                <div class="mb-3">
                    <label class="form-label">{{ __('Email') }} <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus
                        autocomplete="username">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">{{ __('Send Password Reset Link') }}</button>
                </div>
            </div>
            <div class="mx-auto">
                <p class="mb-0 mt-3"><small class="text-dark me-2">{{ __('Remember your password ?') }}</small> <a
                        href="{{ route('login') }}" class="text-dark h6 mb-0">{{ __('Login') }}</a></p>
            </div>
        </div>
    </form>
@endsection
