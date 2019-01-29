<?php /* Template Name: adminPage */ 

session_start();

if (!isset($_SESSION['uname'])) {
	header("location: http://archaea.sith.itb.ac.id/login-rapot/?err=2");
}

$angkatan = 2015;
if (isset($_GET['angkatan'])) {
	$angkatan = $_GET['angkatan'];
}
?>

<!DOCTYPE html>
<html>
<head>

	<title>Presence manager</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="http://archaea.sith.itb.ac.id/wp-content/themes/zerif-lite/custom/assets/style.css">

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
				<th style="padding: 0">
				<div class="dropdown" style="width: 100%">
					<button class="dropdown-btn2 hide2" onclick="myFunction2()" style="width: 100%;">Hiburan & Internalisasi</button>
					<div class="dropdown-content2" id="myDropdown2">
						<select name="acara" size="4" multiple>
							<option value="1">Ultah Archaea</option>
						</select><br>
						<button onclick="addEvent()">Tambah</button>
						<button onclick="removeEvent()">Hapus acara yg dipilih</button>
					</div>
				</div>
				</th>
				<th style="padding: 0">
				<div class="dropdown">
					<button class="dropdown-btn2 hide3" onclick="myFunction3()">Forum & Kajian</button>
					<div class="dropdown-content2" id="myDropdown3">
						<select name="acara" size="4" multiple>
							<option value="1">Ultah Archaea</option>
						</select><br>
						<button onclick="addEvent()">Tambah</button>
						<button onclick="removeEvent()">Hapus acara yg dipilih</button>
					</div>
				</div>
				</th>
				<th style="padding: 0">
				<div class="dropdown">
					<button class="dropdown-btn2 hide4" onclick="myFunction4()">Pengembangan Anggota</button>
					<div class="dropdown-content2" id="myDropdown4">
						<select name="acara" size="4" multiple>
							<option value="1">Ultah Archaea</option>
						</select><br>
						<button onclick="addEvent()">Tambah</button>
						<button onclick="removeEvent()">Hapus acara yg dipilih</button>
					</div>
				</div>
				</th>
				<th style="padding: 0">
				<div class="dropdown">
					<button class="dropdown-btn2 hide5" onclick="myFunction5()">Kebutuhan Dasar</button>
					<div class="dropdown-content2" id="myDropdown5">
						<select name="acara" size="4" multiple>
							<option value="1">Ultah Archaea</option>
						</select><br>
						<button onclick="addEvent()">Tambah</button>
						<button onclick="removeEvent()">Hapus acara yg dipilih</button>
					</div>
				</div>
				</th>
				<th style="padding: 0">
				<div class="dropdown">
					<button class="dropdown-btn2 hide6" onclick="myFunction6()">Keprofesian</button>
					<div class="dropdown-content2" id="myDropdown6">
						<select name="acara" size="4" multiple>
							<option value="1">Ultah Archaea</option>
						</select><br>
						<button onclick="addEvent()">Tambah</button>
						<button onclick="removeEvent()">Hapus acara yg dipilih</button>
					</div>
				</div>
				</th>
				<th style="padding: 0">
				<div class="dropdown">
					<button class="dropdown-btn2 hide7" onclick="myFunction7()">Kemasyarakatan</button>
					<div class="dropdown-content2" id="myDropdown7">
						<select name="acara" size="4" multiple>
							<option value="1">Ultah Archaea</option>
						</select><br>
						<button onclick="addEvent()">Tambah</button>
						<button onclick="removeEvent()">Hapus acara yg dipilih</button>
					</div>
				</div>
				</th>
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

	/* When the user clicks on the button, 
	toggle between hiding and showing the dropdown content */
	function myFunction2() {
		console.log("tes");
	  document.getElementById("myDropdown2").classList.toggle("show");
	}

	function myFunction3() {
		console.log("testing2");
	  document.getElementById("myDropdown3").classList.toggle("show");
	}

	function myFunction4() {
	  document.getElementById("myDropdown4").classList.toggle("show");
	}

	function myFunction5() {
	  document.getElementById("myDropdown5").classList.toggle("show");
	}

	function myFunction6() {
	  document.getElementById("myDropdown6").classList.toggle("show");
	}

	function myFunction7() {
	  document.getElementById("myDropdown7").classList.toggle("show");
	}

	// Close the dropdown if the user clicks outside of it
	window.onclick = function(e) {
	  if (!e.target.matches('.dropbtn')) {
	  	var myDropdown = document.getElementById("myDropdown");
	    if (myDropdown.classList.contains('show')) {
	      myDropdown.classList.remove('show');
	    }
	}
	  // } else if (!e.target.matches('.hide2')) {
	  // 	var myDropdown = document.getElementById("myDropdown2");
	  //   if (myDropdown.classList.contains('show')) {
	  //     myDropdown.classList.remove('show');
	  //   }
	  // } else if (!e.target.matches('.hide3')) {
	  // 	var myDropdown = document.getElementById("myDropdown3");
	  //   if (myDropdown.classList.contains('show')) {
	  //     myDropdown.classList.remove('show');
	  //   }
	  // } else if (!e.target.matches('.hide4')) {
	  // 	var myDropdown = document.getElementById("myDropdown4");
	  //   if (myDropdown.classList.contains('show')) {
	  //     myDropdown.classList.remove('show');
	  //   }
	  // } else if (!e.target.matches('.hide5')) {
	  // 	var myDropdown = document.getElementById("myDropdown5");
	  //   if (myDropdown.classList.contains('show')) {
	  //     myDropdown.classList.remove('show');
	  //   }
	  // } else if (!e.target.matches('.hide6')) {
	  // 	var myDropdown = document.getElementById("myDropdown6");
	  //   if (myDropdown.classList.contains('show')) {
	  //     myDropdown.classList.remove('show');
	  //   } 
	  // } else if (!e.target.matches('.hide7')) {
	  // 	var myDropdown = document.getElementById("myDropdown7");
	  //   if (myDropdown.classList.contains('show')) {
	  //     myDropdown.classList.remove('show');
	  //   }
	  // }
	}



</script>
</body>
</html>