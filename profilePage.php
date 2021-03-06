<?php /* Template Name: profilePage */ 

$nim = 0;
if (isset($_GET['nim'])) {
	$nim = $_GET['nim'];
} else {
	header("location: https://archaea.sith.itb.ac.id/rapot-himpunan");
}

// QUERY
global $wpdb;
$print = $wpdb->get_row( "SELECT * FROM mahasiswa WHERE nim=$nim" );
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
	            <td></td>
	        </tr>
	    </table>

	</header>

	<table class="topmenu">

		<tr>
			<td></td>
			<td><a href="https://archaea.sith.itb.ac.id/amerta-home/">Home</a></td>
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

		<div class="left">
			<div>
				<?php 
				if ($print->foto != "NO") {
					echo '<img class="details-image" src="https://archaea.sith.itb.ac.id/wp-content/uploads/photo-profile/'.$print->angkatan.'/'.$print->nim.'.'.$print->foto.'" alt="'.$print->nim.'">';
				} else {
					echo '<i class="fas fa-user-circle" style="float: left; color: white; font-size: 15em"></i>';
				}
				?>
			</div>

			<br><br>

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

			<div style="background-color: #2A1B3A">
				<canvas id="myChart"></canvas>
			</div>
			
			<br>
			
			<div class="presensi">

				<?php

				$hib_in = $wpdb->get_var("SELECT COUNT(id) FROM event_archaea WHERE divisi='Hiburan dan Internalisasi'");
				$for_kaj = $wpdb->get_var("SELECT COUNT(id) FROM event_archaea WHERE divisi='Forum dan Kajian'");
				$peng_ang = $wpdb->get_var("SELECT COUNT(id) FROM event_archaea WHERE divisi='Pengembangan Anggota'");
				$keb_das = $wpdb->get_var("SELECT COUNT(id) FROM event_archaea WHERE divisi='Kebutuhan Dasar'");
				$keprof = $wpdb->get_var("SELECT COUNT(id) FROM event_archaea WHERE divisi='Keprofesian'");
				$kemas = $wpdb->get_var("SELECT COUNT(id) FROM event_archaea WHERE divisi='Kemasyarakatan'");
				$total = $print->hib_in + $print->for_kaj + $print->peng_ang + $print->keb_das + $print->keprof + $print->kemas;
				$total_acara = $hib_in + $for_kaj + $peng_ang + $keb_das + $keprof + $kemas;
				$arr[0] = $hib_in==0? 0 : round($print->hib_in/$hib_in*100);
				$arr[1] = $for_kaj==0? 0 : round($print->for_kaj/$for_kaj*100);
				$arr[2] = $peng_ang==0? 0 : round($print->peng_ang/$peng_ang*100);
				$arr[3] = $keb_das==0? 0 : round($print->keb_das/$keb_das*100);
				$arr[4] = $keprof==0? 0 : round($print->keprof/$keprof*100);
				$arr[5] = $kemas==0? 0 : round($print->kemas/$kemas*100);
				?>
				Presensi: <?php echo ($total_acara==0? 0 : round($total/$total_acara*100)); ?>% (<?php echo $total."/".$total_acara; ?>)<br>
				<div style="margin-left: 0.4em">
					- Hiburan & Internalisasi: <?php echo $arr[0]; ?>% (<?php echo $print->hib_in."/".$hib_in; ?>)<br>
					- Forum & kajian: <?php echo $arr[1]; ?>% (<?php echo $print->for_kaj."/".$for_kaj; ?>)<br>
					- Pengembangan Anggota: <?php echo $arr[2]; ?>% (<?php echo $print->peng_ang."/".$peng_ang; ?>)<br>
					- Kebutuhan Dasar: <?php echo $arr[3]; ?>% (<?php echo $print->keb_das."/".$keb_das; ?>)<br>
					- Keprofesian: <?php echo $arr[4]; ?>% (<?php echo $print->keprof."/".$keprof; ?>)<br>
					- Kemasyarakatan: <?php echo $arr[5]; ?>% (<?php echo $print->kemas."/".$kemas; ?>)
				</div>

			</div>

		</div>

	</div>

<script>

var dataArray = [<?php echo join(',', $arr); ?>];

var ctx = document.getElementById('myChart').getContext('2d');

var myRadarChart = new Chart(ctx, {
    type: 'radar',
    data: {
	    labels: ['Hiburan & Internalisasi', 'Forum & Kajian', 'Pengembangan Anggota', 'Kebutuhan Dasar', 'Keprofesian', 'Kemasyarakatan'],
	    datasets: [{
	    	label: "Kehadiran",
	    	// 'rgb(255, 99, 132)', *warna PINK
	    	backgroundColor: 'rgba(246, 228, 66, 0.2)',
	    	borderColor: 'rgba(246, 228, 66, 1)',
	    	borderWidth: 1,
	    	data: dataArray
	    	//[hib_in, for_kaj, peng_ang, keb_das, keprof, kemas]
	        // data: [20, 10, 4, 2]
	    }]
	},
    options: {

    	scaleLabel: {fontColor: 'rgba(246, 228, 66, 1)'},
    	scale: {
    		gridLines: {color: "white"},
    		pointLabels: {fontColor: "white"},
    		ticks: {
    			backdropColor: 'rgba(42, 27, 58, 1)',
    			fontColor: "white",
    			beginAtZero: true,
    		// 	// min: 2,
    			max: 100,
    			stepSize: 20
    		}
    	},
    	legend: {
    		position: 'bottom',
    		labels: {
                fontColor: 'white'
                // fillStyle: 'rgba(246, 228, 66, 1)'
            }
    	},
    	title: {
    		display: true,
    		text: 'Radar Chart Kehadiran',
    		fontColor: 'rgba(246, 228, 66, 1)' //Yellow
    	},
    	layout: {
            padding: {
                left: 2,
                right: 0,
                top: 0,
                bottom: 0
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

// var myChart = new Chart(ctx, {
//     type: 'bar',
//     data: {
//         labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
//         datasets: [{
//             label: '# of Votes',
//             data: [12, 19, 3, 5, 2, 3],
//             backgroundColor: [
//                 'rgba(255, 99, 132, 0.2)',
//                 'rgba(54, 162, 235, 0.2)',
//                 'rgba(255, 206, 86, 0.2)',
//                 'rgba(75, 192, 192, 0.2)',
//                 'rgba(153, 102, 255, 0.2)',
//                 'rgba(255, 159, 64, 0.2)'
//             ],
//             borderColor: [
//                 'rgba(255,99,132,1)',
//                 'rgba(54, 162, 235, 1)',
//                 'rgba(255, 206, 86, 1)',
//                 'rgba(75, 192, 192, 1)',
//                 'rgba(153, 102, 255, 1)',
//                 'rgba(255, 159, 64, 1)'
//             ],
//             borderWidth: 1
//         }]
//     },
//     options: {
//         scales: {
//             yAxes: [{
//                 ticks: {
//                     beginAtZero:true
//                 }
//             }]
//         }
//     }
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