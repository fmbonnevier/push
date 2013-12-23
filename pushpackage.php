
<?php

$file = '/fp.pushpackage/fp.pushpackage.zip';

if(file_exists($file)) {

	//Identify header
	header('Content-type: application/zip');

	//force download with readfile
	readfile($file);
	exit;
}

?>
