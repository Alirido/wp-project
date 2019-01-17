<?php /* Template Name: profilePage */ ?>

<!DOCTYPE html>
<html>
<head>

	<title>Profile</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="assets/style.css" >

</head>
<body>

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
					<a href="https://malirido.wordpress.com">2015</a>
					<a href="#">2016</a>
					<a href="#">2017</a>
				</div>
			</td>
			<td><a href="https://archaea.sith.itb.ac.id/kontak/">Kontak</a></td>
			<td><a href="#">Masuk</a></td>
	    </tr>

	</table>


	<div class="content">

		<div class="left">
			<div>
				<i class="fas fa-user" style="float: left; color: white; font-size: 15em"></i>
			</div>

			<div>
				<table>
					<tr>
						<td>Nama:</td>
						<td style="padding-left: 2em">M Ali Rido</td>
					</tr>
					<tr>
						<td>NIM:</td>
						<td style="padding-left: 2em">12314123</td>
					</tr>
					<tr>
						<td>Jabatan:</td>
						<td style="padding-left: 2em">Ketua</td>
					</tr>
				</table>
			</div>
		</div>
		<div class="right">
			<div>
				<img src="assets/radar-chart.png">
			</div>
			<br>
			<div class="presensi">
				<span>Presensi ...% (14/20)</span><br>
				<div style="margin-left: 0.4em">
					- Hiburan & Internalisasi ...% (4/4)<br>
					- Forum & kajian ... % ()<br>
					- Pengembangan Anggota ... % ()<br>
					- Kebutuhan Dasar ... % ()<br>
					- Keprofesian ... % ()<br>
					- Kemasyarakatan ... % () 
				</div>
			</div>
		</div>

		<!-- <table id="test" style="width: 100%">
			
			<tr>
				<td style="width: 75%"><img src="assets/ava_icon.png" width="288" height="288" style="margin-left: 2em; float: left"><br><br><br><span style="font-size: 1.5em; font-weight: bold; padding-left: 0.5em">Nama: .....</span><br>
				<span style="font-size: 1.5em; font-weight: bold; padding-left: 0.5em">NIM: .....</span><br>
				<span style="font-size: 1.5em; font-weight: bold; padding-left: 0.5em">Jabatan: .....</span></td>
				<td style="width: 25%"><img src="assets/radar-chart.png"><br> -->
					<!-- <div>Icons made by <a href="https://www.freepik.com/" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" 			    title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" 			    title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div> -->
					<!-- <br>
					Presensi ...% (14/20)<br>
					- kolonisasi ...% (4/4)<br>
					- ... <br>
					- ... <br>
					- ... <br>
				</td>


			</tr>

		</table> -->
		<!-- <br><br><br><br><br> -->

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