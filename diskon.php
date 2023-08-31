<div class="grid">
<div class="dh12">
<p align="center"><b><u><big>DISKON</big></u></b></p>
<?php
include "koneksi.php";
$sqld= mysql_query("select * from diskon");
while ($rd= mysql_fetch_array($sqld)){
$sqls = mysql_query("select * from jam where id_jam='$rd[id_jam]'");
$rs = mysql_fetch_array($sqls);

 echo "
 <a href='?p=jam&ids=$rs[id_jam]'>
 <div class='dh3' align='center'>";
 echo "<div id='prd'>";
  echo "<fieldset>";
  echo "<h3>$rs[nama_jam]</h3></br>";
  echo "<img src='image/$rs[gambar]' width='100px' height='100px'></br>";
  echo "<strike>$rd[harga_asli]</strike></br>
  $rd[harga_diskon]";
  echo "<form method='post'>
  <input type='submit' name='$rs[id_jam]' value='Tambah Keranjang'>
  </form>";
  if ($_POST["$rs[id_jam]"]){
  echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=keranjangadd&id_jam=$rs[id_jam]'>";
  }
  echo "</fieldset>";
  echo "</div>";
   echo "</div></a>";

?>

<?php
}
?>
</div>
</div>