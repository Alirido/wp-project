<?php /* Template Name: reportPage1 */ 

require_once($_SERVER['DOCUMENT_ROOT'] . $folder . '/wp-config.php');
require_once($_SERVER['DOCUMENT_ROOT'] .  $folder . '/wp-load.php');

$angkatan = 2015;
if (isset($_GET['angkatan'])) {
	$angkatan = $_GET['angkatan'];
}

?>

<!DOCTYPE html>
<html>
<head>

	<title>Rapot himpunan</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="http://archaea.sith.itb.ac.id/wp-content/themes/zerif-lite/custom/assets/style.css" >

</head>
<body>

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
					<a href="http://archaea.sith.itb.ac.id/rapot-himpunan?angkatan=2015">2015</a>
					<a href="http://archaea.sith.itb.ac.id/rapot-himpunan?angkatan=2016">2016</a>
					<a href="http://archaea.sith.itb.ac.id/rapot-himpunan?angkatan=2017">2017</a>
				</div>
			</td>
			<td><a href="https://archaea.sith.itb.ac.id/kontak/">Kontak</a></td>
			<td><a href="http://archaea.sith.itb.ac.id/login-rapot/">Masuk</a></td>
	    </tr>

	</table>


	<div class="content">
		
		<div class="leader">
			
			<div><a href="http://archaea.sith.itb.ac.id/profile/"><i class="fas fa-user"></i></a>
			</div>

			<div>

				<span style="font-size: 2em; font-weight: bold">Ketua angkatan</span><br><br>
				<table>
					<tr>
						<td>Nama:</td>
						<td style="padding-left: 2em">-----------</td>
					</tr>
					<tr>
						<td>NIM:</td>
						<td style="padding-left: 2em">-----------</td>
					</tr>
				</table>

			</div>

		</div>

		<br><br><br><br><br>

		<?php 

		// QUERY
		global $wpdb;
		$results = $wpdb->get_results( "SELECT nim, nama, angkatan, foto FROM mahasiswa WHERE angkatan=$angkatan" );

		?>

		<table class="member" style="width: 100%">
			
		<?php 
		$i = 0;
		foreach ($results as $print) {

			if ($i==0) {
				++$i;
		?>
			<tr>

				<td style="width: 20%">
					<div>
						<a href="http://archaea.sith.itb.ac.id/profile/?nim=<?php echo $print->nim; ?>">
						<?php 
						if ($print->foto != "NO") {
							echo '<img class="details-image" src="http://archaea.sith.itb.ac.id/wp-content/uploads/photo-profile/'.$print->angkatan.'/'.$print->nim.'.'.$print->foto.'" alt="'.$print->nim.'">';
						} else {
							echo '<i class="fas fa-user-circle"></i>';
						}
						?>
						</a>
					</div>
					<br>
					<div><?php echo $print->nim."<br>".$print->nama; ?></div>
				</td>
			<?php
			} elseif ($i==4) {
				$i=0;
			?>
				<td style="width: 20%">
					<div>
						<a href="http://archaea.sith.itb.ac.id/profile/?nim=<?php echo $print->nim; ?>">
						<?php 
						if ($print->foto != "NO") {
							echo '<img class="details-image" src="http://archaea.sith.itb.ac.id/wp-content/uploads/photo-profile/'.$print->angkatan.'/'.$print->nim.'.'.$print->foto.'" alt="'.$print->nim.'">';
						} else {
							echo '<i class="fas fa-user-circle"></i>';
						}
						?>
						</a>
					</div>
					<br>
					<div><?php echo $print->nim."<br>".$print->nama; ?></div>
				</td>
			</tr>
			<?php
			} else {
				++$i;
			?>
				<td style="width: 20%">
					<div>
						<a href="http://archaea.sith.itb.ac.id/profile/?nim=<?php echo $print->nim; ?>">
						<?php 
						if ($print->foto != "NO") {
							echo '<img class="details-image" src="http://archaea.sith.itb.ac.id/wp-content/uploads/photo-profile/'.$print->angkatan.'/'.$print->nim.'.'.$print->foto.'" alt="'.$print->nim.'">';
						} else {
							echo '<i class="fas fa-user-circle"></i>';
						}
						?>
						</a>
					</div>
					<br>
					<div><?php echo $print->nim."<br>".$print->nama; ?></div>
				</td>
		<?php
			}
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