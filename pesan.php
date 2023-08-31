<?php
if(!empty($_SESSION["usermbr"]) and !empty($_SESSION["passmbr"])){
  
  


?>

<?php
echo "<h3>PESANAN</h3>";
include "koneksi.php";
$sqlp = mysql_query("select * from pemesanan where id_member=$rm[id_member] order by kdpesanan asc");
while($rp = mysql_fetch_array($sqlp)){
if($kd==$rp[kdpesanan]){
continue;

}
$kd=$rp[kdpesanan];
if($rp[status]=="sudah"||$rp[status]=="sedangdiperiksa"){
$btnt="<p style='background-color:#0000ff; text-align:center; color:#ffffff;'><b>Sedang Di Proses</b></p>";
}else{
$btnt="<input name='$kd' type='submit' value='mulai pembayaran'>";
}
echo "<div class='dh6' style='background-color:#00ff00; box-shadow:0 0 2px #000000; min-height:300px'>

<p align='center'> kode pemesanan : $rp[kdpesanan] </p>
<div class='dh12'>
</div>


";



?>
<table border="1" width="100%" cellpadding="10" align="center" style="text-align:center">
<tr>
<th>No</th>
<th>Gambar</th>
<th>Kategori</th>
<th>Jam</th>
<th>Harga</th>
</tr>
<?php

$sqlp2 = mysql_query("select * from pemesanan where kdpesanan='$kd'");
while ($rp2 = mysql_fetch_array($sqlp2)){
$sqls = mysql_query("select * from jam where id_jam='$rp2[id_jam]'");
$rs = mysql_fetch_array($sqls);
$sqlj = mysql_query("select * from kategori where nama_kategori='$rs[nama_kategori]'");
$rj = mysql_fetch_array($sqlj);
$no++;
echo "<tr>
<td>$no</td>
<td><img src='image/$rs[gambar]' width='100px'</td>
	  <td>$rj[nama_kategori]</td>
	  	  <td>$rs[nama_jam]</td>
		  	  <td>$rs[harga_jam]</td>
</tr>";
$total =$total+$rs[harga_jam];


}
?>

</table>
<p align="center"> Total yang harus dibayar : <?php echo "$total";?></p>
<div class="dh6">
<p align="center"> <b><u>Data Penerima </u></b></p>
<p align="center"> Nama  :<?php echo "$rp[nama2]";?></p>
<p align="center"> Nohp  :<?php echo "$rp[nohp2]";?></p>
<p align="center"> Alamat  :<?php echo "$rp[alamat2]";?></p>
<p align="center"> Kecamatan  :<?php echo "$rp[kcmt2]";?></p>
<p align="center"> Kota  :<?php echo "$rp[kota2]";?></p>
<p align="center"> Provinsi  :<?php echo "$rp[prov2]";?></p>


</div>
<div class="dh6">
<p align="center"> <b><u>Data Pemesan </u></b></p>
<p align="center"> Nama  :<?php echo "$rm[nama_lengkap]";?></p>
<p align="center"> Nohp  :<?php echo "$rm[nohp]";?></p>
<p align="center"> Email  :<?php echo "$rm[email]";?></p>
<p align="center"> <?php echo "$btnt";?></p>


</div>
</div>
<?php 
if ($_POST["$kd"]){
echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=transaksiadd&kdp=$rp[kdpesanan]'>";
}
}
?>
<?php 
}
else{
echo "anda harus login/register";
 echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=login'>";
}
?>