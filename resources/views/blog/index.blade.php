@extends('layouts.app')

@section('title', 'Blog | Suraj Das')
@section('meta_description', 'Laravel, PHP, MySQL and backend engineering articles by Suraj Das.')

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
    <div class="section-title" style="margin-bottom:4px;">
        <h2>Blog</h2>
        <span>Writing about Laravel & backend work</span>
    </div>
    <p style="font-size:13px; color:#9ca3af; margin:0;">
        Notes from real-world projects — covering Laravel architecture, APIs, MySQL performance,
        and practical backend engineering decisions.
    </p>
</section>

{{-- TAGS / FILTER LOOK (static for now) --}}
<section class="section" style="margin-top:18px;">
    <div class="badge-row">
        <span class="badge badge-accent">All topics</span>
        <span class="badge">Laravel</span>
        <span class="badge">MySQL</span>
        <span class="badge">APIs</span>
        <span class="badge">Architecture</span>
        <span class="badge">Career</span>
    </div>
</section>

{{-- POSTS GRID --}}
<section class="section">
    <div class="card-grid">

        {{-- Post 1 --}}
        <article class="card">
            <div class="card-meta">01 Dec 2025 · Laravel</div>
            <h3>How I structure large Laravel projects</h3>
            <p style="margin:4px 0 8px; color:#9ca3af;">
                A practical look at splitting a growing Laravel codebase into controllers, services,
                repositories and well-defined domains.
            </p>
            <div class="badge-row" style="margin-bottom:8px;">
                <span class="badge">Laravel</span>
                <span class="badge">Architecture</span>
                <span class="badge">Best practices</span>
            </div>
            <a href="{{ route('blog.show', ['slug' => 'structuring-large-laravel-projects']) }}">
                Read article →
            </a>
        </article>

        {{-- Post 2 --}}
        <article class="card">
            <div class="card-meta">20 Nov 2025 · MySQL</div>
            <h3>Optimizing MySQL queries in real Laravel APIs</h3>
            <p style="margin:4px 0 8px; color:#9ca3af;">
                Concrete examples of slow endpoints, how I profiled them, and what changes made them
                fast enough for production traffic.
            </p>
            <div class="badge-row" style="margin-bottom:8px;">
                <span class="badge">MySQL</span>
                <span class="badge">Performance</span>
                <span class="badge">Eloquent</span>
            </div>
            <a href="{{ route('blog.show', ['slug' => 'optimizing-mysql-queries-laravel']) }}">
                Read article →
            </a>
        </article>

        {{-- Post 3 --}}
        <article class="card">
            <div class="card-meta">10 Nov 2025 · APIs</div>
            <h3>REST API best practices with Laravel</h3>
            <p style="margin:4px 0 8px; color:#9ca3af;">
                Status codes, validation, consistent error responses and versioning rules I follow
                when building APIs consumed by other teams.
            </p>
            <div class="badge-row" style="margin-bottom:8px;">
                <span class="badge">REST</span>
                <span class="badge">Laravel</span>
                <span class="badge">Production</span>
            </div>
            <a href="{{ route('blog.show', ['slug' => 'rest-api-best-practices-laravel']) }}">
                Read article →
            </a>
        </article>

    </div>
</section>

{{-- BOTTOM CTA --}}
<section class="section">
    <div style="
        border-radius:20px; padding:14px 18px;
        background:
            linear-gradient(to right, rgba(37,99,235,0.3), transparent 60%),
            rgba(15,23,42,0.98);
        border:1px solid rgba(37,99,235,0.7);
        display:flex; flex-wrap:wrap; align-items:center; justify-content:space-between; gap:12px;">
        <div>
            <div style="font-size:12px; color:#9ca3af;">Have a topic in mind?</div>
            <div style="font-size:14px; color:#e5e7eb; max-width:520px;">
                I often write based on real problems from projects. If you’d like me to cover
                something specific around Laravel or backend work, feel free to reach out.
            </div>
        </div>
        <a href="{{ route('contact') }}" class="btn-secondary">
            <span>✉</span> Suggest a topic
        </a>
    </div>
</section>

@endsection
