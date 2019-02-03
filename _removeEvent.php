<?php

require_once($_SERVER['DOCUMENT_ROOT'] . $folder . '/wp-config.php');
require_once($_SERVER['DOCUMENT_ROOT'] .  $folder . '/wp-load.php');

global $wpdb;

if (isset($_POST['acara']) && isset($_POST['divisi'])) {

	$acara = $wpdb->escape($_POST['acara']);
	$div = $wpdb->escape($_POST['divisi']);

	$results = $wpdb->get_results("SELECT nim FROM presensi WHERE acara=$acara AND divisi=$div");

	if ($div=="Hiburan dan Internalisasi") {
		foreach ($results as $row) {	

			if ($wpdb->query("UPDATE mahasiswa SET hib_in=hib_in-1 WHERE nim=$row->nim")) {}
			else {
				echo 'Acara "'.$acara.'" gagal dihapus';
				return;
			}

		}
	} elseif ($div=="Forum dan Kajian") {
		foreach ($results as $row) {

			if ($wpdb->query("UPDATE mahasiswa SET for_kaj=for_kaj-1 WHERE nim=$row->nim")) {}
			else {
				echo 'Acara "'.$acara.'" gagal dihapus';
				return;
			}

		}
	} elseif ($div=="Pengembangan Anggota") {
		foreach ($results as $row) {

			if ($wpdb->query("UPDATE mahasiswa SET peng_ang=peng_ang-1 WHERE nim=$row->nim")) {}
			else {
				echo 'Acara "'.$acara.'" gagal dihapus';
				return;
			}

		}
	} elseif ($div=="Kebutuhan Dasar") {
		foreach ($results as $row) {

			if ($wpdb->query("UPDATE mahasiswa SET keb_das=keb_das-1 WHERE nim=$row->nim")) {}
			else {
				echo 'Acara "'.$acara.'" gagal dihapus';
				return;
			}
		}
	} elseif ($div=="Keprofesian") {
		foreach ($results as $row) {

			if ($wpdb->query("UPDATE mahasiswa SET keprof=keprof-1 WHERE nim=$row->nim")) {}
			else {
				echo 'Acara "'.$acara.'" gagal dihapus';
				return;
			}

		}
	} elseif ($div=="Kemasyarakatan") {
		foreach ($results as $row) {

			if ($wpdb->query("UPDATE mahasiswa SET kemas=kemas-1 WHERE nim=$row->nim")) {}
			else {
				echo 'Acara "'.$acara.'" gagal dihapus';
				return;
			}

		}
	} else {
		echo "Divisi tidak terdefinisi";
	}

	if ($wpdb->delete("event_archaea", array('acara' => $acara, 'divisi' => $div), 
		array(
			'%s',
			'%s') ) ) {
		echo 'Acara "'.$acara.'" berhasil dihapus.';
	} else {
		echo 'Acara "'.$acara.'" gagal dihapus.';
	}

} else {
	echo "Nothing post method happen!";
}

?>