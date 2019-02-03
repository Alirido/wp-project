<?php

require_once($_SERVER['DOCUMENT_ROOT'] . $folder . '/wp-config.php');
require_once($_SERVER['DOCUMENT_ROOT'] .  $folder . '/wp-load.php');

global $wpdb;

if (isset($_POST['acara']) && isset($_POST['divisi']) && isset($_POST['id'])) {

	$acara = $wpdb->escape($_POST['acara']);
	$div = $wpdb->escape($_POST['divisi']);
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
			'%s')))) {
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