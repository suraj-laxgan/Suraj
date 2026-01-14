@extends('layouts.app')

@section('title', 'Code Snippets | Suraj Das')
@section('meta_description', 'Reusable Laravel, PHP and MySQL code snippets.')

@section('content')
<h1>Code Snippets</h1>
<p>Short reusable snippets I often use in Laravel, PHP, and MySQL work.</p>

<section class="card" style="margin-top:15px;">
    <h2>Laravel Validation Example</h2>
    <pre><code>public function store(Request $request)
{
    $data = $request-&gt;validate([
        'name'  =&gt; 'required|string|max:255',
        'email' =&gt; 'required|email|unique:users,email',
        'password' =&gt; 'required|min:8|confirmed',
    ]);

    // ...
}</code></pre>
</section>

<section class="card">
    <h2>Common Eloquent Relationship</h2>
    <pre><code>class User extends Model
{
    public function posts()
    {
        return $this-&gt;hasMany(Post::class);
    }
}</code></pre>
</section>

<section class="card">
    <h2>Simple MySQL Index Example</h2>
    <pre><code>ALTER TABLE users
ADD INDEX idx_users_email (email);</code></pre>
</section>
@endsection
