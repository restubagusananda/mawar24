<?php
if(!empty($_SESSION["usermbr"]) and !empty($_SESSION["passmbr"])){
  include "koneksi.php";
  $sqls= mysql_query("select * from jam where id_jam='$_GET[id_jam]'");
  $rs = mysql_fetch_array($sqls);
  
  if($rs[stok]=="habis"){
  echo "$rs[nama_jam] stok habis || sold out ";
  
  }
else if($rs[stok]=="masih"){
$sqlk =  mysql_query("select * from keranjang where id_jam='$_GET[id_jam]'");
  while($rk = mysql_fetch_array($sqlk)){
  if ($rk[id_jam]==$rs[id_jam]){
  $status=1;
  }
  else if ($rk[id_jam]!=$rs[id_jam]){
    $status=0;
  }
  }
  if($status==1){
  echo "jam sudah ada di keranjang";
  }
 else{
 $sqlk= mysql_query("insert into keranjang (id_member, id_jam) values ('$rm[id_member]','$rs[id_jam]')");
 if($sqlk){
 echo "barang telah di tambah";
 
 }else{
 echo "gagal ";
 }
 }
 echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=keranjang'>";
}

?>

<?php 
}
else{
echo "anda harus login/register";
 echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=login'>";
}
?>
