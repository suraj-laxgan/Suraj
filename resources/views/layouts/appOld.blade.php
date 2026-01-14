<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Suraj Das | Laravel Backend Developer')</title>
    <meta name="description" content="@yield('meta_description', 'Laravel / PHP Backend Developer portfolio, resume and blog.')">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        body { font-family: Arial, sans-serif; margin:0; padding:0; background:#f5f5f7; color:#222; }
        header { background:#111827; color:#fff; padding:15px 40px; display:flex; justify-content:space-between; align-items:center; }
        .logo { font-weight:bold; font-size:20px; }
        nav a { color:#e5e7eb; margin-left:18px; text-decoration:none; font-size:14px; }
        nav a:hover { text-decoration:underline; }
        main { max-width:1000px; margin:30px auto; padding:0 20px 40px; }
        footer { text-align:center; padding:15px; font-size:13px; color:#6b7280; }

        /* Common components */
        .hero { display:flex; flex-wrap:wrap; align-items:center; gap:30px; background:#fff; padding:30px; border-radius:12px; box-shadow:0 2px 6px rgba(0,0,0,0.08); }
        .hero-text { flex:1 1 260px; }
        .hero h1 { margin-top:0; font-size:30px; }
        .hero p { line-height:1.6; }
        .hero-tags span { display:inline-block; background:#eef2ff; color:#3730a3; padding:4px 10px; border-radius:999px; font-size:12px; margin:4px 4px 0 0; }
        .hero-buttons a { display:inline-block; margin-top:15px; margin-right:10px; padding:10px 18px; border-radius:999px; font-size:14px; text-decoration:none; }
        .btn-primary { background:#2563eb; color:#fff; }
        .btn-secondary { background:#e5e7eb; color:#111827; }
        .highlights { display:flex; flex-wrap:wrap; gap:15px; margin-top:25px; }
        .highlight { flex:1 1 150px; background:#111827; color:#fff; padding:15px; border-radius:10px; font-size:14px; }

        .section { margin-top:35px; }
        .cards { display:flex; flex-wrap:wrap; gap:15px; }
        .card { flex:1 1 250px; background:#fff; border-radius:10px; padding:18px; box-shadow:0 2px 4px rgba(0,0,0,0.05); font-size:14px; }

        .chips span { display:inline-block; background:#eef2ff; color:#3730a3; padding:4px 10px; border-radius:999px; font-size:12px; margin:4px 6px 0 0; }

        .meta { font-size:12px; color:#6b7280; margin-bottom:6px; }
        .tags span { display:inline-block; background:#eef2ff; color:#3730a3; padding:3px 8px; border-radius:999px; font-size:11px; margin:2px 4px 0 0; }

        pre { background:#111827; color:#e5e7eb; padding:10px; border-radius:8px; overflow:auto; font-size:13px; }
        code { font-family: Consolas, monospace; }

        .timeline { list-style:none; padding-left:0; }
        .timeline li { margin-bottom:10px; }
        .timeline span { font-weight:bold; display:inline-block; width:120px; }

        .testimonial { background:#f3f4f6; border-radius:8px; padding:15px; margin-bottom:10px; font-size:14px; }

        form { display:flex; flex-direction:column; gap:12px; margin-top:15px; }
        label { font-size:14px; }
        input, textarea { width:100%; padding:8px; border-radius:6px; border:1px solid #d1d5db; font-size:14px; }
        button { padding:10px 16px; border-radius:999px; border:none; font-size:14px; cursor:pointer; background:#2563eb; color:#fff; margin-top:5px; }

        @media (max-width: 600px) {
            header { flex-direction:column; align-items:flex-start; }
            nav { margin-top:10px; }
            main { padding:0 15px 30px; }
        }
    </style>
</head>
<body>
<header>
    <div class="logo">Suraj Das</div>
    <nav>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('resume') }}">Resume</a>
        <a href="{{ route('portfolio') }}">Portfolio</a>
        <a href="{{ route('blog.index') }}">Blog</a>
        <a href="{{ route('snippets') }}">Snippets</a>
        <a href="{{ route('about') }}">About</a>
        <a href="{{ route('contact') }}">Contact</a>
    </nav>
</header>

<main>
    @yield('content')
</main>

<footer>
    © {{ date('Y') }} Suraj Das · Backend Developer · Timezone: IST (UTC+5:30)
</footer>
</body>
</html>
