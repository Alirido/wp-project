<?php /* Template Name: reportPage1 */ ?>

<!DOCTYPE html>
<html>
<head>

	<title>Rapot himpunan</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="assets/style.css" >

</head>
<body>

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
			<td><a href="#">Masuk</a></td>
	    </tr>

	</table>


	<div class="content">
		
		<div class="leader">
			
			<div><a href="profilePage.php?angkatan=2015"><i class="fas fa-user"></i></a>
			</div>

			<div>

				<span style="font-size: 2em; font-weight: bold">Ketua angkatan</span><br><br>
				<table>
					<tr>
						<td>Nama:</td>
						<td style="padding-left: 2em">M Ali Rido</td>
					</tr>
					<tr>
						<td>NIM:</td>
						<td style="padding-left: 2em">128731238</td>
					</tr>
				</table>

			</div>

		</div>

		<br><br><br><br><br>

		<table id="test" style="width: 100%">
			
			<tr>
				<td style="width: 20%"><i class="fas fa-user"></i></td>
				<td style="width: 20%"><i class="fas fa-user"></i></td>
				<td style="width: 20%"><i class="fas fa-user"></i></td>
				<td style="width: 20%"><i class="fas fa-user"></i></td>
				<td style="width: 20%"><i class="fas fa-user"></i></td>
				<!-- <img src="assets/username_icon.png" width="216" height="216"> -->
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