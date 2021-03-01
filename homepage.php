<?php

if(isset($_GET['userId'] ))
{
	$userId = $_GET['userId'];

	$f = fopen("RGDetails.txt", "r");

	$data = fread($f, filesize("RGDetails.txt"));

	//$data_filter = explode("\n", $data);



	foreach ($data as $key ) {


		if($key == $userId)
		{
			echo "Name:". $key ;
		}
	}

	

}

?>
