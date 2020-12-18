<?php

return [

    'api_key' => env('ICEPAY_API_KEY', 'xxxxx'),
    'api_secret' => env('ICEPAY_API_SECRET', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx'),

    'completed_url' => env('ICEPAY_COMPLETED_URL', 'http://example.local/payment.php'),
    'error_url' => env('ICEPAY_ERROR_URL', 'http://example.local/payment.php'),
];
