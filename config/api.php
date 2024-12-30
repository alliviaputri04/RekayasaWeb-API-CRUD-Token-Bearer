<?php

return [
    // Base URL untuk API
    'base_url' => env('API_BASE_URL', 'https://api.example.com'),

    // API Key untuk autentikasi
    'api_key' => env('API_KEY', 'your-api-key-here'),

    // Timeout default untuk permintaan API dalam detik
    'timeout' => env('API_TIMEOUT', 30),

    // Pengaturan retry jika request gagal
    'retry' => [
        'attempts' => env('API_RETRY_ATTEMPTS', 3), // Jumlah maksimal percobaan
        'delay' => env('API_RETRY_DELAY', 100), // Waktu tunda antara percobaan (dalam milidetik)
    ],

    // Endpoint khusus
    'endpoints' => [
        'users' => '/v1/users',
        'posts' => '/v1/posts',
        'comments' => '/v1/comments',
    ],

    // Headers default yang akan dikirimkan dengan setiap permintaan
    'default_headers' => [
        'Accept' => 'application/json',
        'Content-Type' => 'application/json',
    ],

    // Middleware yang digunakan
    'middleware' => ['api', 'auth:sanctum'],

    // Apakah debug mode diaktifkan untuk log permintaan
    'debug' => env('API_DEBUG', false),
];
