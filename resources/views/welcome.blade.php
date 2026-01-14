@extends('layouts.app')

@section('title', 'Laravel Backend Developer | Suraj Das')
@section('meta_description', 'Portfolio and blog of Laravel / PHP backend developer Suraj Das, specializing in scalable APIs and MySQL performance.')

@section('content')

{{-- HERO SECTION --}}
    <section class="layout-two-col layout-two-col--centered page-section">
    {{-- Left: Intro --}}
    <div style="border-radius:24px; padding:22px 22px 20px;
                background:
                    radial-gradient(circle at top left, rgba(37,99,235,0.24), transparent 60%),
                    radial-gradient(circle at bottom right, rgba(15,23,42,1), rgba(15,23,42,0.98));
                border:1px solid rgba(148,163,184,0.45);
                box-shadow:0 28px 60px rgba(15,23,42,1);">

        <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:12px;">
            <div class="pill">
                <span class="pill-dot"></span>
                <span>Available for remote backend roles</span>
            </div>
            <span style="font-size:11px; color:#9ca3af;">Kolkata · IST (UTC+5:30)</span>
        </div>

        <h1 style="margin:8px 0 4px; font-size:28px; color:#e5e7eb; font-weight:550;">
            Building reliable backends with Laravel, PHP & MySQL.
        </h1>
        <p style="margin:0 0 14px; font-size:14px; line-height:1.7; color:#9ca3af; max-width:560px;">
            I’m Suraj, a backend-focused developer with 6+ years of experience designing and implementing
            REST APIs, data-heavy systems, and admin backends. I care about clean architecture,
            predictable performance, and long-term maintainability.
        </p>

        <div class="badge-row" style="margin-bottom:14px;">
            <span class="badge badge-accent">Laravel</span>
            <span class="badge">PHP 7/8</span>
            <span class="badge">MySQL</span>
            <span class="badge">REST APIs</span>
            <span class="badge">Query Optimization</span>
            <span class="badge">Queues & Jobs</span>
        </div>

        <div style="display:flex; flex-wrap:wrap; gap:10px; margin-top:8px;">
            <a href="{{ route('resume') }}" class="btn-primary">
                <span>⬇</span> View Resume
            </a>
            <a href="{{ route('portfolio') }}" class="btn-secondary">
                <span>▶</span> View Selected Projects
            </a>
        </div>
    </div>

    {{-- Right: Stats / Quick Overview --}}
    <div style="display:flex; flex-direction:column; gap:14px;">
        <div style="flex:1; border-radius:22px; padding:16px 16px 14px;
                    background:
                        linear-gradient(to bottom right, rgba(37,99,235,0.25), transparent 55%),
                        radial-gradient(circle at top, #020617, #020617);
                    border:1px solid rgba(148,163,184,0.45);">
            <div class="section-title" style="margin-bottom:10px;">
                <h2>Snapshot</h2>
                <span>Who I am at a glance</span>
            </div>

            <div style="display:grid; grid-template-columns: repeat(3,minmax(0,1fr)); gap:10px; margin-bottom:10px;">
                <div style="padding:8px 8px 6px; border-radius:14px; border:1px solid rgba(148,163,184,0.3); background:rgba(15,23,42,0.95);">
                    <div style="font-size:11px; color:#9ca3af;">Experience</div>
                    <div style="font-size:18px; font-weight:550; color:#e5e7eb;">6+ yrs</div>
                    <div style="font-size:11px; color:#9ca3af;">Backend dev</div>
                </div>
                <div style="padding:8px 8px 6px; border-radius:14px; border:1px solid rgba(148,163,184,0.3); background:rgba(15,23,42,0.95);">
                    <div style="font-size:11px; color:#9ca3af;">Focus</div>
                    <div style="font-size:18px; font-weight:550; color:#e5e7eb;">APIs</div>
                    <div style="font-size:11px; color:#9ca3af;">REST · Auth · RBAC</div>
                </div>
                <div style="padding:8px 8px 6px; border-radius:14px; border:1px solid rgba(148,163,184,0.3); background:rgba(15,23,42,0.95);">
                    <div style="font-size:11px; color:#9ca3af;">Mindset</div>
                    <div style="font-size:18px; font-weight:550; color:#e5e7eb;">Clean</div>
                    <div style="font-size:11px; color:#9ca3af;">tested & maintainable</div>
                </div>
            </div>

            <ul style="margin:0; padding-left:18px; font-size:12px; color:#9ca3af;">
                <li>Designed and shipped Laravel APIs for web & mobile teams.</li>
                <li>Comfortable profiling and fixing slow queries in MySQL.</li>
                <li>Experience with role-based permissions, queues and schedulers.</li>
            </ul>
        </div>

        <div style="border-radius:20px; padding:12px 14px;
                    background:
                        radial-gradient(circle at left, rgba(37,99,235,0.3), transparent 60%),
                        rgba(15,23,42,0.97);
                    border:1px solid rgba(148,163,184,0.4);">
            <div style="display:flex; justify-content:space-between; align-items:center; gap:10px;">
                <div>
                    <div style="font-size:12px; color:#9ca3af; margin-bottom:2px;">Next step</div>
                    <div style="font-size:13px; color:#e5e7eb;">
                        Looking for backend-heavy roles where I can own APIs, data models and performance.
                    </div>
                </div>
                <a href="{{ route('contact') }}" class="btn-secondary">
                    <span>✉</span> Contact Me
                </a>
            </div>
        </div>
    </div>
</section>

{{-- TECH STACK SECTION --}}
<section class="section">
    <div class="section-title">
        <h2>Tech stack & strengths</h2>
        <span>What I use daily</span>
    </div>

    <div class="card-grid">
        <div class="card">
            <div class="card-meta">Backend · Core</div>
            <h3>Laravel & PHP</h3>
            <p style="margin:4px 0 8px; color:#9ca3af;">
                REST APIs, authentication, authorization, form requests, queues, jobs, events,
                modular project structure.
            </p>
            <div class="badge-row">
                <span class="badge">Laravel 8/9/10</span>
                <span class="badge">Service layer</span>
                <span class="badge">API Resources</span>
            </div>
        </div>

        <div class="card">
            <div class="card-meta">Data · Storage</div>
            <h3>MySQL & Eloquent</h3>
            <p style="margin:4px 0 8px; color:#9ca3af;">
                Schema design, migrations, indexing, query optimization, and data-heavy reports with
                minimal performance penalties.
            </p>
            <div class="badge-row">
                <span class="badge">Eloquent</span>
                <span class="badge">Query Builder</span>
                <span class="badge">Indexes</span>
            </div>
        </div>

        <div class="card">
            <div class="card-meta">Frontend · Essentials</div>
            <h3>Blade, JS & Ajax</h3>
            <p style="margin:4px 0 8px; color:#9ca3af;">
                Practical UI work: Blade templates, basic components, jQuery/Ajax for forms and dashboards.
            </p>
            <div class="badge-row">
                <span class="badge">Blade</span>
                <span class="badge">HTML/CSS</span>
                <span class="badge">jQuery/Ajax</span>
            </div>
        </div>
    </div>
</section>

{{-- FEATURED PROJECTS --}}
<section class="section">
    <div class="section-title">
        <h2>Selected projects</h2>
        <span>Real work with APIs & data</span>
    </div>

    <div class="card-grid">
        <article class="card">
            <div class="card-meta">Multi-tenant SaaS · Backend</div>
            <h3>Subscription SaaS Backend</h3>
            <p style="margin:4px 0 6px; color:#9ca3af;">
                Multi-tenant SaaS backend with tenant isolation, subscription billing and role-based
                permissions, powering a SPA frontend.
            </p>
            <ul>
                <li>Tenant scoping middleware and database design.</li>
                <li>Role/permission model for teams and admins.</li>
                <li>Payment integration and webhooks.</li>
            </ul>
            <div class="badge-row">
                <span class="badge">Laravel</span>
                <span class="badge">MySQL</span>
                <span class="badge">REST API</span>
            </div>
        </article>

        <article class="card">
            <div class="card-meta">Analytics · Internal</div>
            <h3>Reporting & Analytics Panel</h3>
            <p style="margin:4px 0 6px; color:#9ca3af;">
                Internal dashboard with complex filters, exportable reports and scheduled email summaries
                for business teams.
            </p>
            <ul>
                <li>Optimized SQL for large reporting tables.</li>
                <li>Queued jobs for heavy exports.</li>
                <li>Automated daily/weekly report emails.</li>
            </ul>
            <div class="badge-row">
                <span class="badge">Laravel</span>
                <span class="badge">Queues</span>
                <span class="badge">MySQL</span>
            </div>
        </article>

        <article class="card">
            <div class="card-meta">API · Mobile</div>
            <h3>REST API for Mobile Apps</h3>
            <p style="margin:4px 0 6px; color:#9ca3af;">
                Secure JSON API used by Android/iOS apps, including authentication, user profiles
                and notifications.
            </p>
            <ul>
                <li>Token-based auth (JWT/Passport/Sanctum).</li>
                <li>Rate limiting & logging middleware.</li>
                <li>API documentation for mobile teams.</li>
            </ul>
            <div class="badge-row">
                <span class="badge">Laravel</span>
                <span class="badge">REST</span>
                <span class="badge">Auth</span>
            </div>
        </article>
    </div>

    <div style="margin-top:14px;">
        <a href="{{ route('portfolio') }}" class="btn-secondary">
            <span>📁</span> View full project list
        </a>
    </div>
</section>

{{-- BLOG PREVIEW --}}
<section class="section">
    <div class="section-title">
        <h2>From the blog</h2>
        <span>Writing about Laravel & backend work</span>
    </div>

    <div class="card-grid">
        <article class="card">
            <div class="card-meta">01 Dec 2025 · Laravel</div>
            <h3>How I structure large Laravel projects</h3>
            <p style="margin:4px 0 8px; color:#9ca3af;">
                Organizing controllers, services and repositories so a codebase stays understandable even
                after years of new features.
            </p>
            <a href="{{ route('blog.show', ['slug' => 'structuring-large-laravel-projects']) }}">Read article →</a>
        </article>

        <article class="card">
            <div class="card-meta">20 Nov 2025 · MySQL</div>
            <h3>Optimizing MySQL queries in real APIs</h3>
            <p style="margin:4px 0 8px; color:#9ca3af;">
                Practical examples of slow queries, profiling with EXPLAIN, and the changes that made
                endpoints feel instant.
            </p>
            <a href="{{ route('blog.show', ['slug' => 'optimizing-mysql-queries-laravel']) }}">Read article →</a>
        </article>

        <article class="card">
            <div class="card-meta">10 Nov 2025 · APIs</div>
            <h3>REST API best practices with Laravel</h3>
            <p style="margin:4px 0 8px; color:#9ca3af;">
                Status codes, validation, error shapes and versioning guidelines I follow when building
                APIs for production.
            </p>
            <a href="{{ route('blog.show', ['slug' => 'rest-api-best-practices-laravel']) }}">Read article →</a>
        </article>
    </div>

    <div style="margin-top:14px;">
        <a href="{{ route('blog.index') }}" class="btn-secondary">
            <span>📝</span> View all posts
        </a>
    </div>
</section>

{{-- FINAL CTA --}}
<section class="section">
    <div style="border-radius:20px; padding:14px 18px;
                background:
                    linear-gradient(to right, rgba(37,99,235,0.35), transparent 60%),
                    rgba(15,23,42,0.98);
                border:1px solid rgba(37,99,235,0.7);
                display:flex; flex-wrap:wrap; align-items:center; justify-content:space-between; gap:12px;">
        <div>
            <div style="font-size:12px; color:#9ca3af;">Let’s work together</div>
            <div style="font-size:14px; color:#e5e7eb; max-width:520px;">
                Need someone to own backend development, APIs, and database performance?
                I’d be happy to discuss how I can help your team.
            </div>
        </div>
        <a href="{{ route('contact') }}" class="btn-primary">
            <span>📨</span> Send a message
        </a>
    </div>
</section>

@endsection
