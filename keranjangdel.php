<?php 
  include "koneksi.php";
  $sqlk = mysql_query("delete from keranjang where id_jam='$_GET[id_jam]'"); 
  if($sqlk){ 
  	echo "Data Berhasil Dihapus";
  }else{
  	echo "Gagal Menghapus Data";
  }
  echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=keranjang'>"; 
?>
