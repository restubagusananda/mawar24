<?php
if(!empty($_SESSION["usermbr"]) and !empty($_SESSION["passmbr"])){
  
  


?>
<table border="1" width="90%" cellpadding="10">
<tr>
  <th>No.</th>
  <th>GAMBAR</th>
  <th>NAMA JAM</th>
  <th>HARGA</th>
  <th>AKSI</th>
</tr>
<?php 
include "koneksi.php";
$sqlk=mysql_query("select * from keranjang where id_member='$rm[id_member]'");
$total=0;
$no=0;
while($rk= mysql_fetch_array($sqlk)){
		$sqls = mysql_query("select * from jam where id_jam='$rk[id_jam]'");
		$rs=mysql_fetch_array($sqls);
		$no++;
		echo "<tr>";
		echo "<td>$no</td>";
		echo "<td><img src='image/$rs[gambar]' width='90px' height='80px'></td>";
		echo "<td>$rs[nama_jam]</td>";
		echo "<td>Rp. $rs[harga_jam]</td>";
		echo "<td><a href='?p=keranjangdel&id_jam=$rs[id_jam]'>Hapus</a> </td>";
echo "</tr>"; 
$total =$total+$rs[harga_jam];
}




?>
</table>
<?php
echo "</br>";
?>
<div class="grid">
<form name="form1" method="post" action="" enctype="multipart/form-data">
<?php
echo "<div class='dh12' align='center'>total harga = $total</div>";
echo "<div class='dh3'>&nbsp</div>";
echo "<div class='dh3'><input type='submit' name='tambah' value='Belanja Lagi'></div>";
echo "<div class='dh3'><input type='submit' name='pesan' value='Pesan Sekarang'></div>";
if($_POST["pesan"]){
echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=pesanadd'>";
}
if($_POST["tambah"]){
echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=kategori&idj=all'>";
}
?>
</form>
</div>





<?php 
}
else{
echo "anda harus login/register";
 echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=login'>";
}
?>
