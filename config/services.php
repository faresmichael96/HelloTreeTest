<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'facebook' => [
        'client_id'     => env('FB_ID', '555809655435628'),
        'client_secret' => env('FB_SECRET', '9bcd6fc087b48ee2aaef1d9731668e4d'),
        'redirect'      => env('APP_URL', 'http://localhost/oauth/facebook/callback'),
    ],

    'google' => [
        'client_id'     => env('GL_ID', '299546397457-puapvpai436o3c9kc88uaf5hubouin5o.apps.googleusercontent.com'),
        'client_secret' => env('GL_SECRET', 'wL_ZV6RTHeW6IMVyQ1h6w5pA'),
        'redirect'      => env('APP_URL', 'http://localhost/oauth/google/callback'),
    ],

];
