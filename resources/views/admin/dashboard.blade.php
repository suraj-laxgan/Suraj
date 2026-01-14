@extends('layouts.admin')

@section('title', 'Admin Dashboard')
@section('page_title', 'Dashboard')
@section('breadcrumb', 'Dashboard')

@section('content')

<div class="admin-grid" style="margin-bottom:16px;">
    <div class="admin-card">
        <div class="stat-card-title">Published posts</div>
        <div class="stat-card-value">{{ $stats['posts'] ?? 0 }}</div>
        <div class="stat-card-sub">Live on the blog</div>
    </div>
    <div class="admin-card">
        <div class="stat-card-title">Projects</div>
        <div class="stat-card-value">{{ $stats['projects'] ?? 0 }}</div>
        <div class="stat-card-sub">Shown in portfolio</div>
    </div>
    <div class="admin-card">
        <div class="stat-card-title">Drafts</div>
        <div class="stat-card-value">{{ $stats['drafts'] ?? 0 }}</div>
        <div class="stat-card-sub">Waiting to be published</div>
    </div>
</div>

<div class="admin-card" style="margin-bottom:16px;">
    <h2 style="margin:0 0 8px; font-size:14px;">Recent posts</h2>
    <table>
        <thead>
        <tr>
            <th>Title</th>
            <th>Category</th>
            <th>Status</th>
            <th>Published</th>
        </tr>
        </thead>
        <tbody>
        @isset($recentPosts)
            
       
        @forelse($recentPosts as $post)
            <tr>
                <td>
                    <a href="{{ url('admin.posts.edit', $post) }}" class="btn-link">
                        {{ $post->title }}
                    </a>
                </td>
                <td>{{ $post->category ?? '—' }}</td>
                <td>
                    @if($post->is_published)
                        <span class="badge badge-success">Published</span>
                    @else
                        <span class="badge badge-danger">Draft</span>
                    @endif
                </td>
                <td>{{ optional($post->published_at)->format('d M Y') ?? '—' }}</td>
            </tr>
        @empty
            <tr><td colspan="4" style="color:var(--text-soft); font-size:12px;">No posts yet.</td></tr>
        @endforelse
         @endisset
        </tbody>
    </table>
</div>

@endsection
