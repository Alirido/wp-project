<?php

require_once($_SERVER['DOCUMENT_ROOT'] . $folder . '/wp-config.php');
require_once($_SERVER['DOCUMENT_ROOT'] .  $folder . '/wp-load.php');

global $wpdb;

if (isset($_POST['nim']) && isset($_POST['acara']) && isset($_POST['div'])) {

	$nim = $wpdb->escape($_POST['nim']);
	$acara = $wpdb->escape($_POST['acara']);

	if ($wpdb->delete("presensi", array('nim' => $nim, 'acara' => $acara), 
		array(
			'%d',
			'%s') ) ) {

		$div = $wpdb->escape($_POST['div']);

		if ($div=="Hiburan dan Internalisasi") {

			if ($wpdb->query("UPDATE mahasiswa SET hib_in=hib_in-1 WHERE nim=$nim")) {
				echo 'Mahasiswa dengan nim "'.$nim.'" berhasil dihapus.';
			} else {
				echo 'Mahasiswa dengan nim "'.$nim.'" gagal dihapus.';		
			}

		} elseif ($div=="Forum dan Kajian") {

			if ($wpdb->query("UPDATE mahasiswa SET for_kaj=for_kaj-1 WHERE nim=$nim")) {
				echo 'Mahasiswa dengan nim "'.$nim.'" berhasil dihapus.';
			} else {
				echo 'Mahasiswa dengan nim "'.$nim.'" gagal dihapus.';		
			}

		} elseif ($div=="Pengembangan Anggota") {

			if ($wpdb->query("UPDATE mahasiswa SET peng_ang=peng_ang-1 WHERE nim=$nim")) {
				echo 'Mahasiswa dengan nim "'.$nim.'" berhasil dihapus.';
			} else {
				echo 'Mahasiswa dengan nim "'.$nim.'" gagal dihapus.';		
			}

		} elseif ($div=="Kebutuhan Dasar") {

			if ($wpdb->query("UPDATE mahasiswa SET keb_das=keb_das-1 WHERE nim=$nim")) {
				echo 'Mahasiswa dengan nim "'.$nim.'" berhasil dihapus.';
			} else {
				echo 'Mahasiswa dengan nim "'.$nim.'" gagal dihapus.';		
			}

		} elseif ($div=="Keprofesian") {

			if ($wpdb->query("UPDATE mahasiswa SET keprof=keprof-1 WHERE nim=$nim")) {
				echo 'Mahasiswa dengan nim "'.$nim.'" berhasil dihapus.';
			} else {
				echo 'Mahasiswa dengan nim "'.$nim.'" gagal dihapus.';		
			}

		} elseif ($div=="Kemasyarakatan") {

			if ($wpdb->query("UPDATE mahasiswa SET kemas=kemas-1 WHERE nim=$nim")) {
				echo 'Mahasiswa dengan nim "'.$nim.'" berhasil dihapus.';
			} else {
				echo 'Mahasiswa dengan nim "'.$nim.'" gagal dihapus.';		
			}

		} else {
			echo "Divisi tidak terdefinisi";
		}

	} else {
		echo 'Mahasiswa dengan nim "'.$nim.'" gagal dihilangkan.';
	}

} else {
	echo "Nothing post method happen!";
}

?>