<?php
error_reporting(0);
function database(){
$mesin='localhost';
$pengguna='root';
$sandi='';
$database='torrent';

$connect=mysql_connect($mesin,$pengguna,$sandi);
$db=mysql_select_db($database);

if(!$connect){
	echo "Ada kesalahan bro ke Server MySQL :".mysql_error();
}

if(!$db){
	echo "Ada kesalahan bro di Database :".mysql_error();
}

}


if(!function_exists('diamond')){
	function diamond(){
		echo "<link href='cdn/css/materialize.min.css' rel='stylesheet' type='text/css'>";
		echo "<link href='cdn/css/diamond.css' rel='stylesheet' type='text/css'>
		<link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css' rel='stylesheet' type='text/css'>";
	}
}


if(!function_exists('menu')){
	function menu(){
		echo "<nav class='green light'>
    <div class='nav-wrapper'>
      <a href='./index' class='brand-logo black-text'><i class='fa fa-code fa-3'> WarungTorrent</i></a>
      <a href='#' data-activates='mobile-demo' class='button-collapse'><i class='black-text fa fa-th'>z</i></a>
      <ul class='right hide-on-med-and-down'>
        <li><a class='black-text fa fa-cloud-download fa-2x modal-trigger' href='#url'>a</a></li>
        <li><a href='#cari' class='black-text modal-trigger fa fa-search fa-2x'>b</a></li>
        <li><a href='gue' class='black-text fa fa-user fa-2x'>c</a></li>
        <li><a href='#tanya' class='black-text modal-trigger fa fa-question fa-2x'>d</a></li>
        <li><a href='keluar' class='black-text fa fa-sign-out fa-2x'>e</a></li>
      </ul>
      <ul class='side-nav' id='mobile-demo'>
		<li><a href='#url' class='black-text light modal-trigger fa fa-cloud-download fa-2x'>URL</a></li>
        <li><a href='#cari' class='black-text modal-trigger fa fa-search fa-2x'></a></li>
        <li><a href='gue' class='black-text fa fa-user fa-2x'></a></li>
        <li><a href='#tanya' class='black-text modal-trigger fa fa-question fa-2x'></a></li>
        <li><a href='keluar' class='black-text fa fa-sign-out fa-2x'></a></li>
      </ul>
    </div>
  </nav>
";
	}
}

if(!function_exists('footer')){
	function footer(){
		echo "<div class='container'>
            <div class='row'>
              <div class='col l6 s12'>
                <h5 class='black-text light'>WarungTorrent</h5>
                <p class='black-text-lighten-4'>Tempatnya para pecinta download via Torrent. Semua konten disini ditanggung jawabi penuh oleh Pengguna. Semua Lisensi seharusnya tercantum di file torrent. Kami tidak bertanggung jawab bila ada pemrotesan hak cipta.</p>
              </div>
              <div class='col l4 offset-l2 s12'>
                <h5 class='black-text light'>Connect</h5>
                <ul>
                  <li><a class='light black-text text-lighten-3' href='#!'>Twitter</a></li>
                  <li><a class='light black-text text-lighten-3' href='#!'>GIthub</a></li>
                  <li><a class='light black-text text-lighten-3' href='#!'>Bitcoin</a></li>
                  <li><a class='light black-text text-lighten-3' href='#!'>Litecoin</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class='footer-copyright green'>
            <div class='container'>
            <code class='black-text'>&copy; 2015 WarungTorrent - All Right Reserved - Builded by <a href='https://warungit.github.io/diamond' class='black-text underline'>diamond</a> and We Love Open Source :) - INDONESIA</code>
            </div>
          </div>";
	}
}

if(!function_exists('modal')){
	function modal(){
		echo "
	<div id='tanya' class='modal modal-fixed-footer'>
    <div class='modal-content'>
	<h4 class='right-align'><a href='#!' class='modal-action modal-close black-text'>X</a></h4>
     <h4>FAQ</h4>
	 <ol>
	 <li>Bagimana cara menggunakan website ini?</li>
	 <blockquote>Gampang! Kamu cukup unggah link torrent kamu, isi deskripsi, feel the awesome of share!</blockquote>
	 <li>Akun apa yang saya gunakan?</li>
	 <blockquote>Kalo kamu belum login, berarti kamu pakai akun anonymous. Apa kekurangan pake akun anonymous? <b>Para pengguna website ini tidak bisa mengetahui
	 siapakah orang yang berbaik hati membagikan link torrentnya!</b></blockquote>
	 <li>Bagaimana bila saya ingin berkontribusi untuk mengembangkan website ini?</li>
	 <blockquote>Gampang! WarungTorrent adalah proyek <b>Open Source!</b> Kami menaruh sumber kode di GitHub. Kamu cukup git clone, edit code. Dan, pull request!</blockquote>
	 <li>Ada pertanyaan lagi?</li>
	 <blockquote>Cukup email ke: <code>kamarmandi1337@gmail.com</code> pertanyaan kamu Insya Allah akan kami balas, lalu kami cantumkan di Kolom FAQ ini. Terima Kasih :)</blockquote>
	 </ol>
	 </div>
	 </div>
	
	<form name='cari' method='get' action='cari.php?q='>
	<div id='cari' class='modal'>
    <div class='modal-content'>
	<h4 class='right-align'><a href='#!' class='modal-action modal-close black-text'>X</a></h4>
	<h4>Cari</h4>
	<input type='text' name='q' placeholder=' Ketik yang kamu cari.. ' class='black green-text light' required />
	<input type='submit' value='Cari' class='btn green black-text'>
	</div>
	</div>
	</form>
	
	<div id='url' class='modal'>
    <div class='modal-content'>
	<h5 class='right-align'><a href='#!' class='modal-action modal-close black-text'>X</a></h5>
    <h4 class='left-align'>Unggah torrent kamu</h4>
	<form action='lewaturl.php' method='post'>
	<label for='url'>URL</label>
	<input type='url' name='url' value='http://' class='black green-text light' required />
	<label for='text'>Judul</label>
	<input type='text' name='judul' placeholder='Luwak Salto, Warung Gaul, etc..' required />
	<label for='select'>Kategori</label>
	<select name='kategori' class='browser-default'>
	<option value='Film'>Film</option>
	<option value='Musik'>Musik</option>
	<option value='Buku'>Buku</option>
	<option value='Aplikasi'>Aplikasi</option>
	<option value='Permainan'>Permainan</option>
	</select>
	<label for='tag'>Tag</label>
	<input type='text' name='label' placeholder='Rahasia, Recommended, bla..bla..bla' required /> 
	<label for='textarea'>Deskripsi</label>
	<textarea class='kolom' name='deskripsi' required>
	Judul :  ./enter
	Deskripsi : ./enter
	Genre : ./enter
	Link (IMDB/Developer Sites/iTunes/) : ./enter
	Ukuran : ./enter
	</textarea>
	<input type='submit' class='btn green black-text right-align' value='Unggah'>
	</form>	  
	</div>
	</div>
";
	}
}

if(!function_exists('pengumuman')){
	function pengumuman(){
		echo "<div class='s12 m12 l12'>
			<p class='green-text center-align light heker'>Selamat datang di WarungTorrent. Silahkan baca <a href='#tanya' class='black-text green underline modal-trigger'>FAQ</a> untuk mengetahui cara menggunakan Website ini</p>
		</div>";
	}
}

if(!function_exists('film')){
	function film(){
		database();
		echo "<p class='green-text'><a class='green black-text' href='cari.php?q=film'>./Film</a></p>
      <table class='green-text light responsive-table heker bordered'>
        <thead>
          <tr>
              <th data-field='id'>Judul Film</th>
              <th data-field='name'>Link Torrent</th>
			  <th data-field='Detail'>Detail</th>
          </tr>
        </thead>

 <tbody>";
 $q=mysql_query("SELECT * FROM `torrent` WHERE `kategori` = 'film'");
		while($x=mysql_fetch_object($q)){  $desc=str_replace(' ','_',$x->judul);
			echo "
          <tr>
            <td><i class='fa fa-video-camera'></i> $x->judul</td>
            <td><a href='$x->link' class='green-text garisbawah' title='$x->judul diunggah oleh: $x->warung'>$x->link</a></td>
            <td><a href='detail/$desc' class='btn green black-text'>Detail</a></td>
		  </tr>";
		}
          
        echo "</tbody>
      </table>";
}
}

if(!function_exists('musik')){
	function musik(){
		database();
		echo "<p class='green-text'><a class='green black-text' href='cari.php?q=musik'>./Musik</a></p>
      <table class='green-text light responsive-table heker bordered'>
        <thead>
          <tr>
              <th data-field='id'>Judul Lagu</th>
              <th data-field='name'>Link Torrent</th>
			  <th data-field='Detail'>Detail</th>
          </tr>
        </thead>

 <tbody>";
 $q=mysql_query("SELECT * FROM `torrent` WHERE `kategori` = 'musik'");
		while($x=mysql_fetch_object($q)){  $desc=str_replace(' ','_',$x->judul);
			echo "
          <tr>
            <td><i class='fa fa-music'></i> $x->judul</td>
            <td><a href='$x->link' class='green-text garisbawah' title='$x->judul diunggah oleh: $x->warung'>$x->link</a></td>
            <td><a href='detail/$desc' class='btn green black-text'>Detail</a></td>
		  </tr>";
		}
          
        echo "</tbody>
      </table>";
}
}

if(!function_exists('buku')){
	function buku(){
				database();
		echo "<p class='green-text'><a class='green black-text' href='cari.php?q=buku'>./Buku</a></p>
      <table class='green-text light responsive-table heker bordered'>
        <thead>
          <tr>
              <th data-field='id'>Judul Buku</th>
              <th data-field='name'>Link Torrent</th>
			  <th data-field='Detail'>Detail</th>
          </tr>
        </thead>

 <tbody>";
 $q=mysql_query("SELECT * FROM `torrent` WHERE `kategori` = 'buku'");
		while($x=mysql_fetch_object($q)){  $desc=str_replace(' ','_',$x->judul);
			echo "
          <tr>
            <td><i class='fa fa-book'></i> $x->judul</td>
            <td><a href='$x->link' class='green-text garisbawah' title='$x->judul diunggah oleh: $x->warung'>$x->link</a></td>
            <td><a href='detail/$desc' class='btn green black-text'>Detail</a></td>
</tr>";
		}
          
        echo "</tbody>
      </table>";
}
}


if(!function_exists('permainan')){
	function permainan(){
				database();
		echo "<p class='green-text'><a class='green black-text' href='cari.php?q=permainan'>./Permainan</a></p>
      <table class='green-text light responsive-table heker bordered'>
        <thead>
          <tr>
              <th data-field='id'>Judul Permainan</th>
              <th data-field='name'>Link Torrent</th>
			  <th data-field='Detail'>Detail</th>
          </tr>
        </thead>
 <tbody>";
 $q=mysql_query("SELECT * FROM `torrent` WHERE `kategori` = 'permainan'");
		while($x=mysql_fetch_object($q)){  $desc=str_replace(' ','_',$x->judul);
			echo "
          <tr>
            <td><i class='fa fa-gamepad'></i> $x->judul</td>
            <td><a href='$x->link' class='green-text garisbawah' title='$x->judul diunggah oleh: $x->warung'>$x->link</a></td>
            <td><a href='detail/$desc' class='btn green black-text'>Detail</a></td>
</tr>";
		}
          
        echo "</tbody>
      </table>";
}
}

if(!function_exists('aplikasi')){
	function aplikasi(){
				database();
		echo "<p class='green-text'><a class='green black-text' href='cari.php?q=aplikasi'>./Aplikasi</a></p>
      <table class='green-text light responsive-table heker bordered'>
        <thead>
          <tr>
              <th data-field='id'>Judul Aplikasi</th>
              <th data-field='name'>Link Torrent</th>
			  <th data-field='Detail'>Detail</th>
          </tr>
        </thead>
 <tbody>";
 $q=mysql_query("SELECT * FROM `torrent` WHERE `kategori` = 'aplikasi'");
		while($x=mysql_fetch_object($q)){  $desc=str_replace(' ','_',$x->judul);
			echo "
          <tr>
            <td><i class='fa fa-code-fork'></i> $x->judul</td>
            <td><a href='$x->link' class='green-text garisbawah' title='$x->judul diunggah oleh: $x->warung'>$x->link</a></td>
            <td><a href='detail/$desc' class='btn green black-text'>Detail</a></td>
</tr>";
		}
          
        echo "</tbody>
      </table>";
}
}


?>