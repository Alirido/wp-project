<?php /* Template Name: AMERTA home */ 

?>

<!DOCTYPE html>
<html>
<head>

	<title>AMERTA</title>
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
	            
	            <!-- Archaea the second logo -->
	            <!-- <td><img class="details-image" src="https://archaea.sith.itb.ac.id/wp-content/uploads/2018/04/archaeamantap.png" draggable="false" alt="archaea_mantap" width="144" height="144"></td> -->
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


	<div class="content">
		
		<div class="amerta-home">
			<h1>SELAMAT DATANG!</h1>

			<p>AMERTA (amer.ta /amêrta/) menurut KBBI merupakan suatu adjektiva klasik yang berarti tidak dapat mati, abadi (tidak terlupakan).</p>

			<p>Sebagaimana namanya, platform ini bertujuan untuk mengabadikan rekam jejak dan segala pengembangan diri seluruh massa di Archaea.</p>

			<p>Diharapkan, platform ini nantinya menjadi pencerah bahwa apa yang massa lakukan di himpunan benar-benar berdampak bagi pengembangan diri masing-masing, sehingga memotivasi lagi untuk terus memiliki semangat mencapai pengembangan diri yang menyeluruh.</p>

			<p>Selamat berkembang!</p>

			<div>
				<h3>> Fitur dan Cara Penggunaan</h3>
				<ul>
					<li>Klik tab 'Angkatan' kemudian klik angkatan kalian masing-masing</li>
					<li>Lalu klik foto kalian untuk melihat rekam jejak presensi kalian</li>
					<li>(fitur lainnya sedang dalam pengembangan!)</li>
				</ul>
			</div>

			<br>

			<p>n.b. silahkan hubungi divisi Manajemen Pengembangan Anggota bila anda membutuhkan penjelasan tambahan, menemukan ketidaksesuaian data atau bug, atau bahkan ingin memberikan saran pengembangan platform.</p>

		</div>

	</div> <!-- End of div.content -->

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