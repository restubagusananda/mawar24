<?php
include "koneksi.php";
$sqlp = mysql_query("select * from pemesanan where kdpesanan='$_GET[kdp]'");
while($rp = mysql_fetch_array($sqlp)){
$total = $total+$rp[harga2];
}

?>
<div class="dh12" style="background-color:#00ff00; box-shadow:0 0 2px #000000; min-height:300px; text-align:center; padding-bottom:10px;">
<p><b><u><big>Bukti Pembayaran</big></u></b></p>
<p> Silahkan Transfer Ke Rekening Di Bawah </p>
<p> <input type="text" name="norek" value="151901003979501" disabled style="width:200px; text-align:center; font-family:'Cowboy Junk DEMO';"></p>
<p> Sejumlah : Rp.<?php echo "$total";?></p>
<p> Silahkan Upload Bukti Transfer Anda</br>
<input type="file" name="bukti" style="width:200px; text-align:center"/></p>
<input type="submit" name="submit" value="UPLOAD" style="width:200px; text-align:center"/>
</div>
<?php
if($_POST["submit"]){
 $nmbukti = $_FILES["bukti"]["name"];
  $lokbukti = $_FILES["bukti"]["tmp_name"];
  if (!empty($lokbukti)){
  move_uploaded_file($lokbukti, "bukti/$nmbukti");
  $bukti = ",bukti='$nmbukti'";
  }else{
     $bukti = "";
  }
  $sqlp = mysql_query("update pemesanan set status='sedangdiperiksa' $bukti where kdpesanan='$_GET[kdp]'");
  if($sqlp){
  echo "transaksi sedang diproses";
  echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=pesan'>";
  }
}

?>