@extends('layouts.app')

@section('title', 'Contact | Suraj Das')
@section('meta_description', 'Contact Laravel / PHP backend developer Suraj Das for opportunities or collaboration.')

@section('content')

{{-- HEADER CARD --}}
<section style="
    border-radius:22px; padding:20px 22px;
    background:
        linear-gradient(to right, rgba(37,99,235,0.25), transparent 60%),
        rgba(15,23,42,0.98);
    border:1px solid rgba(148,163,184,0.4);
    box-shadow:0 26px 60px rgba(15,23,42,0.95);
    margin-bottom:22px;">
    <div class="section-title" style="margin-bottom:4px;">
        <h2>Let’s talk</h2>
        <span>Remote-friendly · Backend-focused</span>
    </div>
    <p style="font-size:13px; color:#9ca3af; margin:0;">
        Whether you’re looking for help with Laravel APIs, an internal dashboard, or long-term backend work,
        feel free to reach out. I’m open to remote roles and collaboration with global teams.
    </p>
</section>

{{-- MAIN CONTACT AREA --}}
{{-- <section style="display:grid; grid-template-columns: minmax(0, 1.4fr) minmax(0, 1fr); gap:22px; align-items:flex-start;"> --}}
<section class="layout-two-col layout-two-col--narrow page-section">

    {{-- Contact form --}}
    <div style="
        border-radius:22px; padding:20px 20px 18px;
        background:
            linear-gradient(to bottom right, rgba(37,99,235,0.16), transparent 55%),
            radial-gradient(circle at top left, rgba(15,23,42,0.96), rgba(15,23,42,0.98));
        border:1px solid rgba(148,163,184,0.35);
        box-shadow:0 30px 70px rgba(15,23,42,0.95);">

        <div class="section-title" style="margin-bottom:10px;">
            <h2>Send a message</h2>
            <span>I usually reply within 24–48 hours</span>
        </div>

        @if(session('status'))
            <div style="
                background:rgba(22,163,74,0.12);
                border:1px solid rgba(22,163,74,0.8);
                color:#bbf7d0;
                padding:10px 12px;
                border-radius:12px;
                font-size:13px;
                margin-bottom:12px;">
                {{ session('status') }}
            </div>
        @endif

        <form action="{{ route('contact.send') }}" method="post" style="display:flex; flex-direction:column; gap:12px; margin-top:6px;">
            @csrf

            <div>
                <label for="name" style="font-size:13px; color:#e5e7eb; display:block; margin-bottom:4px;">
                    Name
                </label>
                <input id="name" name="name" type="text"
                       value="{{ old('name') }}"
                       required
                       style="width:100%; padding:9px 10px; border-radius:10px;
                              border:1px solid rgba(148,163,184,0.45);
                              background:rgba(15,23,42,0.95);
                              color:#e5e7eb; font-size:13px;">
                @error('name')
                    <small style="color:#fecaca; font-size:11px;">{{ $message }}</small>
                @enderror
            </div>

            <div>
                <label for="email" style="font-size:13px; color:#e5e7eb; display:block; margin-bottom:4px;">
                    Email
                </label>
                <input id="email" name="email" type="email"
                       value="{{ old('email') }}"
                       required
                       style="width:100%; padding:9px 10px; border-radius:10px;
                              border:1px solid rgba(148,163,184,0.45);
                              background:rgba(15,23,42,0.95);
                              color:#e5e7eb; font-size:13px;">
                @error('email')
                    <small style="color:#fecaca; font-size:11px;">{{ $message }}</small>
                @enderror
            </div>

            <div>
                <label for="message" style="font-size:13px; color:#e5e7eb; display:block; margin-bottom:4px;">
                    Message
                </label>
                <textarea id="message" name="message" rows="5" required
                          style="width:100%; padding:9px 10px; border-radius:10px;
                                 border:1px solid rgba(148,163,184,0.45);
                                 background:rgba(15,23,42,0.95);
                                 color:#e5e7eb; font-size:13px; resize:vertical;">{{ old('message') }}</textarea>
                @error('message')
                    <small style="color:#fecaca; font-size:11px;">{{ $message }}</small>
                @enderror
            </div>

            <div style="display:flex; justify-content:space-between; align-items:center; gap:10px; margin-top:4px;">
                <span style="font-size:11px; color:#9ca3af;">
                    Please include a brief description of the project, tech stack, and timeline if possible.
                </span>
                <button type="submit" class="btn-primary" style="border:none; cursor:pointer; font-size:13px;">
                    <span>📨</span> Send message
                </button>
            </div>
        </form>
    </div>

    {{-- Contact info / sidebar --}}
    <aside style="
        border-radius:22px; padding:18px 18px 16px;
        background:
            radial-gradient(circle at top, rgba(37,99,235,0.28), transparent 60%),
            rgba(15,23,42,0.98);
        border:1px solid rgba(148,163,184,0.45);
        box-shadow:0 24px 60px rgba(15,23,42,0.95);">

        <div class="section-title" style="margin-bottom:10px;">
            <h2>Contact details</h2>
            <span>Other ways to reach me</span>
        </div>

        <div style="font-size:13px; color:#9ca3af; line-height:1.7;">
            <p style="margin-top:0;">
                <strong style="color:#e5e7eb;">Email</strong><br>
                your@email.com
            </p>
            <p>
                <strong style="color:#e5e7eb;">Location</strong><br>
                Kolkata, India · Timezone: IST (UTC+5:30)
            </p>
            <p>
                <strong style="color:#e5e7eb;">Profiles</strong><br>
                <a href="#" target="_blank" style="color:#93c5fd; text-decoration:none;">LinkedIn</a><br>
                <a href="#" target="_blank" style="color:#93c5fd; text-decoration:none;">GitHub</a>
            </p>
        </div>

        <hr style="border:none; border-top:1px solid rgba(51,65,85,0.85); margin:10px 0 14px;">

        <div style="font-size:12px; color:#9ca3af;">
            <p>
                I’m especially interested in:
            </p>
            <ul style="margin:0 0 10px 18px; padding:0;">
                <li>Laravel backend roles (full-time or contract).</li>
                <li>API / integration-heavy projects.</li>
                <li>Refactoring or performance work on existing systems.</li>
            </ul>
            <p style="margin:0;">
                If your project is outside these areas but still involves Laravel or backend work,
                I’m still happy to take a look.
            </p>
        </div>
    </aside>

</section>

@endsection
