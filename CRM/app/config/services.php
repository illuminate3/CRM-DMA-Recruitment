<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Third Party Services
	|--------------------------------------------------------------------------
	|
	| This file is for storing the credentials for third party services such
	| as Stripe, Mailgun, Mandrill, and others. This file provides a sane
	| default location for this type of information, allowing packages
	| to have a conventional place to find your various credentials.
	|
	*/

	'mailgun' => array(
		'domain' => 'sandbox97062badf6d64dda8e303a3305f80a16.mailgun.org',
		'secret' => 'key-9a325e438389cd85bdf5532911f52cd0',
	),

	'mandrill' => array(
		'secret' => '4gQp7N6aZL34Dv02K0ZclA',
	),

	'stripe' => array(
		'model'  => 'User',
		'secret' => '',
	),

);
