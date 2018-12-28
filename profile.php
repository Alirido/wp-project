<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- <link rel="stylesheet" type="text/css" href="style.css" > -->
<style>
	body {
		font-family: Arial, Helvetica, sans-serif;;
	    margin: 0;
	    background-color: #8D15E8;
	}

	table.top tr td:first-child {
		text-align: left;
		width:30%;
	}

	table.top tr td:nth-child(2) {
		text-align: center;
		width:40%;
	}

	table.top tr td:last-child {
		text-align: right;
		width:30%;
	}

	table.top tr td {
		/*border: 1px solid red;*/
	}

	/*--------------- HEADER ---------------*/
	header {
		background-color: #8D15E8;
	}

	table.header {
		width: 100%;
		padding: 0;
		margin: 0;
		/*border: 1px solid red;*/
	}

	table.header tr:first-child td {
		/*padding: 1em 0.5em;*/
		/*border-bottom: 1px solid white;*/
	}

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

	table#test td {
		border: 1px solid red;
	}



</style>

</head>
<body>

	<!-- HEADER -->
	<header>

	    <table class="header top">
	        <tr>
	            <td><img src="assets/logo_archaea.jpg" width="144" height="144"></th>
	            <td style="font-size: 9em; font-weight: normal">AMERTA</th>
	            <td>LOGO#2</i></a></th>
	        </tr>
	    </table>

	</header>

	<ul>
		<li><a class="active" href="#home">Home</a></li>
		<li><a href="#news">News</a></li>
		<li><a href="#contact">Contact</a></li>
		<li><a href="#about">About</a></li>
	</ul>

	<table class="topnav top">
		<tr >
			<td>Back to Home</td>
			<td>Generation<i class="fa fa-caret-down"></i></td>
			<td>LOGO#2</i></a></td>
	    </tr>
	</table>


	<div class="content">

		<table id="test" style="width: 100%">
			
			<tr>
				<td style="width: 75%"><img src="assets/ava_icon.png" width="288" height="288" style="margin-left: 2em; float: left"><br><br><br><span style="font-size: 1.5em; font-weight: bold; padding-left: 0.5em">Nama: .....</span><br>
				<span style="font-size: 1.5em; font-weight: bold; padding-left: 0.5em">NIM: .....</span><br>
				<span style="font-size: 1.5em; font-weight: bold; padding-left: 0.5em">Jabatan: .....</span></td>
				<td style="width: 25%">Presensi ...% (14/20)<br>
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