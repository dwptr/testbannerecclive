<?php return [
	'name' => 'Br0t0',
	'language' => 'id',
	'components' => [
		'mailer' => [
			'class' => 'yii\swiftmailer\Mailer',
			'transport' => [
				'class' => 'Swift_SmtpTransport',
				'host' => 'mail.ommu.co',
				'username' => 'noreply@ommu.co',
				'password' => '2jmFUcX8MXSR',
				'port' => '465',
				'encryption' => 'ssl',
			],
		],
	],
]; ?>
