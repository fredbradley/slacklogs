<?php

return [

    'webhook' => env('SLACK_LOGGING_WEBHOOK', null),

	
	'name' => 'Laravel Error - ' . env('APP_NAME') . ' (' . strtoupper(env('APP_ENV')) . ')',
	
	'channel_dev' => '#general',
	
	'channel_master' => '#general'
	
];
