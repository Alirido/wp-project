<?php /* Template Name: reportPage1 */ ?>

<!DOCTYPE html>
<html>
<head>
	<title>Rapot himpunan</title>
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
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
		/*border: 1px solid red;*/
	}

	table.top tr td:nth-child(2) {
		text-align: center;
		width:40%;
		font-size: 6em;
		/*border: 1px solid green;*/
	}

	table.top tr td:last-child {
		text-align: right;
		width:30%;
		padding-right: 0.6em;
		/*border: 1px solid yellow;*/
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


	table#test i {
		/*border: 1px solid red;*/
		color: white;
		font-size: 10em;
	}

	table#test td {
		/*border: 1px solid yellow;*/
		text-align: center;
	}


	/* Testing */

	/*.dropdown {
	  float: left;
	  overflow: hidden;
	}*/

	.dropbtn {
	  cursor: pointer;
	  /*font-size: 1.3em;  */
	  border: none;
	  outline: none;
	  color: #666;
	  /*padding: 14px 16px;*/
	  /*background-color: inherit;*/
	  /*font-family: inherit;*/
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

</style>

</head>
<body>

	<!-- HEADER -->
	<header>

	    <table class="top">
	        <tr>

	            <td><img width="144" height="144" src="http://archaea.sith.itb.ac.id/wp-content/uploads/2016/09/cropped-cropped-FIX-ARCHAEA-3-1-2.png" class="custom-logo" alt="cropped-cropped-FIX-ARCHAEA-3-1-2.png" itemprop="logo" srcset="http://archaea.sith.itb.ac.id/wp-content/uploads/2016/09/cropped-cropped-FIX-ARCHAEA-3-1-2.png 1004w, http://archaea.sith.itb.ac.id/wp-content/uploads/2016/09/cropped-cropped-FIX-ARCHAEA-3-1-2-150x150.png 150w, http://archaea.sith.itb.ac.id/wp-content/uploads/2016/09/cropped-cropped-FIX-ARCHAEA-3-1-2-300x300.png 300w, http://archaea.sith.itb.ac.id/wp-content/uploads/2016/09/cropped-cropped-FIX-ARCHAEA-3-1-2-768x770.png 768w" sizes="(max-width: 1004px) 100vw, 1004px"></td>

	            	<!-- <img src="assets/logo_archaea.jpg" width="144" height="144"> -->
	            <td>AMERTA</td>
	            <td>Logo#2</td>
	        </tr>
	    </table>

	</header>

	<table class="topmenu">

		<tr>
			<td></td>
			<td><a href="https://archaea.sith.itb.ac.id/">Home</a></td>
			<!-- <td>Angkatan<i class="fa fa-caret-down"></i></td> -->
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
		<p><img src="assets/ava_icon.png" width="288" height="288" style="margin-left: 2em; float: left"><br><br><br><br><br><br><span style="font-size: 2em; font-weight: bold; padding-left: 1em">Ketua angkatan</span><br><br>
			Nama: M Ali Rido<br>
			NIM: 128731238
		</p>

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