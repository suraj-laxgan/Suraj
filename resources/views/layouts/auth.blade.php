<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Auth | Suraj')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        /* reuse same theme variables */
        :root {
            --bg-body: #020617;
            --bg-surface: #020617;
            --border-subtle: #1f2937;
            --accent: #2563eb;
            --text-main: #e5e7eb;
            --text-soft: #9ca3af;
            --text-strong: #f9fafb;
        }

        html[data-theme="light"] {
            --bg-body: #f3f4f6;
            --bg-surface: #ffffff;
            --border-subtle: #e5e7eb;
            --accent: #2563eb;
            --text-main: #111827;
            --text-soft: #6b7280;
            --text-strong: #030712;
        }

        body {
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: radial-gradient(circle at top, #0b1120 0, #020617 55%, #000 100%);
            color: var(--text-main);
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
        }

        .auth-shell {
            width: 100%;
            max-width: 420px;
            padding: 20px;
        }

        .auth-card {
            border-radius: 18px;
            padding: 20px 18px 18px;
            background: var(--bg-surface);
            border: 1px solid var(--border-subtle);
            box-shadow: 0 24px 50px rgba(15,23,42,0.9);
        }

        .auth-logo {
            font-weight: 600;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            font-size: 13px;
        }

        .auth-sub {
            font-size: 11px;
            color: var(--text-soft);
        }

        label {
            font-size: 12px;
            color: var(--text-soft);
            display: block;
            margin-bottom: 4px;
        }

        input[type="email"],
        input[type="text"],
        input[type="password"] {
            width: 100%;
            border-radius: 10px;
            border: 1px solid var(--border-subtle);
            background: #020617;
            color: var(--text-main);
            font-size: 13px;
            padding: 8px 10px;
        }

        html[data-theme="light"] input[type="email"],
        html[data-theme="light"] input[type="text"],
        html[data-theme="light"] input[type="password"] {
            background: #f9fafb;
        }

        .btn-primary {
            width: 100%;
            border-radius: 999px;
            padding: 8px 12px;
            border: 1px solid var(--accent);
            background: var(--accent);
            color: #f9fafb;
            font-size: 13px;
            cursor: pointer;
        }

        .field-error {
            font-size: 11px;
            color: #fecaca;
            margin-top: 2px;
        }

        .auth-footer {
            font-size: 12px;
            color: var(--text-soft);
            margin-top: 10px;
            text-align: center;
        }

        .auth-footer a {
            color: #93c5fd;
            text-decoration: none;
        }

        .theme-small-toggle {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            font-size: 11px;
            border-radius: 999px;
            padding: 4px 8px;
            border: 1px solid var(--border-subtle);
            background: transparent;
            color: var(--text-soft);
            cursor: pointer;
        }
    </style>
</head>
<body>
<div class="auth-shell">
    <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:10px;">
        <div>
            <div class="auth-logo">SURAJ ADMIN</div>
            <div class="auth-sub">Login to manage content</div>
        </div>
        <button type="button" class="theme-small-toggle" id="authThemeToggle">
            🌓 <span class="auth-theme-label">Dark</span>
        </button>
    </div>

    <div class="auth-card">
        @yield('content')
    </div>
</div>

<script>
    (function () {
        const root = document.documentElement;
        const btn = document.getElementById('authThemeToggle');
        const label = btn ? btn.querySelector('.auth-theme-label') : null;

        let stored = localStorage.getItem('admin-theme') || 'dark';
        root.setAttribute('data-theme', stored);
        if (label) label.textContent = stored === 'dark' ? 'Dark' : 'Light';

        btn && btn.addEventListener('click', () => {
            const current = root.getAttribute('data-theme') === 'dark' ? 'dark' : 'light';
            const next = current === 'dark' ? 'light' : 'dark';
            root.setAttribute('data-theme', next);
            localStorage.setItem('admin-theme', next);
            if (label) label.textContent = next === 'dark' ? 'Dark' : 'Light';
        });
    })();
</script>
</body>
</html>
