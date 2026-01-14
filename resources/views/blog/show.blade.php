@extends('layouts.app')

@section('title', 'Blog Post | Suraj Das')
@section('meta_description', 'Technical article by Laravel backend developer Suraj Das.')

@section('content')

@php
    // Simple demo post data. Replace with DB later.
    $posts = [
        'structuring-large-laravel-projects' => [
            'title'    => 'How I structure large Laravel projects',
            'date'     => '01 Dec 2025',
            'category' => 'Laravel',
            'summary'  => 'Organizing controllers, services and repositories so a codebase stays understandable as it grows.',
        ],
        'optimizing-mysql-queries-laravel' => [
            'title'    => 'Optimizing MySQL queries in real Laravel APIs',
            'date'     => '20 Nov 2025',
            'category' => 'MySQL',
            'summary'  => 'Profiling slow endpoints and fixing them with proper indexing and query design.',
        ],
        'rest-api-best-practices-laravel' => [
            'title'    => 'REST API best practices with Laravel',
            'date'     => '10 Nov 2025',
            'category' => 'APIs',
            'summary'  => 'Practical rules for designing APIs used by other teams and clients.',
        ],
    ];

    $post = $posts[$slug] ?? $posts['structuring-large-laravel-projects'];
@endphp

<section style="
    max-width:800px; margin:0 auto;
    border-radius:24px; padding:24px 24px 22px;
    background:
        linear-gradient(to bottom right, rgba(37,99,235,0.18), transparent 55%),
        radial-gradient(circle at top left, rgba(15,23,42,0.95), rgba(15,23,42,0.98));
    border:1px solid rgba(148,163,184,0.35);
    box-shadow:0 32px 70px rgba(15,23,42,0.95);
    color:#e5e7eb;">

    {{-- Meta --}}
    <a href="{{ route('blog.index') }}" style="font-size:11px; color:#9ca3af; text-decoration:none;">
        ← Back to all posts
    </a>

    <h1 style="margin:10px 0 6px; font-size:24px; font-weight:600;">
        {{ $post['title'] }}
    </h1>

    <p class="card-meta" style="margin-bottom:10px;">
        {{ $post['date'] }} · {{ $post['category'] }}
    </p>

    <p style="font-size:14px; color:#9ca3af; line-height:1.7; margin-bottom:16px;">
        {{ $post['summary'] }}
    </p>

    <hr style="border:none; border-top:1px solid rgba(51,65,85,0.85); margin:12px 0 18px;">

    {{-- Example content (you can customize per post later) --}}
    <article style="font-size:14px; line-height:1.8; color:#cbd5f5;">

        @if($slug === 'structuring-large-laravel-projects')
            <p>
                When a Laravel project starts small, putting logic in controllers and models is fine.
                But as more features arrive, it becomes difficult to understand what is happening where.
                I prefer to organize the project by domains and introduce a service layer.
            </p>

            <h2 style="font-size:16px; margin:14px 0 6px;">A domain-driven folder structure</h2>
            <p>
                Instead of having everything in <code>app/Models</code> and <code>app/Http/Controllers</code>,
                I like to introduce a <code>Domain</code> (or <code>Modules</code>) folder:
            </p>

            <pre><code>app/
  Http/
    Controllers/
  Domain/
    Users/
      User.php
      UserService.php
      UserRepository.php
    Orders/
      Order.php
      OrderService.php
      OrderRepository.php</code></pre>

            <p>
                The goal is to keep everything related to a feature close together — model, service,
                repository, sometimes actions or DTOs.
            </p>

            <h2 style="font-size:16px; margin:14px 0 6px;">Thin controllers, focused services</h2>
            <p>
                Controllers should just handle HTTP concerns: validation, authorization and sending
                responses. Business rules live in services:
            </p>

            <pre><code>class UserController extends Controller
{
    public function store(UserService $service, UserStoreRequest $request)
    {
        $user = $service-&gt;createUser($request-&gt;validated());

        return response()-&gt;json($user, 201);
    }
}</code></pre>

            <p>
                This structure has made it easier for me to onboard new developers and keep the project
                maintainable after years of changes.
            </p>

        @elseif($slug === 'optimizing-mysql-queries-laravel')
            <p>
                Slow APIs are usually just slow database queries. Before thinking about caching,
                I first profile the queries and make sure they are as efficient as they can be.
            </p>

            <h2 style="font-size:16px; margin:14px 0 6px;">Finding the slow query</h2>
            <p>
                In Laravel, I often start with the debug bar or simple query logging in local/dev
                environments. Once I know which query is slow, I run it with <code>EXPLAIN</code> in MySQL.
            </p>

            <pre><code>EXPLAIN SELECT * FROM orders
WHERE user_id = 123
ORDER BY created_at DESC
LIMIT 50;</code></pre>

            <p>
                If I see a full table scan or missing index, that’s usually my first fix.
            </p>

            <h2 style="font-size:16px; margin:14px 0 6px;">Using the right indexes</h2>
            <p>
                For example, if I frequently filter by <code>user_id</code> and order by
                <code>created_at</code>, I’ll add a composite index:
            </p>

            <pre><code>ALTER TABLE orders
ADD INDEX idx_orders_user_created (user_id, created_at);</code></pre>

            <p>
                In Laravel migrations, I would express this with:
            </p>

            <pre><code>Schema::table('orders', function (Blueprint $table) {
    $table-&gt;index(['user_id', 'created_at'], 'idx_orders_user_created');
});</code></pre>

            <p>
                Many performance problems disappear with just the right indexing and avoiding N+1 queries.
            </p>

        @elseif($slug === 'rest-api-best-practices-laravel')
            <p>
                A REST API is not just endpoints returning JSON. To be pleasant to use, it needs consistent
                status codes, clear error messages and predictable behavior.
            </p>

            <h2 style="font-size:16px; margin:14px 0 6px;">Consistent status codes</h2>
            <p>
                I try to follow a simple rule set:
            </p>
            <ul>
                <li><code>200</code>/<code>201</code> for successful responses.</li>
                <li><code>400</code> for validation errors or bad input.</li>
                <li><code>401</code> for unauthenticated requests.</li>
                <li><code>403</code> for forbidden actions.</li>
                <li><code>404</code> when a resource does not exist.</li>
            </ul>

            <h2 style="font-size:16px; margin:14px 0 6px;">Standard error shape</h2>
            <p>
                I keep error responses consistent, for example:
            </p>

            <pre><code>{
  "message": "The given data was invalid.",
  "errors": {
    "email": ["The email has already been taken."]
  }
}</code></pre>

            <p>
                This makes it easier for frontend/mobile teams to handle errors in a generic way.
            </p>

            <h2 style="font-size:16px; margin:14px 0 6px;">Versioning</h2>
            <p>
                For APIs that will be public or long-lived, I like using prefix-based versioning
                such as <code>/api/v1/...</code>. It keeps breaking changes controlled and explicit.
            </p>
        @else
            <p>
                This is a placeholder post. In your real application you can load posts from a database
                table and render dynamic content here.
            </p>
        @endif

    </article>

</section>

@endsection
