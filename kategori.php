<?php
echo "<h3>KATEGORI</h3>";
include "koneksi.php";
if($_GET[idj]=="all"){
$sqls = mysql_query("select * from jam");
while($rs = mysql_fetch_array($sqls)){
  echo "
   <a href='?p=jam&ids=$rs[id_jam]'>
  <div class='dh3' align='center'>";
  echo "<div id='prd' style='min-height:340px'>";
  echo "<fieldset>";
  echo "<p style='height:40px'><big>$rs[nama_jam]</big></p>";
  echo "<p style='height:150px'><img src='image/$rs[gambar]' width='100px' height='100px'></br>$rs[harga_jam]</p>";
  echo "<form method='post'>
  <input type='submit' name='$rs[id_jam]' value='Tambah Keranjang'>
  </form>";
  if ($_POST["$rs[id_jam]"]){
  echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=keranjangadd&id_jam=$rs[id_jam]'>";
  }
  echo "</fieldset>";
  echo "</div>";
  echo "</div></a>";
}
}else{

$sqlj = mysql_query("select * from kategori where id_kategori='$_GET[idj]'");
$rj = mysql_fetch_array($sqlj);
$sqls = mysql_query("select * from jam where nama_kategori='$rj[nama_kategori]'");

while($rs = mysql_fetch_array($sqls)){
  echo "
   <a href='?p=jam&ids=$rs[id_jam]'>
  <div class='dh3' align='center'>";
  echo "<div id='prd' style='min-height:340px'>";
  echo "<fieldset>";
  echo "<p style='height:40px'><big>$rs[nama_jam]</big></p>";
  echo "<p style='height:150px'><img src='image/$rs[gambar]' width='100px' height='100px'></br>$rs[harga_jam]</p>";
  echo "<form method='post'>
  <input type='submit' name='$rs[id_jam]' value='Tambah Keranjang'>
  </form>";
  if ($_POST["$rs[id_jam]"]){
  echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=keranjangadd&id_jam=$rs[id_jam]'>";
  }
  echo "</fieldset>";
  echo "</div>";
  echo "</div></a>";
}

}
?>