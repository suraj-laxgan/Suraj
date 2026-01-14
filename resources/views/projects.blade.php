@extends('layouts.app')

@section('title', 'Portfolio | Suraj Das')
@section('meta_description', 'Selected Laravel, PHP and MySQL projects by backend developer Suraj Das.')

@section('content')

{{-- PAGE HEADER --}}
<section style="
    border-radius:22px; padding:20px 22px;
    background:
        linear-gradient(to right, rgba(37,99,235,0.25), transparent 60%),
        rgba(15,23,42,0.98);
    border:1px solid rgba(148,163,184,0.4);
    box-shadow:0 26px 60px rgba(15,23,42,0.95);
    margin-bottom:24px;">
    <div class="section-title" style="margin-bottom:6px;">
        <h2>Project portfolio</h2>
        <span>Selected work with APIs, dashboards & data</span>
    </div>
    <p style="font-size:13px; color:#9ca3af; margin:0;">
        A few representative projects that reflect how I design Laravel backends, REST APIs,
        and MySQL-heavy systems. Some work is under NDA, so details are simplified.
    </p>
</section>

{{-- QUICK FILTER TAGS (just visual for now) --}}
<section class="section">
    <div class="badge-row">
        <span class="badge badge-accent">All</span>
        <span class="badge">APIs</span>
        <span class="badge">Dashboards</span>
        <span class="badge">Multi-tenant</span>
        <span class="badge">Reporting</span>
        <span class="badge">Auth & RBAC</span>
    </div>
</section>

{{-- PROJECT GRID --}}
<section class="section">
    <div class="card-grid">

        {{-- Project 1 --}}
        <article class="card">
            <div class="card-meta">Multi-tenant SaaS · Backend</div>
            <h3>Subscription SaaS Platform Backend</h3>
            <p style="margin:4px 0 6px; color:#9ca3af;">
                Backend powering a multi-tenant SaaS application with subscription billing, role-based
                access, and dedicated tenant isolation across the stack.
            </p>
            <ul>
                <li>Designed tenant-aware database schema and middleware.</li>
                <li>Implemented team roles & permissions for different plans.</li>
                <li>Integrated payment gateway with webhooks for billing events.</li>
            </ul>
            <div class="badge-row" style="margin-top:4px;">
                <span class="badge">Laravel</span>
                <span class="badge">MySQL</span>
                <span class="badge">REST API</span>
                <span class="badge">Multi-tenant</span>
            </div>
        </article>

        {{-- Project 2 --}}
        <article class="card">
            <div class="card-meta">Analytics · Internal Tool</div>
            <h3>Reporting & Analytics Dashboard</h3>
            <p style="margin:4px 0 6px; color:#9ca3af;">
                Internal analytics panel for business teams with advanced filters, exports and
                scheduled email reports for KPIs.
            </p>
            <ul>
                <li>Optimized complex reporting queries with indexing.</li>
                <li>Used queued jobs for generating heavy Excel/CSV exports.</li>
                <li>Scheduled daily/weekly summary reports via cron.</li>
            </ul>
            <div class="badge-row" style="margin-top:4px;">
                <span class="badge">Laravel</span>
                <span class="badge">Queues</span>
                <span class="badge">MySQL</span>
                <span class="badge">Excel/CSV</span>
            </div>
        </article>

        {{-- Project 3 --}}
        <article class="card">
            <div class="card-meta">Mobile Apps · API</div>
            <h3>REST API for Android / iOS App</h3>
            <p style="margin:4px 0 6px; color:#9ca3af;">
                JSON API used by native mobile apps for authentication, profiles, content feeds and
                notifications with strict security & logging.
            </p>
            <ul>
                <li>Implemented token-based auth (JWT/Passport/Sanctum).</li>
                <li>Added rate limiting and custom error responses.</li>
                <li>Documented endpoints for mobile dev teams.</li>
            </ul>
            <div class="badge-row" style="margin-top:4px;">
                <span class="badge">Laravel</span>
                <span class="badge">REST</span>
                <span class="badge">Auth</span>
                <span class="badge">Postman</span>
            </div>
        </article>

        {{-- Project 4 --}}
        <article class="card">
            <div class="card-meta">Admin · Backoffice</div>
            <h3>Custom Admin Panel & Backoffice</h3>
            <p style="margin:4px 0 6px; color:#9ca3af;">
                Backoffice application used by internal teams to manage users, payments, content,
                and support requests in one place.
            </p>
            <ul>
                <li>Role-based access for support, finance, and admins.</li>
                <li>Reusable Blade components for tables and forms.</li>
                <li>Search, filters and export for key datasets.</li>
            </ul>
            <div class="badge-row" style="margin-top:4px;">
                <span class="badge">Laravel</span>
                <span class="badge">Blade</span>
                <span class="badge">RBAC</span>
            </div>
        </article>

        {{-- Project 5 --}}
        <article class="card">
            <div class="card-meta">Performance · Refactor</div>
            <h3>Legacy Laravel Refactor & Performance</h3>
            <p style="margin:4px 0 6px; color:#9ca3af;">
                Took over a legacy Laravel codebase, refactored core modules and significantly
                improved performance of critical APIs.
            </p>
            <ul>
                <li>Identified N+1 queries and fixed them with eager loading.</li>
                <li>Introduced service/repository layers to simplify controllers.</li>
                <li>Reduced response times for heavy endpoints.</li>
            </ul>
            <div class="badge-row" style="margin-top:4px;">
                <span class="badge">Refactoring</span>
                <span class="badge">Eloquent</span>
                <span class="badge">Performance</span>
            </div>
        </article>

        {{-- Project 6 (placeholder personal project) --}}
        <article class="card">
            <div class="card-meta">Personal · Side Project</div>
            <h3>Developer Tools / Utilities</h3>
            <p style="margin:4px 0 6px; color:#9ca3af;">
                Small utilities built in Laravel for personal use – such as log viewers, JSON
                formatters, or API testing helpers.
            </p>
            <ul>
                <li>Focused on clean, reusable internal packages.</li>
                <li>Experimented with different project structures.</li>
                <li>Used as a playground for trying new Laravel features.</li>
            </ul>
            <div class="badge-row" style="margin-top:4px;">
                <span class="badge">Laravel</span>
                <span class="badge">Side Project</span>
                <span class="badge">Experimentation</span>
            </div>
        </article>

    </div>
</section>

{{-- CTA --}}
<section class="section">
    <div style="
        border-radius:20px; padding:14px 18px;
        background:
            linear-gradient(to right, rgba(37,99,235,0.3), transparent 60%),
            rgba(15,23,42,0.98);
        border:1px solid rgba(37,99,235,0.7);
        display:flex; flex-wrap:wrap; align-items:center; justify-content:space-between; gap:12px;">
        <div>
            <div style="font-size:12px; color:#9ca3af;">Want more details?</div>
            <div style="font-size:14px; color:#e5e7eb; max-width:520px;">
                Some projects can’t be shown publicly due to NDAs. I can share more technical details
                about architecture and decisions during a call or interview.
            </div>
        </div>
        <a href="{{ route('contact') }}" class="btn-primary">
            <span>📨</span> Get in touch
        </a>
    </div>
</section>

@endsection
