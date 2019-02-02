<?php /* Template Name: Event archaea */ 

require_once($_SERVER['DOCUMENT_ROOT'] . $folder . '/wp-config.php');
require_once($_SERVER['DOCUMENT_ROOT'] .  $folder . '/wp-load.php');

session_start();

if (!isset($_SESSION['uname'])) {
	header("location: http://archaea.sith.itb.ac.id/login-rapot/?err=2");
}

$div = "Hiburan dan Internalisasi";
if (isset($_GET['div'])) {
	$d = $_GET['div'];
	if ($d == 1) {
		$div = "Forum dan Kajian";
	} elseif ($d == 2) {
		$div = "Pengembangan Anggota";
	} elseif ($d == 3) {
		$div = "Kebutuhan Dasar";
	} elseif ($d == 4) {
		$div = "Keprofesian";
	} elseif ($d == 5) {
		$div = "Kemasyarakatan";
	}
} else {
	header("location: http://archaea.sith.itb.ac.id/admin-page");
}

global $wpdb;

$results = $wpdb->get_results("SELECT * FROM event_archaea WHERE divisi='$div'");
?>

<!DOCTYPE html>
<html>
<head>

	<title>Event management</title>
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

	<div class="content event-mgr" style="overflow-x: auto">

		<h1 style="text-align: center">EVENT MANAGEMENT</h1>
		<br>
		<h3><?php echo $div; ?></h3>
		<table>
			<tr>
				<th>#</th>
				<th>Acara</th>
				<th></th>
			</tr>
		<?php $i=0;
		foreach ($results as $print) { ++$i; ?>
			
			<tr>
				<td><?php echo $i; ?></td>
				<td><?php echo $print->acara; ?></td>
				<td>
					<i class="fas fa-trash-alt" onclick="hapus('<?php echo $print->acara; ?>', '<?php echo $div; ?>')" style="color: red; font-size: 1.5em"></i>
				</td>
			</tr>

		<?php } ?>

		</table>

		<br><br><br>

		<div class="form-inline">
		<!-- <form class="form-inline" method="POST">
			<input type="hidden" name="divisi" value="</?php echo $div; ?>">
			<input type="hidden" name="id" value="</?php echo ++$i; ?>"> -->
			<input type="text" id="acara" name="acara" placeholder="Masukkan nama acara...">
			<button name="insertEvent" onclick="tambah('<?php echo $div; ?>', '<?php echo ++$i; ?>')">Tambah</button>
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

	function hapus(x, y) {
		var divisi = y;
		var acara = x;
		if (acara == "" || divisi == "") {
			return;
		}

		// console.log(divisi);
		// console.log(acara);

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

        xhttp.open("POST", "http://archaea.sith.itb.ac.id/wp-content/themes/zerif-lite/custom/_updateEvent.php", true);
        xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhttp.send("acara="+acara+"&div="+divisi);
	}

	function tambah(x, y) {

		// console.log(x);
		// console.log(y);

		var divisi = x;
		var id = y;
		var acara = document.getElementById("acara").value;
		if (acara == "" || divisi == "" || id=="") {
			return;
		}

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

        xhttp.open("POST", "http://archaea.sith.itb.ac.id/wp-content/themes/zerif-lite/custom/_updateEvent.php", true);
        xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhttp.send("event="+acara+"&bagian="+divisi+"&id="+id);
	}

</script>
</body>
</html>