@extends('layouts.auth')

@section('title', 'Admin Register')

@section('content')
    <h1 style="margin:0 0 10px; font-size:20px;">Create admin account</h1>
    <p style="margin:0 0 14px; font-size:12px; color:var(--text-soft);">
        This page can be disabled in production after initial setup.
    </p>

    @if($errors->any())
        <div style="font-size:12px; color:#fecaca; margin-bottom:10px;">
            {{ $errors->first() }}
        </div>
    @endif

    <form method="post" action="{{ route('admin.register') }}" style="display:flex; flex-direction:column; gap:10px;">
        @csrf

        <div>
            <label for="name">Name</label>
            <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>
            @error('name')
                <div class="field-error">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="email">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required>
            @error('email')
                <div class="field-error">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="password">Password</label>
            <input id="password" type="password" name="password" required>
            @error('password')
                <div class="field-error">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="password_confirmation">Confirm password</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required>
        </div>

        <button type="submit" class="btn-primary">
            Create account
        </button>
    </form>

    <div class="auth-footer">
        Already have an account?
        <a href="{{ route('admin.login') }}">Sign in</a>
    </div>
@endsection
