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
				'%s'
			) ) ) {
			echo 'Acara "'.$acara.'" berhasil dihapus.';
		} else {
			echo 'Acara "'.$acara.'" gagal dihapus.';
		}

	} elseif (isset($_POST['event']) && isset($_POST['bagian']) && isset($_POST['id'])) {

		$acara = $wpdb->escape($_POST['event']);
		$div = $wpdb->escape($_POST['bagian']);
		$id = $wpdb->escape($_POST['id']);

		if (($wpdb->insert('event_archaea', 
			array(
				'id' => $id,
				'acara' => $acara,
				'divisi' => $div
			),
			array(
				'%d',
				'%s',
				'%s'
			)
		))) {
			// Berhasil menambahkan
			echo 'Acara "'.$acara.'" berhasil ditambahkan.';
		} else {
			// Gagal menambahkan
			echo 'Acara "'.$acara.'" gagal ditambahkan.';
		}
	} else {
		echo "Nothing post method happen!";
	}

?>