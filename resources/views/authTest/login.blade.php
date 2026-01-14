@extends('layouts.auth')

@section('title', 'Admin Login')

@section('content')
    <h1 style="margin:0 0 10px; font-size:20px;">Sign in</h1>
    <p style="margin:0 0 14px; font-size:12px; color:var(--text-soft);">
        Use your admin credentials to access the dashboard.
    </p>

    @if($errors->any())
        <div style="font-size:12px; color:#fecaca; margin-bottom:10px;">
            {{ $errors->first() }}
        </div>
    @endif

    <form method="post" action="{{ route('admin.login') }}" style="display:flex; flex-direction:column; gap:10px;">
        @csrf

        <div>
            <label for="email">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
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

        <div style="display:flex; justify-content:space-between; align-items:center; font-size:11px; color:var(--text-soft);">
            <label style="display:flex; align-items:center; gap:4px;">
                <input type="checkbox" name="remember" style="width:auto;">
                Remember me
            </label>
        </div>

        <button type="submit" class="btn-primary">
            Sign in
        </button>
    </form>

    <div class="auth-footer">
        Don’t have an account?
        <a href="{{ route('admin.register') }}">Create one</a>
    </div>
@endsection
