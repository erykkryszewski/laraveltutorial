<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job; // get the Job class from models

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', ['jobs' => Job::all()]);
});

Route::get('/jobs/{id}', function ($id) {

    $job = Job::find($id); // we use the Job class and find function inside it

    return view('job', ['job' => $job]);
});


Route::get('/contact', function () {
    return view('contact');
});
