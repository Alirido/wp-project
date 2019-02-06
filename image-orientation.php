<?php

require_once($_SERVER['DOCUMENT_ROOT'] . $folder . '/wp-config.php');
require_once($_SERVER['DOCUMENT_ROOT'] .  $folder . '/wp-load.php');

function correctImageOrientation($filename) {
    echo "hello<br>";
  if (function_exists('exif_read_data')) {
    $exif = exif_read_data($filename);
    var_dump($exif);
    if($exif && isset($exif['Orientation'])) {
      $orientation = $exif['Orientation'];
      if($orientation != 1){
        $img = imagecreatefromjpeg($filename);
        $deg = 0;
        switch ($orientation) {
          case 3:
            $deg = 180;
            break;
          case 6:
            $deg = 270;
            break;
          case 8:
            $deg = 90;
            break;
        }
        if ($deg) {
          $img = imagerotate($img, $deg, 0);       
        }
        // then rewrite the rotated image back to the disk as $filename
        imagejpeg($img, $filename, 95);
      } // if there is some rotation necessary
    } // if have the exif orientation info
  } // if function exists     
}

// echo "Hello, world!";

global $wpdb;

$results = $wpdb->get_results("SELECT nim, angkatan, foto FROM mahasiswa WHERE NOT foto='NO'");

foreach ($results as $row) {
	$destinationFile = "https://archaea.sith.itb.ac.id/wp-content/uploads/photo-profile/".$row->angkatan."/".$row->nim.".".$row->foto;
	// echo $destinationFile."<br>";
	// echo $row->angkatan."/".$row->nim.".".$row->foto."<br>";

	correctImageOrientation($destinationFile);

}

?>