<?php

require_once($_SERVER['DOCUMENT_ROOT'] . $folder . '/wp-config.php');
require_once($_SERVER['DOCUMENT_ROOT'] .  $folder . '/wp-load.php');

function correctImageOrientation($filename) {
	$orientation = 1;
    if (function_exists('exif_read_data')) {
    	// echo "hello<br>";
    	$exif = exif_read_data($filename);
    	var_dump($exif);
    	if($exif && isset($exif['Orientation'])) {
    		$orientation = $exif['Orientation'];
    	}
    } elseif (preg_match('@\x12\x01\x03\x00\x01\x00\x00\x00(.)\x00\x00\x00@', file_get_contents($filename), $matches)) {
    	$orientation = ord($matches[1]);
    }
    echo $orientation."<br>";
    // if($orientation != 1){
    //   $img = imagecreatefromjpeg($filename);
    //   $deg = 0;
    //   switch ($orientation) {
    //     case 3:
    //       $deg = 180;
    //       break;
    //     case 6:
    //       $deg = 270;
    //       break;
    //     case 8:
    //       $deg = 90;
    //       break;
    //   }
    //   if ($deg) {
    //     $img = imagerotate($img, $deg, 0);       
    //   }
    //   // then rewrite the rotated image back to the disk as $filename
    //   imagejpeg($img, $filename, 95);
    // } // if there is some rotation necessary
}

// echo "Hello, world!";

global $wpdb;

$results = $wpdb->get_results("SELECT nim, angkatan, foto FROM mahasiswa WHERE foto='JPG' AND nim=10415022");

foreach ($results as $row) {
	$destinationFile = $_SERVER['DOCUMENT_ROOT'] . $folder . "/wp-content/uploads/photo-profile/".$row->angkatan."/".$row->nim.".".$row->foto;
	// echo $destinationFile."<br>";
	// echo $row->angkatan."/".$row->nim.".".$row->foto."<br>";

	correctImageOrientation($destinationFile);

}

?>