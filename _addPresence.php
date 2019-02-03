<?php

require_once($_SERVER['DOCUMENT_ROOT'] . $folder . '/wp-config.php');
require_once($_SERVER['DOCUMENT_ROOT'] .  $folder . '/wp-load.php');

global $wpdb;

if (isset($_POST['event']) && isset($_POST['divisi']) && isset($_POST['nim'])) { // Untuk penambahan mahasiswa
	$acara = $wpdb->escape($_POST['event']);
	$div = $wpdb->escape($_POST['divisi']);
	$nim = $wpdb->escape($_POST['nim']);

	$found = $wpdb->get_var("SELECT COUNT(nama) FROM mahasiswa WHERE nim=$nim");
	if ($found == 1) {
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

				if ($wpdb->query("UPDATE mahasiswa SET hib_in=hib_in+1 WHERE nim=$nim")) {
					echo 'Mahasiswa dengan nim "'.$nim.'" berhasil ditambahkan.';
				} else {
					echo 'Masuk sini ngga? - Mahasiswa dengan nim "'.$nim.'" gagal ditambahkan.';		
				}

			} elseif ($div=="Forum dan Kajian") {

				if ($wpdb->query("UPDATE mahasiswa SET for_kaj=for_kaj+1 WHERE nim=$nim")) {
					echo 'Mahasiswa dengan nim "'.$nim.'" berhasil ditambahkan.';
				} else {
					echo 'Mahasiswa dengan nim "'.$nim.'" gagal ditambahkan.';		
				}

			} elseif ($div=="Pengembangan Anggota") {

				if ($wpdb->query("UPDATE mahasiswa SET peng_ang=peng_ang+1 WHERE nim=$nim")) {
					echo 'Mahasiswa dengan nim "'.$nim.'" berhasil ditambahkan.';
				} else {
					echo 'Mahasiswa dengan nim "'.$nim.'" gagal ditambahkan.';		
				}

			} elseif ($div=="Kebutuhan Dasar") {

				if ($wpdb->query("UPDATE mahasiswa SET keb_das=keb_das+1 WHERE nim=$nim")) {
					echo 'Mahasiswa dengan nim "'.$nim.'" berhasil ditambahkan.';
				} else {
					echo 'Mahasiswa dengan nim "'.$nim.'" gagal ditambahkan.';		
				}

			} elseif ($div=="Keprofesian") {

				if ($wpdb->query("UPDATE mahasiswa SET keprof=keprof+1 WHERE nim=$nim")) {
					echo 'Mahasiswa dengan nim "'.$nim.'" berhasil ditambahkan.';
				} else {
					echo 'Mahasiswa dengan nim "'.$nim.'" gagal ditambahkan.';		
				}

			} elseif ($div=="Kemasyarakatan") {

				if ($wpdb->query("UPDATE mahasiswa SET kemas=kemas+1 WHERE nim=$nim")) {
					echo 'Mahasiswa dengan nim "'.$nim.'" berhasil ditambahkan.';
				} else {
					echo 'Mahasiswa dengan nim "'.$nim.'" gagal ditambahkan.';		
				}

			} else {
				echo "Divisi tidak terdefinisi";
			}
		} else {
			// Gagal menambahkan
			echo 'Mahasiswa dengan nim "'.$nim.'" gagal ditambahkan.';
		}
	} else {
		echo 'Mahasiswa dengan nim "'.$nim.'" Tidak ada.';
	}

} else {
	echo "Nothing post method happen!";
}

?>