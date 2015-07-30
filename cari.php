<!DOCTYPE HTML>
<?php error_reporting(0); ?>
<head>
<title>Cari Torrent: <?php echo $_GET['q']; ?></title>
<?php	
	include('cdn/core/core.php');
	database();
	diamond();
?>

</head>
<body class='black'>
<?php
	menu();
	modal();
	echo "<div class='container'>
<div class='row'>
";
	pengumuman();
	$carii=$_GET['q'];
	$cari=str_replace('+',' ',$carii);
	$q=mysql_query("SELECT * FROM `torrent` WHERE `judul` LIKE '%$cari%' OR `warung` LIKE '%$cari%' OR `kategori` LIKE '%$cari%'");
			$itung=mysql_num_rows($q);
	echo "<code class='green'>Ada : ".$itung." hasil di database kami</code>";
	if($itung == '0'){
		echo "<meta http-equiv='refresh' content=1;URL='./index.php'>";
	}
		while($x=mysql_fetch_object($q)){
			$z=str_replace(' ','-',$x->judul);
			echo "<div class='s12 m4 l4 heker'>";
			echo "<a href='detail/$z' class='green-text'>> $x->judul</a> <span class='green'> Diunggah oleh: <a href='warung/$x->warung' class='black-text'>$x->warung</a></span>
			</div>";
		}
?>
</div>
</div>
<footer class='page-footer green'>
<?php footer(); ?>
</footer>
<script src='cdn/js/jquery.js'></script>
<script src='cdn/js/materialize.min.js'></script>
<script>$(document).ready(function(){$('.dropdown-button').dropdown();$('.button-collapse').sideNav();$('.modal-trigger').leanModal({dismissible:false,opacity:.8});$('#close').closeModal();}); $('.uploadrop').dropdown({
      inDuration: 300,
      outDuration: 225,
      constrain_width: false, // Does not change width of dropdown to that of the activator
      hover: true, // Activate on hover
      gutter: 1, // Spacing from edge
      belowOrigin: true // Displays dropdown below the button
    }
  );</script>

</body>
</html>