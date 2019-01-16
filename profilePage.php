<?php /* Template Name: profilePage */ ?>

<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<!-- <link rel="stylesheet" type="text/css" href="style.css" > -->
<style>
	body {
		font-family: Arial, Helvetica, sans-serif;
		color: #F6E442; /* Yellow */
	    margin: 0;
	    background-color: #2A1B3A; /* Purple */
	}

	/*--------------- TOP HEADER ---------------*/
	table.top {
		width: 100%;
		padding: 0;
		margin: 0;
	}

	table.top tr td:first-child {
		text-align: left;
		width:30%;
		padding-left: 0.6em;
	}

	table.top tr td:nth-child(2) {
		text-align: center;
		width:40%;
		font-size: 6em;
	}

	table.top tr td:last-child {
		text-align: right;
		width:30%;
		padding-right: 0.6em;
	}

	/*--------------- HEADER ---------------*/


	/*--------------- TOPMENU ---------------*/
	table.topmenu {
		background-color: #f3f3f3;
		/*#FDFBFC;  /* WHite */
		/* #C19BDE; /* ungu muda */
		width: 100%;
		margin: 0;
		padding: 0;
		overflow: hidden;
		color: #666;
	}

	table.topmenu tr td {
		font-size: 1.3em;
		margin: 0;
		padding: 0;
		/*color: black;*/
		/*border: 1px solid red;	*/
	}

	table.topmenu a {
		padding: 0.5em 0.2em;
		text-decoration: none;
		color: #666;
		display: block;
		margin: 0;
	}

	table.topmenu a:hover {
		background-color: #ddd;
	}

	table.topmenu tr td:first-child {
		text-align: right;
	}

	table.topmenu tr td:nth-child(2) {
		width: 9%;
		text-align: center;
	}

	table.topmenu tr td:nth-child(3) {
		width: 9%;
		text-align: center;
	}

	table.topmenu tr td:nth-child(4) {
		width: 9%;
		text-align: center;
	}

	table.topmenu tr td:last-child {
		width: 9%;
		text-align: center;
	}

	.dropbtn {
		cursor: pointer;
		border: none;
		outline: none;
		color: #666;
		margin: 0;
	}

	.dropbtn:hover, .dropbtn:focus {
		background-color: #ddd;
	}

	.dropdown-content {
		margin-top: 0.64em;
		display: none;
		position: absolute;
		background-color: #f9f9f9;
		min-width: 160px;
		box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		z-index: 1;
	}

	.dropdown-content a {
		float: none;
		color: black;
		padding: 12px 16px;
		text-decoration: none;
		display: block;
		text-align: left;
	}

	.dropdown-content a:hover {
		background-color: #ddd;
	}

	.show {
		display: block;
	}

	/*--------------- CONTENT ---------------*/

	table.data td {
		/*border: 1px solid red;*/
		padding-left: 5em;
	}

	div.content {
		width: 100%;
		margin: 0;
		padding: 0;
		height: 100%;
		/*font-size: 0;*/
	}

	div.left, div.right {
		display: inline-block;
		/*font-size: 3em;*/
	}

	div.left {
		width: 60%;
		/*background-color: black;*/
		position: relative;
	}

	div.right {
		width: 20%;
		/*background-color: white;*/
		position: relative;
	}


</style>

</head>
<body>

	<!-- HEADER -->
	<header>

	    <table class="top">
	        <tr>
	            <td><img width="144" height="144" src="http://archaea.sith.itb.ac.id/wp-content/uploads/2016/09/cropped-cropped-FIX-ARCHAEA-3-1-2.png" class="custom-logo" alt="cropped-cropped-FIX-ARCHAEA-3-1-2.png" itemprop="logo" srcset="http://archaea.sith.itb.ac.id/wp-content/uploads/2016/09/cropped-cropped-FIX-ARCHAEA-3-1-2.png 1004w, http://archaea.sith.itb.ac.id/wp-content/uploads/2016/09/cropped-cropped-FIX-ARCHAEA-3-1-2-150x150.png 150w, http://archaea.sith.itb.ac.id/wp-content/uploads/2016/09/cropped-cropped-FIX-ARCHAEA-3-1-2-300x300.png 300w, http://archaea.sith.itb.ac.id/wp-content/uploads/2016/09/cropped-cropped-FIX-ARCHAEA-3-1-2-768x770.png 768w" sizes="(max-width: 1004px) 100vw, 1004px"></td>
	            <td>AMERTA</td>
	            <td>LOGO#2</td>
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

		<div class="left" style="padding: 2em; margin: 3em">
			<i class="fas fa-user" style="float: left; color: white; font-size: 15em"></i>
			<table class="data">
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
		<div class="right">
			<img src="assets/radar-chart.png"><br><br>
			Presensi ...% (14/20)<br>
				- kolonisasi ...% (4/4)<br>
				- ... <br>
				- ... <br>
				- ... <br>
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