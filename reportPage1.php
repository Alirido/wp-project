<?php /* Template Name: reportPage1 */ 

require_once($_SERVER['DOCUMENT_ROOT'] . $folder . '/wp-config.php');
require_once($_SERVER['DOCUMENT_ROOT'] .  $folder . '/wp-load.php');

$angkatan = 2015;
if (isset($_GET['angkatan'])) {
	$angkatan = $_GET['angkatan'];
}

global $wpdb;
?>

<!DOCTYPE html>
<html>
<head>

	<title>Rapot himpunan</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://archaea.sith.itb.ac.id/wp-content/themes/zerif-lite/custom/assets/style.css" >

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


	<div class="content">
		
		<div class="leader">
			
			<div>
				<?php
				// QUERY FOR SELECT THE LEADER OF ARCHAEA GENERATION
				$row = array(); 
				if ($angkatan == 2015) {
					$row = $wpdb->get_row( "SELECT nim, nama, foto FROM mahasiswa WHERE nim=10415011" );
				} elseif ($angkatan == 2016) {
					$row = $wpdb->get_row( "SELECT nim, nama, foto FROM mahasiswa WHERE nim=10416001" );
				} elseif ($angkatan == 2017) {
					$row = $wpdb->get_row( "SELECT nim, nama, foto FROM mahasiswa WHERE nim=10417033" );
				}
				?>
				<a href="https://archaea.sith.itb.ac.id/profile/?nim=<?php echo $row->nim; ?>">
					<?php 
						if ($row->foto != "NO") {
							echo '<img class="details-image" src="https://archaea.sith.itb.ac.id/wp-content/uploads/photo-profile/'.$angkatan.'/'.$row->nim.'.'.$row->foto.'" alt="'.$row->nim.'">';
						} else {
							echo '<i class="fas fa-user-circle"></i>';
						}
					?></a>
			</div>

			<div>

				<span style="font-size: 2em; font-weight: bold">Ketua angkatan</span><br><br>
				<table>
					<tr>
						<td>Nama:</td>
						<td style="padding-left: 2em"><?php echo $row->nama; ?></td>
					</tr>
					<tr>
						<td>NIM:</td>
						<td style="padding-left: 2em"><?php echo $row->nim; ?></td>
					</tr>
				</table>

			</div>

		</div>

		<br><br><br><br><br>

		<?php 

		// QUERY
		$results = $wpdb->get_results( "SELECT nim, nama, foto FROM mahasiswa WHERE angkatan=$angkatan" );

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
						<a href="https://archaea.sith.itb.ac.id/profile/?nim=<?php echo $print->nim; ?>">
						<?php 
						if ($print->foto != "NO") {
							echo '<img class="details-image" src="https://archaea.sith.itb.ac.id/wp-content/uploads/photo-profile/'.$angkatan.'/'.$print->nim.'.'.$print->foto.'" alt="'.$print->nim.'">';
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
						<a href="https://archaea.sith.itb.ac.id/profile/?nim=<?php echo $print->nim; ?>">
						<?php 
						if ($print->foto != "NO") {
							echo '<img class="details-image" src="https://archaea.sith.itb.ac.id/wp-content/uploads/photo-profile/'.$angkatan.'/'.$print->nim.'.'.$print->foto.'" alt="'.$print->nim.'">';
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
						<a href="https://archaea.sith.itb.ac.id/profile/?nim=<?php echo $print->nim; ?>">
						<?php 
						if ($print->foto != "NO") {
							echo '<img class="details-image" src="https://archaea.sith.itb.ac.id/wp-content/uploads/photo-profile/'.$angkatan.'/'.$print->nim.'.'.$print->foto.'" alt="'.$print->nim.'">';
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