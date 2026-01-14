<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Admin | Suraj')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        :root {
            --bg-body: #020617;
            --bg-surface: #020617;
            --bg-soft: #020819;
            --border-subtle: #1f2937;
            --accent: #2563eb;
            --accent-soft: rgba(37, 99, 235, 0.18);
            --text-main: #e5e7eb;
            --text-soft: #9ca3af;
            --text-strong: #f9fafb;
            --danger: #ef4444;
            --success: #22c55e;
        }

        html[data-theme="light"] {
            --bg-body: #f3f4f6;
            --bg-surface: #ffffff;
            --bg-soft: #f9fafb;
            --border-subtle: #e5e7eb;
            --accent: #2563eb;
            --accent-soft: rgba(37, 99, 235, 0.08);
            --text-main: #111827;
            --text-soft: #6b7280;
            --text-strong: #030712;
        }

        html, body {
            margin: 0;
            padding: 0;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            background: var(--bg-body);
            color: var(--text-main);
        }

        a { color: inherit; text-decoration: none; }

        .admin-shell {
            display: flex;
            min-height: 100vh;
        }

        /* SIDEBAR */

        .admin-sidebar {
            width: 230px;
            background: linear-gradient(to bottom, var(--bg-soft), var(--bg-body));
            border-right: 1px solid var(--border-subtle);
            padding: 16px 14px;
            display: flex;
            flex-direction: column;
            gap: 16px;
            position: relative;
            z-index: 20;
        }

        .admin-logo {
            font-size: 14px;
            font-weight: 600;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            color: var(--text-strong);
        }

        .admin-logo-sub {
            font-size: 11px;
            color: var(--text-soft);
            margin-top: 2px;
        }

        .admin-nav {
            margin-top: 10px;
            display: flex;
            flex-direction: column;
            gap: 4px;
        }

        .admin-nav a {
            padding: 8px 10px;
            border-radius: 10px;
            font-size: 13px;
            color: var(--text-soft);
            border: 1px solid transparent;
        }

        .admin-nav a:hover {
            background: var(--accent-soft);
            border-color: var(--accent-soft);
            color: var(--text-strong);
        }

        .admin-nav a.active {
            background: var(--accent-soft);
            border-color: var(--accent);
            color: var(--text-strong);
        }

        .admin-sidebar-footer {
            margin-top: auto;
            font-size: 11px;
            color: var(--text-soft);
        }

        /* TOPBAR & CONTENT */

        .admin-main {
            flex: 1;
            display: flex;
            flex-direction: column;
            min-width: 0;
        }

        .admin-topbar {
            position: sticky;
            top: 0;
            z-index: 10;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 10px;
            padding: 10px 18px;
            border-bottom: 1px solid var(--border-subtle);
            background: linear-gradient(to bottom, rgba(15,23,42,0.92), rgba(15,23,42,0.88));
        }

        html[data-theme="light"] .admin-topbar {
            background: linear-gradient(to bottom, rgba(249,250,251,0.96), rgba(249,250,251,0.96));
        }

        .topbar-left {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .topbar-title {
            font-size: 14px;
            font-weight: 500;
        }

        .topbar-subtitle {
            font-size: 11px;
            color: var(--text-soft);
        }

        .admin-breadcrumb {
            font-size: 11px;
            color: var(--text-soft);
        }

        .topbar-right {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .btn-ghost {
            border-radius: 999px;
            padding: 6px 10px;
            border: 1px solid var(--border-subtle);
            background: transparent;
            font-size: 12px;
            color: var(--text-soft);
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }

        .btn-ghost span.icon {
            font-size: 15px;
        }

        .avatar-circle {
            width: 26px;
            height: 26px;
            border-radius: 999px;
            background: var(--accent-soft);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 13px;
            color: var(--text-strong);
        }

        /* MOBILE TOGGLE */

        .sidebar-toggle {
            display: none;
            border-radius: 999px;
            padding: 6px 10px;
            border: 1px solid var(--border-subtle);
            background: transparent;
            font-size: 14px;
            color: var(--text-soft);
            cursor: pointer;
        }

        /* CONTENT AREA */

        .admin-content-wrapper {
            padding: 16px 18px 24px;
        }

        .admin-card {
            border-radius: 16px;
            padding: 16px 16px 14px;
            background: var(--bg-surface);
            border: 1px solid var(--border-subtle);
            box-shadow: 0 18px 40px rgba(15,23,42,0.7);
        }

        html[data-theme="light"] .admin-card {
            box-shadow: 0 14px 25px rgba(15,23,42,0.08);
        }

        .admin-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0,1fr));
            gap: 16px;
        }

        @media (max-width: 960px) {
            .admin-grid {
                grid-template-columns: repeat(2, minmax(0,1fr));
            }
        }

        @media (max-width: 720px) {
            .admin-grid {
                grid-template-columns: minmax(0,1fr);
            }

            .admin-sidebar {
                position: fixed;
                inset: 0 auto 0 0;
                transform: translateX(-100%);
                transition: transform 0.2s ease;
                max-width: 220px;
            }

            .admin-sidebar.open {
                transform: translateX(0);
                box-shadow: 0 0 0 9999px rgba(15,23,42,0.65);
            }

            .sidebar-toggle {
                display: inline-flex;
            }

            .admin-shell {
                min-height: 100vh;
            }
        }

        .stat-card-title {
            font-size: 11px;
            color: var(--text-soft);
            margin-bottom: 4px;
        }

        .stat-card-value {
            font-size: 20px;
            font-weight: 550;
            color: var(--text-strong);
        }

        .stat-card-sub {
            font-size: 11px;
            color: var(--text-soft);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 13px;
        }

        th, td {
            padding: 8px 6px;
            border-bottom: 1px solid var(--border-subtle);
        }

        th {
            text-align: left;
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: var(--text-soft);
        }

        tr:last-child td {
            border-bottom: none;
        }

        .badge {
            display: inline-block;
            border-radius: 999px;
            padding: 3px 8px;
            font-size: 11px;
            border: 1px solid var(--border-subtle);
            background: var(--bg-soft);
            color: var(--text-soft);
        }

        .badge-success {
            border-color: rgba(34,197,94,0.6);
            color: #bbf7d0;
            background: rgba(22,163,74,0.1);
        }

        .badge-danger {
            border-color: rgba(239,68,68,0.7);
            color: #fecaca;
            background: rgba(239,68,68,0.08);
        }

        .btn-primary {
            border-radius: 999px;
            padding: 7px 13px;
            border: 1px solid var(--accent);
            background: var(--accent);
            color: #f9fafb;
            font-size: 12px;
            cursor: pointer;
        }

        .btn-secondary {
            border-radius: 999px;
            padding: 7px 13px;
            border: 1px solid var(--border-subtle);
            background: transparent;
            color: var(--text-soft);
            font-size: 12px;
            cursor: pointer;
        }

        .btn-link {
            border: none;
            background: none;
            padding: 0;
            margin: 0;
            cursor: pointer;
            font-size: 12px;
            color: var(--accent);
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(2,minmax(0,1fr));
            gap: 12px 16px;
        }

        @media (max-width: 720px) {
            .form-grid {
                grid-template-columns: minmax(0,1fr);
            }
        }

        label {
            font-size: 12px;
            color: var(--text-soft);
            display: block;
            margin-bottom: 4px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        textarea,
        select {
            width: 100%;
            border-radius: 10px;
            border: 1px solid var(--border-subtle);
            background: var(--bg-soft);
            color: var(--text-main);
            font-size: 13px;
            padding: 7px 9px;
        }

        textarea {
            resize: vertical;
            min-height: 80px;
        }

        .field-error {
            font-size: 11px;
            color: #fecaca;
            margin-top: 2px;
        }

    </style>
</head>
<body>
<div class="admin-shell">

    {{-- SIDEBAR --}}
    <aside class="admin-sidebar" id="adminSidebar">
        <div>
            <div class="admin-logo">SURAJ ADMIN</div>
            <div class="admin-logo-sub">Portfolio · Blog · Settings</div>
        </div>

        <nav class="admin-nav">
            <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                Dashboard
            </a>
            <a href="{{ url('admin.posts.index') }}" class="{{ request()->routeIs('admin.posts.*') ? 'active' : '' }}">
                Blog Posts
            </a>
            <a href="{{ url('admin.projects.index') }}" class="{{ request()->routeIs('admin.projects.*') ? 'active' : '' }}">
                Projects
            </a>
            {{-- Add more: Users, Settings, etc. --}}
        </nav>

        <div class="admin-sidebar-footer">
            Logged in as<br>
            <strong>{{ auth()->user()->name ?? 'Admin' }}</strong>
        </div>
    </aside>

    {{-- MAIN --}}
    <div class="admin-main">
        <header class="admin-topbar">
            <div class="topbar-left">
                <button type="button" class="sidebar-toggle" id="sidebarToggle">☰</button>
                <div>
                    <div class="topbar-title">@yield('page_title', 'Admin')</div>
                    <div class="admin-breadcrumb">@yield('breadcrumb', 'Dashboard')</div>
                </div>
            </div>
            <div class="topbar-right">
                <button type="button" class="btn-ghost" id="themeToggle">
                    <span class="icon">🌓</span>
                    <span class="theme-label">Dark</span>
                </button>
                <div class="avatar-circle">
                    {{ strtoupper(substr(auth()->user()->name ?? 'S', 0, 1)) }}
                </div>
            </div>
        </header>

        <main class="admin-content-wrapper">
            @yield('content')
        </main>
    </div>

</div>

<script>
    // THEME TOGGLE
    (function() {
        const root = document.documentElement;
        const btn = document.getElementById('themeToggle');
        const label = btn ? btn.querySelector('.theme-label') : null;

        let stored = localStorage.getItem('admin-theme') || 'dark';
        root.setAttribute('data-theme', stored);
        if (label) label.textContent = stored === 'dark' ? 'Dark' : 'Light';

        btn && btn.addEventListener('click', function () {
            const current = root.getAttribute('data-theme') === 'dark' ? 'dark' : 'light';
            const next = current === 'dark' ? 'light' : 'dark';
            root.setAttribute('data-theme', next);
            localStorage.setItem('admin-theme', next);
            if (label) label.textContent = next === 'dark' ? 'Dark' : 'Light';
        });
    })();

    // MOBILE SIDEBAR
    (function() {
        const sidebar = document.getElementById('adminSidebar');
        const toggle = document.getElementById('sidebarToggle');
        if (!sidebar || !toggle) return;

        toggle.addEventListener('click', () => {
            sidebar.classList.toggle('open');
        });

        // Close sidebar when clicking outside on mobile
        document.addEventListener('click', (e) => {
            if (window.innerWidth > 720) return;
            if (!sidebar.classList.contains('open')) return;
            if (!sidebar.contains(e.target) && e.target !== toggle) {
                sidebar.classList.remove('open');
            }
        });
    })();
</script>
</body>
</html>
