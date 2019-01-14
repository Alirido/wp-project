<!DOCTYPE html>
<html>
<head>
	<title>Rapot mahasiswa</title>
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
		font-size: 9em;
		/*border: 1px solid green;*/
	}

	table.top tr td:last-child {
		text-align: right;
		width:30%;
		padding-right: 0.6em;
		/*border: 1px solid yellow;*/
	}

	/*--------------- HEADER ---------------*/

	/*--------------- TOPNAV ---------------*/
	table.topnav {
		background-color: #C19BDE;
		width: 100%;
	}

	table.topnav tr td {
		/*border: 1px solid yellow;	*/
		padding: 0.6em 0.5em;
		margin: 0;
	}

	ul {
	  list-style-type: none;
	  margin: 0;
	  padding: 0;
	  overflow: hidden;
	  background-color: #333;
	}

	li {
	  float: left;
	}

	li a {
	  display: block;
	  color: white;
	  text-align: center;
	  padding: 14px 16px;
	  text-decoration: none;
	}

	li a:hover {
	  background-color: #111;

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

</style>

</head>
<body>

	<!-- HEADER -->
	<header>

	    <table class="top">
	        <tr>
	            <td><img src="assets/logo_archaea.jpg" width="144" height="144"></td>
	            <td>AMERTA</td>
	            <td>LOGO#2</td>
	        </tr>
	    </table>

	</header>

	<!-- <ul>
		<li><a class="active" href="#home">Home</a></li>
		<li><a href="#news">News</a></li>
		<li><a href="#contact">Contact</a></li>
		<li><a href="#about">About</a></li>
	</ul> -->

	<!-- Coba ambi top menu nya dari yg udah dipake di wordpress-nya -->

	<table class="topnav">
		<tr style="color:black">
			<td>Back to Home</td>
			<td>Generation<i class="fa fa-caret-down"></i></td>
			<td>LOGO#2</td>
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
</body>
</html>