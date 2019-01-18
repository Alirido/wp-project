<?php /* Template Name: adminPage */ ?>

<!DOCTYPE html>
<html>
<head>

	<title>Presence manager</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<!-- <link rel="stylesheet" type="text/css" href="http://archaea.sith.itb.ac.id/wp-content/themes/zerif-lite/custom/assets/style.css"> -->
	<link rel="stylesheet" type="text/css" href="assets/style.css">

</head>
<body style="background-color: white">

	<!-- HEADER -->
	<header>

	    <table class="top">
	        <tr>

	            <td><img width="144" height="144" src="http://archaea.sith.itb.ac.id/wp-content/uploads/2016/09/cropped-cropped-FIX-ARCHAEA-3-1-2.png" class="custom-logo" alt="cropped-cropped-FIX-ARCHAEA-3-1-2.png" itemprop="logo" srcset="http://archaea.sith.itb.ac.id/wp-content/uploads/2016/09/cropped-cropped-FIX-ARCHAEA-3-1-2.png 1004w, http://archaea.sith.itb.ac.id/wp-content/uploads/2016/09/cropped-cropped-FIX-ARCHAEA-3-1-2-150x150.png 150w, http://archaea.sith.itb.ac.id/wp-content/uploads/2016/09/cropped-cropped-FIX-ARCHAEA-3-1-2-300x300.png 300w, http://archaea.sith.itb.ac.id/wp-content/uploads/2016/09/cropped-cropped-FIX-ARCHAEA-3-1-2-768x770.png 768w" sizes="(max-width: 1004px) 100vw, 1004px"></td>

	            	<!-- <img src="assets/logo_archaea.jpg" width="144" height="144"> -->
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
					<a href="https://malirido.wordpress.com">2015</a>
					<a href="#">2016</a>
					<a href="#">2017</a>
				</div>
			</td>
			<td><a href="https://archaea.sith.itb.ac.id/kontak/">Kontak</a></td>
			<td><a href="http://archaea.sith.itb.ac.id/login-rapot/">Keluar</a></td>
	    </tr>

	</table>


	<div class="content admin-side">

		<table class="presence-mgr">

			<tr>
				<th>NIM</th>
				<th>Nama</th>
				<th style="background-color: yellow">Hiburan & Internalisasi</th>
				<th>Forum & Kajian</th>
				<th>Pengembangan Anggota</th>
				<th>Kebutuhan Dasar</th>
				<th>Keprofesian</th>
				<th>Kemasyarakatan</th>
				<th>Total</th>
			</tr>
			<tr>
				<td><a href="#">127386132</a></td>
				<td><a href="#">M Ali Rido</a></td>
				<td>5/10</td>
				<td>5/10</td>
				<td>5/10</td>
				<td>5/10</td>
				<td>5/10</td>
				<td>5/10</td>
				<td>50%</td>
			</tr>
			<tr>
				<td><a href="#">127386196</a></td>
				<td><a href="#">Reyhan T</a></td>
				<td>4/10</td>
				<td>4/10</td>
				<td>4/10</td>
				<td>4/10</td>
				<td>4/10</td>
				<td>4/10</td>
				<td>40%</td>
			</tr>

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