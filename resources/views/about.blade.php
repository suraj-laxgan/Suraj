@extends('layouts.app')

@section('title', 'About | Suraj Das')
@section('meta_description', 'About Laravel / PHP backend developer Suraj Das.')

@section('content')

{{-- HEADER CARD --}}
<section style="
    border-radius:22px; padding:20px 22px;
    background:
        linear-gradient(to right, rgba(37,99,235,0.25), transparent 60%),
        rgba(15,23,42,0.98);
    border:1px solid rgba(148,163,184,0.4);
    box-shadow:0 26px 60px rgba(15,23,42,0.95);
    margin-bottom:24px;">
    <div class="section-title" style="margin-bottom:4px;">
        <h2>About me</h2>
        <span>Backend-focused · Laravel · MySQL</span>
    </div>
    <p style="font-size:13px; color:#9ca3af; margin:0;">
        I’m a backend developer from Kolkata, India, focused on building stable, maintainable systems with
        Laravel, PHP and MySQL. This page is a bit more about who I am beyond just a list of skills.
    </p>
</section>

{{-- <section style="display:grid; grid-template-columns: minmax(0, 1.4fr) minmax(0, 1fr); gap:22px; align-items:flex-start;"> --}}
<section class="layout-two-col layout-two-col--narrow page-section">

    {{-- LEFT: STORY + TIMELINE --}}
    <div style="
        border-radius:22px; padding:20px 20px 18px;
        background:
            linear-gradient(to bottom right, rgba(37,99,235,0.16), transparent 55%),
            radial-gradient(circle at top left, rgba(15,23,42,0.96), rgba(15,23,42,0.98));
        border:1px solid rgba(148,163,184,0.35);
        box-shadow:0 30px 70px rgba(15,23,42,0.95);">

        {{-- Short intro --}}
        <div class="section">
            <div class="section-title" style="margin-bottom:8px;">
                <h2>Who I am as a developer</h2>
            </div>
            <p style="font-size:14px; color:#9ca3af; line-height:1.7;">
                My main strength is on the backend: taking business requirements, turning them into a clean
                data model, and building APIs or internal tools that teams can rely on. I enjoy designing
                clear boundaries between modules, keeping controllers thin, and making sure the database
                will survive the growth of the product.
            </p>
            <p style="font-size:14px; color:#9ca3af; line-height:1.7;">
                Over the years I’ve worked with Laravel on REST APIs, dashboards, and reporting tools. I
                like projects where I can own the backend: from schema design to endpoints, performance,
                and long-term maintainability.
            </p>
        </div>

        {{-- Timeline --}}
        <div class="section">
            <div class="section-title" style="margin-bottom:8px;">
                <h2>Career timeline</h2>
            </div>
            <ul class="timeline">
                <li><span>2005–2008</span>Completed Class X & XII.</li>
                <li><span>2010–2013</span>Diploma in ETCE.</li>
                <li><span>2013–2016</span>B.Tech in ETCE.</li>
                <li><span>20XX–Now</span>Working as a Laravel / PHP backend developer.</li>
            </ul>
        </div>

        {{-- What I like working on --}}
        <div class="section">
            <div class="section-title" style="margin-bottom:8px;">
                <h2>What I enjoy building</h2>
            </div>
            <ul style="margin:0; padding-left:18px; font-size:13px; color:#9ca3af; line-height:1.7;">
                <li>REST APIs that are clean, well-documented and easy for frontend/mobile teams to use.</li>
                <li>Admin dashboards where internal teams can actually find what they need quickly.</li>
                <li>Data-heavy features that require careful indexing and query optimization.</li>
                <li>Refactors of legacy Laravel apps into more modular, testable code.</li>
            </ul>
        </div>
    </div>

    {{-- RIGHT: HIGHLIGHTS + "SOFT" SIDE --}}
    <aside style="
        border-radius:22px; padding:18px 18px 16px;
        background:
            radial-gradient(circle at top, rgba(37,99,235,0.28), transparent 60%),
            rgba(15,23,42,0.98);
        border:1px solid rgba(148,163,184,0.45);
        box-shadow:0 24px 60px rgba(15,23,42,0.95);">

        {{-- Quick facts --}}
        <div class="section" style="margin-top:0;">
            <div class="section-title" style="margin-bottom:10px;">
                <h2>Quick facts</h2>
                <span>At a glance</span>
            </div>

            <div style="display:grid; grid-template-columns: repeat(2,minmax(0,1fr)); gap:10px; font-size:13px;">
                <div style="border-radius:14px; padding:10px 10px 8px; border:1px solid rgba(148,163,184,0.35); background:rgba(15,23,42,0.95);">
                    <div style="font-size:11px; color:#9ca3af;">Experience</div>
                    <div style="font-size:16px; color:#e5e7eb; font-weight:550;">6+ years</div>
                    <div style="font-size:11px; color:#9ca3af;">Backend-focused</div>
                </div>
                <div style="border-radius:14px; padding:10px 10px 8px; border:1px solid rgba(148,163,184,0.35); background:rgba(15,23,42,0.95);">
                    <div style="font-size:11px; color:#9ca3af;">Stack</div>
                    <div style="font-size:16px; color:#e5e7eb; font-weight:550;">Laravel · MySQL</div>
                    <div style="font-size:11px; color:#9ca3af;">APIs & dashboards</div>
                </div>
                <div style="border-radius:14px; padding:10px 10px 8px; border:1px solid rgba(148,163,184,0.35); background:rgba(15,23,42,0.95);">
                    <div style="font-size:11px; color:#9ca3af;">Collaboration</div>
                    <div style="font-size:16px; color:#e5e7eb; font-weight:550;">Remote</div>
                    <div style="font-size:11px; color:#9ca3af;">Async & documentation</div>
                </div>
                <div style="border-radius:14px; padding:10px 10px 8px; border:1px solid rgba(148,163,184,0.35); background:rgba(15,23,42,0.95);">
                    <div style="font-size:11px; color:#9ca3af;">Focus</div>
                    <div style="font-size:16px; color:#e5e7eb; font-weight:550;">Quality</div>
                    <div style="font-size:11px; color:#9ca3af;">clean & maintainable</div>
                </div>
            </div>
        </div>

        {{-- How I work --}}
        <div class="section">
            <div class="section-title" style="margin-bottom:8px;">
                <h2>How I like to work</h2>
            </div>
            <ul style="margin:0; padding-left:18px; font-size:13px; color:#9ca3af; line-height:1.7;">
                <li>Start with understanding the problem and constraints first.</li>
                <li>Prefer small, incremental changes over huge risky rewrites.</li>
                <li>Write code that the “next developer” will understand quickly.</li>
                <li>Communicate clearly with product / frontend / mobile teams.</li>
            </ul>
        </div>

        {{-- Testimonials placeholder --}}
        <div class="section">
            <div class="section-title" style="margin-bottom:8px;">
                <h2>Feedback</h2>
                <span>From people I’ve worked with</span>
            </div>

            <div style="background:rgba(15,23,42,0.96); border-radius:14px; padding:10px 12px; border:1px solid rgba(148,163,184,0.4); font-size:12px; color:#cbd5f5; margin-bottom:8px;">
                “Suraj is reliable and detail-oriented. He improved the performance of some APIs that
                were critical for our day-to-day operations.”<br>
                <span style="color:#9ca3af;">— Manager / Client (placeholder)</span>
            </div>

            <div style="background:rgba(15,23,42,0.96); border-radius:14px; padding:10px 12px; border:1px solid rgba(148,163,184,0.4); font-size:12px; color:#cbd5f5;">
                “I’ve learned a lot about Laravel best practices from reviewing code with Suraj.”<br>
                <span style="color:#9ca3af;">— Teammate (placeholder)</span>
            </div>
        </div>

        {{-- CTA --}}
        <div class="section">
            <div style="
                border-radius:16px; padding:10px 12px;
                background:
                    linear-gradient(to right, rgba(37,99,235,0.35), transparent 60%),
                    rgba(15,23,42,0.98);
                border:1px solid rgba(37,99,235,0.7);">
                <div style="font-size:12px; color:#e5e7eb; margin-bottom:4px;">
                    Want to know more or discuss a role?
                </div>
                <a href="{{ route('contact') }}" class="btn-primary" style="font-size:12px; padding:8px 14px; margin-top:4px; display:inline-flex;">
                    <span>✉</span> Go to contact page
                </a>
            </div>
        </div>

    </aside>
</section>

@endsection
