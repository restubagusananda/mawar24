<p align="center"><big><b><u>PESANAN</u></b></big></p>
<div class="grid">
<div class="dh12">
<div class="dh6">
<p align="center"><big><b><u>Produk</u></b></big></p>
<form name="form1" method="post" action="" enctype="multipart/form-data">
<table border="1" width="100%" cellpadding="10" align="center" style="text-align:center">
<tr>
<th>No</th>
<th>Gambar</th>
<th>Kategori</th>
<th>Jam</th>
<th>Harga</th>
</tr>
<?php
include "koneksi.php";
$sqlk = mysql_query("select * from keranjang where id_member='$rm[id_member]'");
while ($rk = mysql_fetch_array($sqlk)){
$sqls = mysql_query("select * from jam where id_jam='$rk[id_jam]'");
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
</div>
<div class="dh6" align="center">
<p align="center"><big><b><u>Pemesan</u></b></big></p>
<p>Nama Pemesan : <b><?php echo "$rm[nama_lengkap]"?></b></p>
<p>Nohp : <b><?php echo "$rm[nohp]"?></b></p>
<p>Email : <b><?php echo "$rm[email]"?></b></p>
<p>Total Harga : <b><?php echo "Rp.$total"?></b></p>


<input name="btn0" id="btn0" type="submit" value="Masukan Data Saya" style="width:250px">
<?php
 $nama2="";
 $nohp2="";
 $alamat2="";
 $kdpos2="";
 $kcmt2="";
 $kota2="";
 $prov2="";
 
if ($_POST["btn0"]){
 $nama2="$rm[nama_lengkap]";
 $nohp2="$rm[nohp]";
 $alamat2="$rm[alamat]";
 $kdpos2="$rm[kodepos]";
 $kcmt2="$rm[kecamatan]";
 $kota2="$rm[kota]";
 $prov2="$rm[provinsi]";
 
}

$kd = "pesan";
$d= date ("d");
$m= date ("m");
$y= date ("Y");
$j= date ("h");
$mi= date ("i");
$s= date ("s");


?>
<input name="id_member" type="hidden" value="<?php echo "$rm[id_member]";?>">
<input name="kd_pesan" type="hidden" value="<?php echo "$kd-$y$m$d$j$mi$s";?>">

</div>
</div>
<div class="dh12">
<div class="isipesan" align="center">
<p> 
<div class="dh4">

Nama Penerima :</br>
<input name="nama2" type="input" value="<?php echo "$nama2"; ?>">
</div>
<div class="dh4">
Nohp Penerima :</br>
<input name="nohp2" type="input" value="<?php echo "$nohp2";?>">
</div>
<div class="dh4">
Kode Pos Penerima :</br>
<input name="kdpos2" type="input" value="<?php echo "$kdpos2";?>">
</div>
</p>
<p style="padding-top:30px"></p>
<p> 
<div class="dh4">
Kecamatan Penerima :</br>
<input name="kcmt2" type="input" value="<?php echo "$kcmt2";?>">
</div>
<div class="dh4">
Kota Penerima :</br>
<input name="kota2" type="input" value="<?php echo "$kota2";?>">
</div>
<div class="dh4">
Provinsi Penerima :</br>
<input name="prov2" type="input" value="<?php echo "$prov2";?>">
</div>
</p>
<p style="padding-top:30px"></p>
<div class="dh12">
<p> Alamat Penerima
<textarea name="alamat2" ><?php echo "$alamat2";?></textarea>
</p>
</div>
<p style="padding-top:30px"></p>
<div class="dh12">
<p>

<input name="submit"  type="submit" value="SUBMIT">
</form>
<?php
if ($_POST["submit"]){
 if($_POST["nama2"]!=null&&$_POST["nohp2"]!=null&&$_POST["kdpos2"]!=null&&$_POST["kcmt2"]!=null&&$_POST["kota2"]!=null&&$_POST["prov2"]!=null&&$_POST["alamat2"]!=null){

  $sqlk2 = mysql_query("select * from keranjang where id_member='$rm[id_member]'");
  while($rk2 = mysql_fetch_array($sqlk2)){
  $sqls0 = mysql_query("select * from jam where id_jam='$rk2[id_jam]'");
  $rs0 = mysql_fetch_array($sqls0);
  $sqlp= mysql_query("insert into pemesanan (id_member, id_jam, kdpesanan, nama2, nohp2, kdpos2, prov2, kota2, kcmt2, alamat2, harga2, tgl_pemesanan) values ('$_POST[id_member]','$rk2[id_jam]','$_POST[kd_pesan]','$_POST[nama2]','$_POST[nohp2]','$_POST[kdpos2]','$_POST[prov2]','$_POST[kota2]','$_POST[kcmt2]','$_POST[alamat2]','$rs0[harga_jam]', NOW())");
   if($sqlp){
    $sqlk3 = mysql_query("delete from keranjang where id_keranjang='$rk2[id_keranjang]'");
    echo "pesanan berhasil ditambah";
   }else{
   echo "gagal";
   }
  }
 }else{
  echo "Data tidak lengkap";
 }
 echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=pesan'>";
}
?>
</p>

</div>

</div> 
</div>
</div>