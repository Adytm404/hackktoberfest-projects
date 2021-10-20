<?php 

	$name = "images";

	if (!is_dir($name)) {
		mkdir($name);

		echo "$name successfully created";
	} else {
		rmdir($name);
		echo "$name already exists";
	}

 ?>
