<?php
require_once($loc . "includes/movie.inc.php");

if(isset($movie)) {
	switch($godownload) {
		case "export":
			break;
		case "cover":
			if($movie->hasCover() && file_exists($settings["photo"]["covers"].$movie->id.".jpg")) {
				$body = implode('', file($settings["photo"]["covers"].$movie->id.".jpg"));
				
				// Creat the correct header
				$name = preg_replace("/[^\s\.a-zA-Z0-9_-]/", "", $movie->name);
				header("Content-Disposition: attachment; filename=\"".addslashes($name).".jpg\"");
				header("Content-type: application/force-download");
				header("Pragma: cache");
				header("Cache-Control: public, must-revalidate, max-age=0");
				header("Connection: close");
				header("Expires: ".date("r", time()+60*60));
				header("Last-Modified: ".date("r", time()));
				header("Content-length: ".strlen($body)."\r\n");
				echo $body;
				exit();
			}
			break;
	}
}