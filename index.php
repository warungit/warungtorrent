<!DOCTYPE HTML>
<html lang='en'>
<head>
<title>
	WarungTorrent - Pecinta Torrent Indonesia
</title>
	<?php include('cdn/core/core.php');diamond();?>
</head>
		
<body class='black'>
<header>
	<?php menu(); ?>
</header>

<div class='container'>
<div class='row'>
	<?php pengumuman(); ?>
</div>
	
<div class='row'>
	<?php film(); ?>
	<?php musik(); ?>
	<?php buku(); ?>
	<?php permainan(); ?>
	<?php aplikasi(); ?>
</div>
           
</div>  
<footer class='page-footer green'>
	<?php footer(); ?>
</footer>	

<?php modal(); ?>

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