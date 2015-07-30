<!DOCTYPE HTML>
<head>
<title>Warung - Gue</title>
<?php include('cdn/core/core.php');
database();
diamond();
?>
</head>
<body class='black'>
<?php menu();pengumuman();modal(); ?>
<div class='container'>
<div class="row">
        <div class="col s12 m12">
          <div class="card green">
            <div class="card-image black">
              <img src="cdn/img/anon.jpg">
              <span class="card-title green-text light black">Warung Anonymous</span>
            </div>
            <div class="card-content">
              <p>I'm Tukang Warung here. If you lazy to register in this site, you can upload your torrent by my Account.
			  But, you will be unpopular warungers here. Because, I will be the best warungers :)) Contact me at : <code class='black green-text'>https://github.com/warungit/</code> 
			  </p>
            </div>
            <div class="card-action">
              <a href='cari.php?q=anonymous' class='green-text black btn'>My Torrent</a>
            </div>
          </div>
        </div>
      </div>
	  </div>
</body>
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