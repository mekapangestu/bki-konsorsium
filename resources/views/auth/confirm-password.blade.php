@extends('auth.layouts.app')
@section('title', 'Confirm Password')
@section('content')
    <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner py-4">
            <!-- Confirm Password -->
            <div class="card">
                <div class="card-body">
                    <!-- Logo -->
                    <div class="app-brand justify-content-center">
                        <a href="{{ route('login') }}" class="app-brand-link gap-2">
                            <img src="{{ asset('images/bkilogonew-whitebg.png') }}" class="auth-logo" alt="">
                        </a>
                    </div>
                    <!-- /Logo -->
                    <p class="mb-4">This is a secure area of the application. Please confirm your password before continuing.</p>
                    <form id="formAuthentication" class="mb-3" method="POST" action="{{ route('password.confirm') }}">
                        @csrf
                        <div class="mb-3 form-password-toggle">
                            <label class="form-label" for="password">Current Password</label>
                            <div class="input-group input-group-merge">
                                <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                            </div>
                        </div>
                        <button class="btn btn-primary d-grid w-100">Confirm</button>
                    </form>
                </div>
            </div>
            <!-- /Confirm Password -->
        </div>
    </div>
@endsection
