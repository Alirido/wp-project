<?php /* Template Name: adminPage */ 

require_once($_SERVER['DOCUMENT_ROOT'] . $folder . '/wp-config.php');
require_once($_SERVER['DOCUMENT_ROOT'] .  $folder . '/wp-load.php');

session_start();

if (!isset($_SESSION['uname'])) {
	header("location: http://archaea.sith.itb.ac.id/login-rapot/?err=2");
}

$angkatan = 2015;
if (isset($_GET['angkatan'])) {
	$angkatan = $_GET['angkatan'];
}

global $wpdb;
?>

<!DOCTYPE html>
<html>
<head>

	<title>Admin control</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="http://archaea.sith.itb.ac.id/wp-content/themes/zerif-lite/custom/assets/style.css">

</head>
<body style="background-color: white">

	<!-- HEADER -->
	<header>

	    <table class="top">
	        <tr>

	            <td><img width="144" height="144" src="http://archaea.sith.itb.ac.id/wp-content/uploads/2016/09/cropped-cropped-FIX-ARCHAEA-3-1-2.png" class="custom-logo" alt="cropped-cropped-FIX-ARCHAEA-3-1-2.png" itemprop="logo" srcset="http://archaea.sith.itb.ac.id/wp-content/uploads/2016/09/cropped-cropped-FIX-ARCHAEA-3-1-2.png 1004w, http://archaea.sith.itb.ac.id/wp-content/uploads/2016/09/cropped-cropped-FIX-ARCHAEA-3-1-2-150x150.png 150w, http://archaea.sith.itb.ac.id/wp-content/uploads/2016/09/cropped-cropped-FIX-ARCHAEA-3-1-2-300x300.png 300w, http://archaea.sith.itb.ac.id/wp-content/uploads/2016/09/cropped-cropped-FIX-ARCHAEA-3-1-2-768x770.png 768w" sizes="(max-width: 1004px) 100vw, 1004px"></td>
	            <td>AMERTA</td>
	            <td><img class="details-image" src="http://archaea.sith.itb.ac.id/wp-content/uploads/2018/04/archaeamantap.png" draggable="false" alt="archaea_mantap" width="144" height="144"></td>
	        </tr>
	    </table>

	</header>

	<table class="topmenu">

		<tr>
			<td></td>
			<td><a href="https://archaea.sith.itb.ac.id/">Home</a></td>
			<td class="dropbtn" onclick="myFunction()">Angkatan <i class="fa fa-caret-down"></i>
				<div class="dropdown-content" id="myDropdown">
					<a href="http://archaea.sith.itb.ac.id/admin-page?angkatan=2015">2015</a>
					<a href="http://archaea.sith.itb.ac.id/admin-page?angkatan=2016">2016</a>
					<a href="http://archaea.sith.itb.ac.id/admin-page?angkatan=2017">2017</a>
				</div>
			</td>
			<td><a href="https://archaea.sith.itb.ac.id/kontak/">Kontak</a></td>
			<td><a href="http://archaea.sith.itb.ac.id/login-rapot/?err=0">Keluar</a></td>
	    </tr>

	</table>


	<div class="content admin-side">

		<table class="presence-mgr">

			<tr>
				<th>NIM</th>
				<th>Nama</th>
				<th class="hvr"><a href="http://archaea.sith.itb.ac.id/admin-page/event-management/?div=0">Hiburan & Internalisasi</a></th>
				<th class="hvr"><a href="http://archaea.sith.itb.ac.id/admin-page/event-management/?div=1">Forum & Kajian</a></th>
				<th class="hvr"><a href="http://archaea.sith.itb.ac.id/admin-page/event-management/?div=2">Pengembangan Anggota</a></th>
				<th class="hvr"><a href="http://archaea.sith.itb.ac.id/admin-page/event-management/?div=3">Kebutuhan Dasar</a></th>
				<th class="hvr"><a href="http://archaea.sith.itb.ac.id/admin-page/event-management/?div=4">Keprofesian</a></th>
				<th class="hvr"><a href="http://archaea.sith.itb.ac.id/admin-page/event-management/?div=5">Kemasyarakatan</a></th>
			</tr>


			<!-- list mahasiswa -->
	<?php 
		global $wpdb;

		$results = $wpdb->get_results( "SELECT * FROM mahasiswa WHERE angkatan=$angkatan" );

		foreach ($results as $print) {
		
		?>		
		
			<tr>
				<td><?php echo $print->nim; ?></td>
				<td><?php echo $print->nama; ?></td>
				<td><?php echo $print->hib_in; ?></td>
				<td><?php echo $print->for_kaj; ?></td>
				<td><?php echo $print->peng_ang; ?></td>
				<td><?php echo $print->keb_das; ?></td>
				<td><?php echo $print->keprof; ?></td>
				<td><?php echo $print->kemas; ?></td>
			</tr>
	<?php
		}
	?>

		</table>

	</div>

<script>
	/* When the user clicks on the button, 
	toggle between hiding and showing the dropdown content */
	function myFunction() {
	  document.getElementById("myDropdown").classList.toggle("show");
	}

	// Close the dropdown if the user clicks outside of it
	window.onclick = function(e) {
	  if (!e.target.matches('.dropbtn')) {
	  	var myDropdown = document.getElementById("myDropdown");
	    if (myDropdown.classList.contains('show')) {
	      myDropdown.classList.remove('show');
	    }
	  } 
	}

</script>
</body>
</html>