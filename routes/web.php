<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'greeting' => 'Hello'
    ]);
});

Route::get('/jobs', function () {
    $jobs = Job::all();
    return view('jobs', ['jobs' => $jobs]);
});

Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);

    if (! $job) {
        abort(404, 'Job not found.');
    }

    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});
