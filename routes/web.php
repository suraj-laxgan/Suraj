<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/resume', function () {
//     return view('resume');
// });
// Route::get('/projects', function () {
//     return view('projects');
// });
// Route::get('/blogs', function () {
//     return view('blogs');
// });
// Route::get('/blog-post', function () {
//     return view('blog-post');
// });
// Route::get('/mini-doc', function () {
//     return view('mini-doc');
// });
// Route::get('/about', function () {
//     return view('about');
// });
// Route::get('/contact', function () {
//     return view('contact');
// });

Route::get('/', fn() => view('welcome'))->name('home');

Route::get('/resume', fn() => view('resume'))->name('resume');

Route::get('/projects', fn() => view('projects'))->name('portfolio');

Route::get('/blogs', fn() => view('blog.index'))->name('blog.index');

Route::get('/blog/{slug}', function ($slug) {
    return view('blog.show', compact('slug'));
})->name('blog.show');

Route::get('/snippets', fn() => view('snippets'))->name('snippets');

Route::get('/about', fn() => view('about'))->name('about');

Route::get('/contact', fn() => view('contact'))->name('contact');

Route::post('/contact', function (Request $request) {
    $data = $request->validate([
        'name'    => ['required', 'string', 'max:255'],
        'email'   => ['required', 'email'],
        'message' => ['required', 'string'],
    ]);

    // Later: send mail or store in DB.
    // Mail::to('you@example.com')->send(new ContactMessage($data));

    return back()->with('status', 'Thank you for your message! I will get back to you soon.');
})->name('contact.send');


Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', fn() => view('admin.dashboard'))->name('dashboard');
     Route::get('/login', fn() => view('authTest.login'))->name('login');
      Route::get('/register', fn() => view('authTest.register'))->name('register');
});
