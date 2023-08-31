<p align="center"> RIWAYAT TRANSAKSI</p>
<table>
<tr>
<th>no</th>
<th>nama </th>
<th>kode pemesanan</th>
<th>total bayar</th>
<th>tanggal transaksi</th>
</tr>
<?php
include "koneksi.php";
$sqlt= mysql_query("select * from transaksi where id_member='$rm[id_member]'");
while($rt= mysql_fetch_array($sqlt)){
$sqlm= mysql_query("select * from member where id_member='$rt[id_member]'");
$rm= mysql_fetch_array($sqlm);
$sqlp= mysql_query("select * from pemesanan where kdpesanan='$rt[kdpesanan]'");
$rp= mysql_fetch_array($sqlp);
$no++;
echo "
	<tr>
	<td>$no</td>
	<td>$rm[nama_lengkap]</td>
	<td>$rt[kdpesanan]</td>
	<td>$rt[total_bayar]</td>
	<td>$rt[tgl_transaksi]</td> 
	
	</tr>

";

}

?>


</table>