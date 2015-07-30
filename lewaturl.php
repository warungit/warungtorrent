<?php
include('cdn/core/core.php');
database();
$url=$_POST['url'];
$judul=$_POST['judul'];
$deskripsi=$_POST['deskripsi'];
$kategori=$_POST['kategori'];
$label=$_POST['label'];
$tanggal=date('Y-m-d');
$warung='anonymous';
$z=str_replace('./enter','<br />',$deskripsi);
$xd= $url."<br />".$z;
if(isset($url)){
$q=mysql_query("INSERT INTO `torrent` (`id`,`judul`,`link`,`deskripsi`,`label`,`kategori`,`waktu`,`warung`) VALUES (NULL,'$judul','$url','$deskripsi','$label','$kategori','$tanggal','$warung')");
if($q){
	echo "<script>alert('Torrent kamu berhasil diunggah! Mengalihkan...');</script>";
	echo "<meta http-equiv='refresh' content=1;URL='./index'>";
}
}
?>
fuck you!