<?php

require_once($_SERVER['DOCUMENT_ROOT'] . $folder . '/wp-config.php');
require_once($_SERVER['DOCUMENT_ROOT'] .  $folder . '/wp-load.php');

global $wpdb;

if (isset($_POST['acara']) && isset($_POST['div'])) {

	$acara = $wpdb->escape($_POST['acara']);
	$div = $wpdb->escape($_POST['div']);

	if ($wpdb->delete("event_archaea", array('acara' => $acara, 'divisi' => $div), 
		array(
			'%s',
			'%s') ) ) {
		echo 'Acara "'.$acara.'" berhasil dihapus.';
	} else {
		echo 'Acara "'.$acara.'" gagal dihapus.';
	}

} elseif (isset($_POST['event']) && isset($_POST['divisi']) && isset($_POST['nim'])) { // Untuk penambahan mahasiswa
	$acara = $wpdb->escape($_POST['event']);
	$div = $wpdb->escape($_POST['divisi']);
	$nim = $wpdb->escape($_POST['nim']);

	if (($wpdb->insert('presensi', 
		array(
			'nim' => $nim,
			'acara' => $acara,
			'divisi' => $div
		),
		array(
			'%d',
			'%s',
			'%s')))) {
		// Berhasil menambahkan

		if ($div=="Hiburan dan Internalisasi") {

			if (($wpdb->update('presensi', 
				array(
					'hib_in' => 'hib_in'+1
				),
				array(
					'nim' => $nim),
				array('%d'), array('%d')
			))) {
			echo 'Mahasiswa dengan nim "'.$nim.'" berhasil ditambahkan.';
			} else {
				echo 'Mahasiswa dengan nim "'.$nim.'" gagal ditambahkan.';		
			}

		} elseif ($div=="Forum dan Kajian") {

			if (($wpdb->update('presensi', 
				array(
					'for_kaj' => 'for_kaj'+1
				),
				array(
					'nim' => $nim),
				array('%d'), array('%d')
			))) {
			echo 'Mahasiswa dengan nim "'.$nim.'" berhasil ditambahkan.';
			} else {
				echo 'Mahasiswa dengan nim "'.$nim.'" gagal ditambahkan.';		
			}

		}

	} else {
		// Gagal menambahkan
		echo 'Mahasiswa dengan nim "'.$nim.'" gagal ditambahkan.';
	}


} else {
	echo "Nothing post method happen!";
}

?>