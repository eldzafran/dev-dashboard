<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    // Data dinamis yang akan ditampilkan di dashboard
    $data = [
        'total_apis' => 4,
        'tests_completed' => 247,
        'active_apis' => 12,
    ];
    
    // Mengirim data ke view dashboard
    return view('dashboard', compact('data'));
});
