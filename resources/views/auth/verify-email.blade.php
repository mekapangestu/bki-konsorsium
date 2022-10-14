@extends('auth.layouts.app')
@section('title', 'Verify Email')
@section('content')
    <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner py-4">
            <!-- Verify Email -->
            <div class="card">
                <div class="card-body">
                    <!-- Logo -->
                    <div class="app-brand justify-content-center">
                        <a href="{{ route('login') }}" class="app-brand-link gap-2">
                            <img src="{{ asset('images/bkilogonew-whitebg.png') }}" class="auth-logo" alt="">
                        </a>
                    </div>
                    <!-- /Logo -->
                    <h4 class="mb-2">Verify Email</h4>
                    <p class="mb-4">Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.</p>
                    @if (session('status') == 'verification-link-sent')
                        <p class="mb-4">A new verification link has been sent to the email address you provided during registration.</p>
                    @endif
                    <form id="formAuthentication" class="mb-3" method="POST" action="{{ route('verification.send') }}">
                        @csrf
                        <button class="btn btn-primary d-grid w-100">Resend Verification Email</button>
                    </form>
                    <br />
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <button class="btn btn-primary d-grid w-100">Logout</button>
                    </form>
                </div>
            </div>
            <!-- Verify Email -->
        </div>
    </div>
@endsection
