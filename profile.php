<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
		font-size: 9em;
	}

	table.top tr td:last-child {
		text-align: right;
		width:30%;
		padding-right: 0.6em;
	}

	/*--------------- HEADER ---------------*/


	/*--------------- TOPMENU ---------------*/
	table.topmenu {
		background-color: #FDFBFC; /* WHite */
		/* #C19BDE; /* ungu muda */
		width: 100%;
	}

	table.topmenu tr td {
		font-size: 1.5em;
		padding: 0.6em 0.5em;
		margin: 0;
		color: black;
		/*border: 1px solid red;	*/
	}

	table.topmenu tr td:first-child {
		text-align: right;
	}

	table.topmenu tr td:nth-child(2) {
		width: 15%;
		text-align: center;
	}

	table.topmenu tr td:last-child {
		width: 15%;
	}

	/* Naon ie */
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

	table#test td {
		/*border: 1px solid red;*/
	}



</style>

</head>
<body>

	<!-- HEADER -->
	<header>

	    <table class="top">
	        <tr>
	            <td><img src="assets/logo_archaea.jpg" width="144" height="144"></td>
	            <td style="font-size: 9em; font-weight: normal">AMERTA</td>
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

	<table class="topmenu">

		<tr>
			<td>Back to Home</td>
			<td>Generation<i class="fa fa-caret-down"></i></td>
			<td>Log In</td>
	    </tr>

	</table>


	<div class="content">

		<table id="test" style="width: 100%">
			
			<tr>
				<td style="width: 75%"><img src="assets/ava_icon.png" width="288" height="288" style="margin-left: 2em; float: left"><br><br><br><span style="font-size: 1.5em; font-weight: bold; padding-left: 0.5em">Nama: .....</span><br>
				<span style="font-size: 1.5em; font-weight: bold; padding-left: 0.5em">NIM: .....</span><br>
				<span style="font-size: 1.5em; font-weight: bold; padding-left: 0.5em">Jabatan: .....</span></td>
				<td style="width: 25%"><img src="assets/radar-chart.png"><br>
					<!-- <div>Icons made by <a href="https://www.freepik.com/" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" 			    title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" 			    title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div> --><br>
					Presensi ...% (14/20)<br>
					- kolonisasi ...% (4/4)<br>
					- ... <br>
					- ... <br>
					- ... <br>
				</td>


			</tr>

		</table>
		<!-- <br><br><br><br><br> -->


	</div>
</body>
</html>