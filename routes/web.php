<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    // Data untuk Dashboard Overview
    $data = [
        'total_tests' => 247,
        'success_rate' => '94.5%',
        'active_apis' => 12,
        'last_test_date' => '28 Oct',
        'test_case_progress' => [
            ['name' => 'Payment Gateway - Transaction', 'status' => 'Completed', 'time' => '120ms', 'result' => 'success'],
            ['name' => 'QRIS - Generate QR Code', 'status' => 'Completed', 'time' => '98ms', 'result' => 'success'],
            ['name' => 'Switching Service - Inquiry', 'status' => 'Completed', 'time' => '156ms', 'result' => 'success'],
            ['name' => 'Payment Gateway - Refund', 'status' => 'Failed', 'time' => '245ms', 'result' => 'failed'],
            ['name' => 'API Authentication', 'status' => 'Completed', 'time' => '89ms', 'result' => 'success'],
            ['name' => 'Biller Inquiry - PLN', 'status' => 'Completed', 'time' => '99ms', 'result' => 'success'],
        ],
        'active_api_services' => [
            ['name' => 'Payment Gateway API', 'version' => 'v2.1', 'calls' => 1245, 'status' => 'active'],
            ['name' => 'QRIS Integration API', 'version' => 'v1.5', 'calls' => 892, 'status' => 'active'],
            ['name' => 'Switching Service API', 'version' => 'v3.0', 'calls' => 2341, 'status' => 'active'],
            ['name' => 'Biller Management API', 'version' => 'v2.0', 'calls' => 567, 'status' => 'active'],
        ],
    ];

    return view('dashboard', compact('data'));
});

// Route untuk API (menampilkan API overview)
Route::get('/api', function () {
    // Data untuk API
    $data = [
        'total_apis' => 4,
        'endpoints' => 41,
        'uptime' => '100%',
        'avg_response' => '<200ms',
    ];
    
    return view('api', compact('data'));
});

// Route untuk Sandbox Testing (menampilkan statistik dan progress)
Route::get('/sandbox', function () {
    // Data untuk Sandbox Testing
    $data = [
        'total_tests' => 247,
        'success_rate' => '94.5%',
        'avg_response_time' => '145ms',
        'active_tests' => 23,
    ];
    
    return view('sandbox', compact('data'));
});
