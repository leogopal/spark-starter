<?php

return [

	'profile_fields' => [
		'about'
	],

	'api' => [
		'auth_token_expires' 	=> 60,
		'key_token_expires'		=> 1,
	],

	'auth' => [
		'min_password_length' => 5,
	],

	'user_model' => App\User::class,
	'show_docs' => env('WAVE_DOCS', true),
    'demo' => env('WAVE_DEMO', true),
    'dev_bar' => env('WAVE_BAR', true),

    'paddle' => [
        'vendor' => env('PADDLE_VENDOR_ID', ''),
        'auth_code' => env('PADDLE_VENDOR_AUTH_CODE', ''),
        'env' => env('PADDLE_ENV', 'sandbox')
    ]

];
