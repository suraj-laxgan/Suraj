@extends('layouts.app')

@section('title', 'Resume | Suraj Das')
@section('meta_description', 'Digital resume of Laravel backend developer Suraj Das.')

@section('content')

<div style="
    border-radius:24px; padding:26px;
    background:
        linear-gradient(to bottom right, rgba(37,99,235,0.16), transparent 55%),
        radial-gradient(circle at top left, rgba(15,23,42,0.95), rgba(15,23,42,0.98));
    border:1px solid rgba(148,163,184,0.35);
    box-shadow:0 36px 70px rgba(15,23,42,0.95);
    color:#e5e7eb;">

    {{-- Header --}}
    <div style="display:flex; justify-content:space-between; align-items:flex-start; flex-wrap:wrap; gap:18px; margin-bottom:22px;">

        <div>
            <h1 style="margin:0; font-size:26px; font-weight:600;">Resume</h1>
            <p style="margin:6px 0; font-size:14px; color:#9ca3af;">
                Backend Developer — Laravel · PHP · MySQL
            </p>
            <span style="font-size:11px; color:#9ca3af;">Last updated: Dec 2025</span>
        </div>

        <div style="text-align:right; font-size:13px; line-height:1.6; color:#9ca3af;">
            Kolkata, India · IST (UTC+5:30)<br>
            Phone: +91-8343864248<br>
            Email: your@email.com<br>
            LinkedIn · GitHub

            <div style="margin-top:10px; display:flex; justify-content:flex-end; gap:10px;">
                <a href="#" class="btn-primary" style="font-size:12px;">
                    ⬇ Download PDF
                </a>
                <a href="#" class="btn-secondary" style="font-size:12px;">
                    ⬇ DOCX
                </a>
            </div>
        </div>
    </div>

    {{-- Summary --}}
    <div class="section">
        <div class="section-title"><h2>Summary</h2></div>
        <p style="font-size:14px; color:#9ca3af; line-height:1.7;">
            Backend Developer with 6+ years of experience designing scalable REST APIs, database-driven systems,
            and admin applications using Laravel, PHP, and MySQL. Passionate about clean architecture,
            performance tuning, and maintainable codebases.
        </p>
    </div>

    {{-- Skills --}}
    <div class="section">
        <div class="section-title"><h2>Core Skills</h2></div>

        <h4 style="margin:10px 0 6px; font-size:14px; color:#e5e7eb;">Backend</h4>
        <div class="badge-row">
            <span class="badge badge-accent">Laravel</span>
            <span class="badge">REST APIs</span>
            <span class="badge">Authentication</span>
            <span class="badge">Queues & Jobs</span>
        </div>

        <h4 style="margin:18px 0 6px; font-size:14px; color:#e5e7eb;">Database</h4>
        <div class="badge-row">
            <span class="badge">MySQL</span>
            <span class="badge">Query Optimization</span>
            <span class="badge">Indexes</span>
        </div>

        <h4 style="margin:18px 0 6px; font-size:14px; color:#e5e7eb;">Frontend Basics</h4>
        <div class="badge-row">
            <span class="badge">Blade</span>
            <span class="badge">HTML/CSS</span>
            <span class="badge">JavaScript</span>
            <span class="badge">AJAX</span>
        </div>

        <h4 style="margin:18px 0 6px; font-size:14px; color:#e5e7eb;">Tools</h4>
        <div class="badge-row">
            <span class="badge">Git</span>
            <span class="badge">Linux</span>
            <span class="badge">Composer</span>
            <span class="badge">Postman</span>
        </div>
    </div>

    {{-- Experience --}}
    <div class="section">
        <div class="section-title"><h2>Professional Experience</h2></div>

        <h3 style="margin:6px 0; font-size:16px;">Senior Backend Developer — Laravel</h3>
        <span style="font-size:13px; color:#9ca3af;">Company Name · 20XX – Present</span>
        <ul style="margin:8px 0 16px; font-size:13px; color:#9ca3af;">
            <li>Architected and developed REST APIs consumed by web & mobile clients.</li>
            <li>Reduced database query time with indexing, caching and optimized SQL.</li>
            <li>Implemented RBAC, token authentication, queues and scheduled jobs.</li>
        </ul>

        <h3 style="margin:6px 0; font-size:16px;">Laravel / PHP Developer</h3>
        <span style="font-size:13px; color:#9ca3af;">Previous Company · 20XX – 20XX</span>
        <ul style="margin:8px 0; font-size:13px; color:#9ca3af;">
            <li>Developed internal admin dashboards and business logic modules.</li>
            <li>Refactored legacy code to modern Laravel best practices.</li>
            <li>Worked with QA & product teams for feature delivery.</li>
        </ul>
    </div>

    {{-- Education --}}
    <div class="section">
        <div class="section-title"><h2>Education</h2></div>
        <p style="font-size:13px; color:#9ca3af;">B.Tech in ETCE — 2013–2016</p>
        <p style="font-size:13px; color:#9ca3af;">Diploma in ETCE — 2010–2013</p>
        <p style="font-size:13px; color:#9ca3af;">Class X & XII — 2005–2008</p>
    </div>

</div>

@endsection
