<?php
if(!empty($_SESSION["usermbr"]) and !empty($_SESSION["passmbr"])){
  include "koneksi.php";
  $sqlm = mysql_query("select * from member where username='$_SESSION[usermbr]'");
  $rm = mysql_fetch_array($sqlm);
  echo "<div class='dh11' style='float:left;margin-top:35px;margin-left:40px; color:#ffe9e9'>WELCOME :  <b style='color:#ffe9e9'>$rm[nama_lengkap]</b></div>";
  echo "<a href='?p=logout'><img src='image/logoutt.png'/></a>";
}else{
  echo "<a href='?p=register'><img src='image/reg.png'/></a> 	-	 ";
  echo "<a href='?p=login'><img src='image/lo.png'/></a>";
}
?>