<?php

	$myfile = fopen('stor.json', 'r');
	$data = fread($myfile, filesize('stor.json'));
	
	$user = json_decode($data, true);
	print_r($user);

	/*$user = [
				'id' => 11,
				'name' => 'alamin',
				'email' => 'abc@gmail.com',
		 	];

	$data = json_encode($user);
	echo $data;*/
?>