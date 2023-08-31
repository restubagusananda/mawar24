<?php
include "koneksi.php";
$sqls = mysql_query("select * from jam where id_jam='$_GET[ids]'");
$rs = mysql_fetch_array($sqls);
if($rs[status]=="diskon"){
$sqld = mysql_query("select * from diskon where id_jam='$_GET[ids]'");
$rd = mysql_fetch_array($sqld);
$tulisharga="<strike>harga : Rp.$rd[harga_asli]</strike></br>
harga : Rp.$rd[harga_diskon]";
}else{
$tulisharga="harga : $rs[harga_jam]";
}

?>
<p align="center" style="background-color:	#00FFFF; margin-left:300px; margin-right:300px; padding-bottom:10px;"><b><big><u><?php echo "$rs[nama_jam]";?></u></big></b></p>
<div class="grid">
<div class="dh12">
<div class="dh6"style="background-color:#00FF33; text-align:center; box-shadow:0 0 2px #000000; padding-top:10px; padding-bottom:10px;">
<p ><?php echo "<img src='image/$rs[gambar]' width='400px'>";?> </p>
</div>
<div class="dh6" style="background-color:#00FF33; text-align:center; box-shadow:0 0 2px #000000; padding-top:10px; padding-bottom:10px;">
<p>Nama : <?php echo "$rs[nama_jam]";?></p>
<p>Stok : <?php echo "$rs[stok]";?></p>
<p>  <?php echo "$tulisharga";?></p>
<p>Detail : <?php echo "$rs[deskripsi]";?></p>


</div>
</div>
</div>
