<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Suraj Das | Laravel Backend Developer')</title>
    <meta name="description" content="@yield('meta_description', 'Laravel / PHP Backend Developer portfolio, resume and blog.')">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        :root {
            --bg: #020617;            /* main background */
            --bg-soft: #020819;
            --card: #020617;
            --card-soft: #020617;
            --accent: #2563eb;        /* blue accent */
            --accent-soft: rgba(37, 99, 235, 0.15);
            --border-subtle: rgba(148, 163, 184, 0.25);
            --text: #e5e7eb;
            --text-soft: #9ca3af;
            --text-strong: #f9fafb;
        }

        * { box-sizing: border-box; }

        body {
            margin: 0;
            padding: 0;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            background: radial-gradient(circle at top, #0b1120 0, #020617 55%, #000 100%);
            color: var(--text);
        }

        a { color: inherit; }

        header {
            position: sticky;
            top: 0;
            z-index: 40;
            backdrop-filter: blur(16px);
            background: linear-gradient(to bottom, rgba(15,23,42,0.95), rgba(15,23,42,0.75));
            border-bottom: 1px solid rgba(148,163,184,0.25);
        }

        .nav-container {
            max-width: 1120px;
            margin: 0 auto;
            padding: 14px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
        }

        .logo {
            display: flex;
            flex-direction: column;
            gap: 2px;
        }

        .logo-main {
            font-weight: 600;
            letter-spacing: 0.06em;
            font-size: 13px;
            text-transform: uppercase;
            color: var(--text-strong);
        }

        .logo-sub {
            font-size: 11px;
            color: var(--text-soft);
        }

        nav {
            display: flex;
            align-items: center;
            gap: 14px;
            font-size: 13px;
        }

        nav a {
            text-decoration: none;
            color: var(--text-soft);
            padding: 6px 10px;
            border-radius: 999px;
            border: 1px solid transparent;
            transition: all 0.18s ease;
        }

        nav a:hover {
            color: var(--text-strong);
            border-color: rgba(148,163,184,0.45);
            background: rgba(15,23,42,0.7);
        }

        .nav-cta {
            border-radius: 999px;
            padding: 7px 14px;
            border: 1px solid rgba(148,163,184,0.65);
            background: radial-gradient(circle at top, rgba(37,99,235,0.35), rgba(15,23,42,0.9));
            color: var(--text-strong);
            font-size: 12px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }

        .nav-cta span {
            font-size: 16px;
        }

        main {
            max-width: 1120px;
            margin: 26px auto 40px;
            padding: 0 20px 40px;
        }

        footer {
            border-top: 1px solid rgba(148,163,184,0.25);
            padding: 16px 20px 22px;
            font-size: 12px;
            color: var(--text-soft);
            text-align: center;
            background: radial-gradient(circle at bottom, rgba(37,99,235,0.15), transparent 55%);
        }

        /* Utility components for all pages */

        .pill {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            border-radius: 999px;
            padding: 4px 10px;
            font-size: 11px;
            border: 1px solid rgba(148,163,184,0.5);
            background: rgba(15,23,42,0.8);
            color: var(--text-soft);
        }

        .pill-dot {
            width: 6px;
            height: 6px;
            border-radius: 999px;
            background: #22c55e;
            box-shadow: 0 0 8px rgba(34,197,94,0.9);
        }

        .section-title {
            display: flex;
            align-items: baseline;
            justify-content: space-between;
            gap: 16px;
            margin-bottom: 12px;
        }

        .section-title h2 {
            font-size: 18px;
            font-weight: 500;
            color: var(--text-strong);
            margin: 0;
        }

        .section-title span {
            font-size: 12px;
            color: var(--text-soft);
        }

        .section {
            margin-top: 32px;
        }

        .badge-row {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }

        .badge {
            font-size: 11px;
            border-radius: 999px;
            padding: 4px 10px;
            background: rgba(15,23,42,0.9);
            border: 1px solid rgba(148,163,184,0.45);
            color: var(--text-soft);
        }

        .badge-accent {
            border-color: rgba(37,99,235,0.9);
            background: radial-gradient(circle at top, rgba(37,99,235,0.3), rgba(15,23,42,0.9));
            color: var(--text-strong);
        }

        .card-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 18px;
        }

        .card {
            border-radius: 18px;
            padding: 16px 16px 14px;
            background:
                linear-gradient(to bottom right, rgba(37,99,235,0.14), transparent 55%),
                radial-gradient(circle at top left, rgba(15,23,42,0.95), rgba(15,23,42,0.98));
            border: 1px solid rgba(148,163,184,0.3);
            box-shadow: 0 20px 40px rgba(15,23,42,0.9);
            font-size: 13px;
            position: relative;
            overflow: hidden;
        }

        .card::after {
            content: "";
            position: absolute;
            inset: 0;
            background: radial-gradient(circle at top right, rgba(148,163,184,0.16), transparent 60%);
            opacity: 0;
            transition: opacity 0.2s ease;
            pointer-events: none;
        }

        .card:hover::after {
            opacity: 1;
        }

        .card h3 {
            font-size: 14px;
            margin: 0 0 4px;
            color: var(--text-strong);
        }

        .card-meta {
            font-size: 11px;
            color: var(--text-soft);
            margin-bottom: 8px;
        }

        .card a {
            font-size: 12px;
            text-decoration: none;
            color: var(--accent);
        }

        .card ul {
            margin: 6px 0 8px;
            padding-left: 18px;
            color: var(--text-soft);
        }

        .card li {
            margin-bottom: 3px;
        }

        .btn-primary {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 6px;
            border-radius: 999px;
            padding: 10px 18px;
            font-size: 13px;
            border: 1px solid rgba(37,99,235,0.9);
            background: radial-gradient(circle at top, rgba(37,99,235,0.6), rgba(37,99,235,0.25));
            color: #f9fafb;
            text-decoration: none;
            box-shadow:
                0 0 25px rgba(37,99,235,0.5),
                0 18px 40px rgba(15,23,42,0.95);
        }

        .btn-secondary {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 6px;
            border-radius: 999px;
            padding: 9px 16px;
            font-size: 12px;
            border: 1px solid rgba(148,163,184,0.7);
            background: rgba(15,23,42,0.9);
            color: var(--text-soft);
            text-decoration: none;
        }

        .btn-primary span,
        .btn-secondary span {
            font-size: 16px;
        }

        @media (max-width: 960px) {
            .card-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media (max-width: 720px) {
            .nav-container {
                flex-direction: column;
                align-items: flex-start;
            }
            nav {
                flex-wrap: wrap;
            }
            main {
                margin-top: 18px;
            }
            .card-grid {
                grid-template-columns: minmax(0, 1fr);
            }
        }

        /* 2-column layout that stacks on mobile */
        .layout-two-col {
            display: grid;
            grid-template-columns: minmax(0, 1.6fr) minmax(0, 1fr);
            gap: 26px;
            align-items: flex-start;
        }

        .layout-two-col--centered {
            align-items: center;
        }

        /* Narrower two-column */
        .layout-two-col--narrow {
            grid-template-columns: minmax(0, 1.4fr) minmax(0, 1fr);
        }

        /* Generic section spacing so we don’t need inline margin everywhere */
        .page-section {
            margin-bottom: 28px;
        }

        /* Existing media queries – add mobile behavior here */
        @media (max-width: 960px) {
            .card-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media (max-width: 720px) {
            .nav-container {
                flex-direction: column;
                align-items: flex-start;
            }
            nav {
                flex-wrap: wrap;
            }
            main {
                margin-top: 18px;
            }
            .card-grid {
                grid-template-columns: minmax(0, 1fr);
            }

            /* 🚀 IMPORTANT: stack 2-column layouts on mobile */
            .layout-two-col,
            .layout-two-col--narrow {
                grid-template-columns: minmax(0, 1fr);
                gap: 18px;
            }

            .layout-two-col > *:not(:last-child),
            .layout-two-col--narrow > *:not(:last-child) {
                margin-bottom: 6px; /* small vertical separation when stacked */
            }
        }

        pre {
            background:#111827;
            color:#e5e7eb;
            padding:10px;
            border-radius:8px;
            font-size:13px;
            max-width:100%;
            overflow-x:auto;           /* allow horizontal scroll if really needed */
            white-space:pre-wrap;      /* wrap long lines */
            word-wrap:break-word;      /* break long words/lines */
        }

        code {
            font-family: Consolas, monospace;
            word-wrap:break-word;
        }


    </style>
</head>
<body>
<header>
    <div class="nav-container">
        <div class="logo">
            <div class="logo-main">SURAJ DAS</div>
            <div class="logo-sub">Laravel · PHP · MySQL Backend</div>
        </div>

        <nav>
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('resume') }}">Resume</a>
            <a href="{{ route('portfolio') }}">Portfolio</a>
            <a href="{{ route('blog.index') }}">Blog</a>
            {{-- <a href="{{ route('snippets') }}">Snippets</a> --}}
            {{-- <a href="{{ route('about') }}">About</a> --}}
            <a href="{{ route('contact') }}">Contact</a>
            {{-- <a href="{{ route('contact') }}" class="nav-cta">
                <span>●</span> Hire Me
            </a> --}}
        </nav>
    </div>
</header>

<main>
    @yield('content')
</main>

<footer>
    © {{ date('Y') }} Suraj Das · Backend Developer · Based in Kolkata · IST (UTC+5:30)
</footer>
</body>
</html>
