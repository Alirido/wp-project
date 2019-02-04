<?php /* Template Name: profilePage */ 

$nim = 0;
if (isset($_GET['nim'])) {
	$nim = $_GET['nim'];
} else {
	header("location: https://archaea.sith.itb.ac.id/rapot-himpunan");
}

// QUERY
global $wpdb;
$result = $wpdb->get_results( "SELECT * FROM mahasiswa WHERE nim=$nim" );
?>

<!DOCTYPE html>
<html>
<head>

	<title>Profile</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://archaea.sith.itb.ac.id/wp-content/themes/zerif-lite/custom/assets/style.css">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>

</head>
<body>

	<!-- HEADER -->
	<header>

	    <table class="top">
	        <tr>
	            <td><img width="144" height="144" src="https://archaea.sith.itb.ac.id/wp-content/uploads/2016/09/cropped-cropped-FIX-ARCHAEA-3-1-2.png" class="custom-logo" alt="cropped-cropped-FIX-ARCHAEA-3-1-2.png" itemprop="logo" srcset="https://archaea.sith.itb.ac.id/wp-content/uploads/2016/09/cropped-cropped-FIX-ARCHAEA-3-1-2.png 1004w, https://archaea.sith.itb.ac.id/wp-content/uploads/2016/09/cropped-cropped-FIX-ARCHAEA-3-1-2-150x150.png 150w, https://archaea.sith.itb.ac.id/wp-content/uploads/2016/09/cropped-cropped-FIX-ARCHAEA-3-1-2-300x300.png 300w, https://archaea.sith.itb.ac.id/wp-content/uploads/2016/09/cropped-cropped-FIX-ARCHAEA-3-1-2-768x770.png 768w" sizes="(max-width: 1004px) 100vw, 1004px"></td>
	            <td>AMERTA</td>
	            <td><img class="details-image" src="https://archaea.sith.itb.ac.id/wp-content/uploads/2018/04/archaeamantap.png" draggable="false" alt="archaea_mantap" width="144" height="144"></td>
	        </tr>
	    </table>

	</header>

	<table class="topmenu">

		<tr>
			<td></td>
			<td><a href="https://archaea.sith.itb.ac.id/">Home</a></td>
			<td class="dropbtn" onclick="myFunction()">Angkatan <i class="fa fa-caret-down"></i>
				<div class="dropdown-content" id="myDropdown">
					<a href="https://archaea.sith.itb.ac.id/rapot-himpunan?angkatan=2015">2015</a>
					<a href="https://archaea.sith.itb.ac.id/rapot-himpunan?angkatan=2016">2016</a>
					<a href="https://archaea.sith.itb.ac.id/rapot-himpunan?angkatan=2017">2017</a>
				</div>
			</td>
			<td><a href="https://archaea.sith.itb.ac.id/kontak/">Kontak</a></td>
			<td><a href="https://archaea.sith.itb.ac.id/login-rapot/">Masuk</a></td>
	    </tr>

	</table>


	<div class="content profil">

		<?php foreach ($result as $print) {
		?>

		<div class="left">
			<div>
				<?php 
				if ($print->foto != "NO") {
					echo '<img class="details-image" src="https://archaea.sith.itb.ac.id/wp-content/uploads/photo-profile/'.$print->angkatan.'/'.$print->nim.'.'.$print->foto.'" alt="'.$print->nim.'" width="400" height="400">';
				} else {
					echo '<i class="fas fa-user-circle" style="float: left; color: white; font-size: 15em"></i>';
				}
				?>

				<!-- <i class="fas fa-user" style="float: left; color: white; font-size: 15em"></i> -->
			</div>

			<div style="margin-left:0">
				<table>
					<tr>
						<td>Nama:</td>
						<td style="padding-left: 1em"><?php echo $print->nama; ?></td>
					</tr>
					<tr>
						<td>NIM:</td>
						<td style="padding-left: 1em"><?php echo $print->nim; ?></td>
					</tr>
					<!-- <tr>
						<td>Jabatan:</td>
						<td style="padding-left: 1em">Ketua</td>
					</tr> -->
				</table>
			</div>
		</div>
		<div class="right">

			<div style="background-color: white">
				<canvas id="myChart"></canvas>
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

		<?php
		}
		?>

	</div>

<script>

var ctx = document.getElementById('myChart').getContext('2d');

var myRadarChart = new Chart(ctx, {
    type: 'radar',
    data: {
	    labels: ['Hiburan & Internalisasi', 'Forum & Kajian', 'Pengembangan Anggota', 'Kebutuhan Dasar', 'Keprofesian', 'Kemasyarakatan'],
	    datasets: [{
	    	label: "Kehadiran",
	    	backgroundColor: 'rgb(100, 99, 132)',
	    	// 'rgb(255, 99, 132)',
	    	borderColor: 'rgb(100, 99, 132)',
	    	data: [5, 8, 4, 7, 5, 6]
	        // data: [20, 10, 4, 2]
	    }]
	},
    options: {
    	scale: {
    		ticks: {
    			//beginAtZero: true,
    			min: 2,
    			max: 10
    		}
    	}
    }
});

// var chart = new Chart(ctx, {
//     // The type of chart we want to create
//     type: 'line',

//     // The data for our dataset
//     data: {
//         labels: ["January", "February", "March", "April", "May", "June", "July"],
//         datasets: [{
//             label: "My First dataset",
//             backgroundColor: 'rgb(255, 99, 132)',
//             borderColor: 'rgb(255, 99, 132)',
//             data: [0, 10, 5, 2, 20, 30, 45],
//         }]
//     },

//     // Configuration options go here
//     options: {}
// });

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