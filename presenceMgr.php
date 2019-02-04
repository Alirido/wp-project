<?php /* Template Name: presence management */ 

require_once($_SERVER['DOCUMENT_ROOT'] . $folder . '/wp-config.php');
require_once($_SERVER['DOCUMENT_ROOT'] .  $folder . '/wp-load.php');

session_start();

if (!isset($_SESSION['uname'])) {
	header("location: http://archaea.sith.itb.ac.id/login-rapot/?err=2");
}

$div = "-";
$a = "-";
$d = -1;
if (isset($_GET['div']) && isset($_GET['event'])) {
	$d = $_GET['div'];
	if ($d == 0) {
		$div = "Hiburan dan Internalisasi";
	} elseif ($d == 1) {
		$div = "Forum dan Kajian";
	} elseif ($d == 2) {
		$div = "Pengembangan Anggota";
	} elseif ($d == 3) {
		$div = "Kebutuhan Dasar";
	} elseif ($d == 4) {
		$div = "Keprofesian";
	} elseif ($d == 5) {
		$div = "Kemasyarakatan";
	} else {
		header("location: http://archaea.sith.itb.ac.id/admin-page");	
	}

	$a = $_GET['event'];
} else {
	header("location: http://archaea.sith.itb.ac.id/admin-page");
}

$angkatan = 2015;
if (isset($_GET['angkatan'])) {
	$angkatan = $_GET['angkatan'];
}

global $wpdb;

$check = $wpdb->get_var("SELECT COUNT(id) FROM event_archaea WHERE acara='$a'");
if ($check != 1) {
	header("location: http://archaea.sith.itb.ac.id/admin-page/event-management/?div=$d");
}
$results = $wpdb->get_results("SELECT presensi.nim, mahasiswa.nama FROM presensi INNER JOIN mahasiswa ON presensi.nim=mahasiswa.nim WHERE presensi.divisi='$div' AND presensi.acara='$a' AND mahasiswa.angkatan='$angkatan' ORDER BY mahasiswa.nim");
?>

<!DOCTYPE html>
<html>
<head>

	<title>Presence management</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="http://archaea.sith.itb.ac.id/wp-content/themes/zerif-lite/custom/assets/style.css">

</head>
<body style="background-color: white; color: black">

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
			<td>
				<ul class="breadcrumb">
				  <li><a href="http://archaea.sith.itb.ac.id/admin-page/">Admin</a></li>
				  <li><a href="http://archaea.sith.itb.ac.id/admin-page/event-management/?div=<?php echo $d; ?>">Event Management</a></li>
				  <li>Presensi</li>
				</ul>
			</td>
			<td><a href="https://archaea.sith.itb.ac.id/">Home</a></td>
			<td class="dropbtn" onclick="myFunction()">Angkatan <i class="fa fa-caret-down"></i>
				<div class="dropdown-content" id="myDropdown">
					<a href="http://archaea.sith.itb.ac.id/admin-page/event-management/presensi/?angkatan=2015&div=<?php echo $d; ?>&event=<?php echo $a; ?>">2015</a>
					<a href="http://archaea.sith.itb.ac.id/admin-page/event-management/presensi/?angkatan=2016&div=<?php echo $d; ?>&event=<?php echo $a; ?>">2016</a>
					<a href="http://archaea.sith.itb.ac.id/admin-page/event-management/presensi/?angkatan=2017&div=<?php echo $d; ?>&event=<?php echo $a; ?>">2017</a>
				</div>
			</td>
			<td><a href="https://archaea.sith.itb.ac.id/kontak/">Kontak</a></td>
			<td><a href="http://archaea.sith.itb.ac.id/login-rapot/?err=0">Keluar</a></td>
	    </tr>

	</table>

	<div class="content event-mgr" style="overflow-x: auto">

		<h1 style="text-align: center"><?php echo $div; ?></h1>
		<br>
		<h3>Daftar kehadiran dari acara <em><?php echo $a; ?></em> (angkatan <?php echo $angkatan; ?>)</h3>
		<table>
			<tr>
				<th>#</th>
				<th>NIM</th>
				<th>Nama</th>
			</tr>
		<?php $i=0;
		foreach ($results as $print) { ++$i; ?>
			
			<tr>
				<td><?php echo $i; ?></td>
				<td><?php echo $print->nim; ?></td>
				<td><?php echo $print->nama; ?></td>
				<td>
					<i class="fas fa-trash-alt" onclick="hapus(<?php echo $print->nim; ?>, '<?php echo $a; ?>', '<?php echo $div; ?>')" style="color: red; font-size: 1.5em"></i>
				</td>
			</tr>

		<?php } ?>

		</table>

		<br><br><br>

		<div class="form-inline">
		<!-- <form class="form-inline" method="POST">
			<input type="hidden" name="divisi" value="</?php echo $div; ?>">
			<input type="hidden" name="id" value="</?php echo ++$i; ?>"> -->
			<input type="text" id="nim" name="nim" placeholder="Masukkan nim...">
			<button name="adding" onclick="tambah('<?php echo $div; ?>', '<?php echo $a; ?>')">Tambah</button>
		<!-- </form> -->
		</div>

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

	function hapus(x, y, z) {
		var nim = x;
		var acara = y;
		var divisi = z;
		if (nim == "" || acara == "" || divisi == "") {
			return;
		}

		//debugging
		// console.log(divisi);
		// console.log(acara);
		// console.log(nim);

		var xhttp;
		if (window.XMLHttpRequest) {
			// code for modern browsers
			xhttp = new XMLHttpRequest();
		} else {
			// code for IE6, IE5
            xhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}

		xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				var acc = this.responseText;

				alert(acc);

				location.reload();
            }
        };

        xhttp.open("POST", "http://archaea.sith.itb.ac.id/wp-content/themes/zerif-lite/custom/_removePresence.php", true);
        xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhttp.send("nim="+nim+"&acara="+acara+"&div="+divisi);
	}

	function tambah(x, y) {

		var divisi = x;
		var acara = y;

		var nim = document.getElementById("nim").value;
		if (acara == "" || divisi == "" || nim=="") {
			return;
		}

		//debugging
		// console.log(divisi);
		// console.log(acara);
		// console.log(nim);

		var xhttp;
		if (window.XMLHttpRequest) {
			// code for modern browsers
			xhttp = new XMLHttpRequest();
		} else {
			// code for IE6, IE5
            xhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}

		xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				var acc = this.responseText;

				alert(acc);

				location.reload();
            }
        };

        xhttp.open("POST", "http://archaea.sith.itb.ac.id/wp-content/themes/zerif-lite/custom/_addPresence.php", true);
        xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhttp.send("event="+acara+"&divisi="+divisi+"&nim="+nim);
	}

</script>
</body>
</html>