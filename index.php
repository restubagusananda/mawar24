<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="style.css" />
<title>Mawar Arloji</title>
</head>

<body>

<div class="container2">
  <div class="dh12" align="right"><?php include "menumember.php"; ?></div>
</div>

<div class="container3">
<div class="grid">
<div class="dh3">
<div class="menu-wrap">
<ul>
    <li><a href="<?php echo "?p=home";?>">BERANDA</a></li>
    <li><a href="#">KATEGORI &raquo;</a>
   <ul style='margin-left:125px; position:absolute;'>
   <?php 
   include "koneksi.php";
   $sqlj= mysql_query("select * from kategori");
    echo "<li ><a href='?p=kategori&idj=all'>ALL</a></li>";
   while ($rj= mysql_fetch_array($sqlj)){
    echo "<li><a href='?p=kategori&idj=$rj[id_kategori]'>$rj[nama_kategori]</a></li>";
   }
   ?>
 
   </ul>
   </li>
    <li><a href="<?php echo "?p=diskon";?>">DISKON</a></li>
    <li><a href="<?php echo "?p=keranjang";?>">KERANJANG</a></li>
      <li><a href="<?php echo "?p=pesan";?>">PESANAN</a></li>
        <li><a href="<?php echo "?p=transaksi";?>">TRANSAKSI</a></li>
    <li><a href="<?php echo "?p=about";?>">ABOUT</a></li>
  </ul>
  </div>
</div>

<div class="dh9">
      <div class="grid" style="background-color:#FFFFFF;min-height:700px;margin-top:20px; opacity:0.8;border-top-left-radius:5px; border-top-right-radius:5px;
	border-bottom-left-radius:5px; border-bottom-right-radius:5px; position: relative;">
    <form name="form100" method="post" action="" enctype="multipart/form-data">

    <?php
	
if($_GET["p"] == "register"){
	  include "register.php";
	}else if($_GET["p"] == "login"){
	  include "login.php";
	}else if($_GET["p"] == "logout"){
	  include "logout.php";
	}else if($_GET["p"] == "kategori"){
	  include "kategori.php";
	}else if($_GET["p"] == "keranjang"){
	  include "keranjang.php";
	}else if($_GET["p"] == "keranjangadd"){
	  include "keranjangadd.php";
	}else if($_GET["p"] == "keranjangdel"){
	  include "keranjangdel.php";
	  }else if($_GET["p"] == "pesan"){
	  include "pesan.php";
	  }else if($_GET["p"] == "pesanadd"){
	  include "pesanadd.php";
	  }else if($_GET["p"] == "transaksi"){
	  include "transaksi.php";
	  }else if($_GET["p"] == "transaksiadd"){
	  include "transaksiadd.php";
	  }else if($_GET["p"] == "diskon"){
	  include "diskon.php";
	   }else if($_GET["p"] == "jam"){
	  include "jam.php";
	}else if($_GET["p"] == "home"){
	  include "home.php";
	  }else if($_GET["p"] == "about"){
	  include "about.php";
	}else{
	  include "home.php";
	}
	?>
    </form>
  </div>
</div>
</div> 
</div>

<div class="container5">
  <div class="grid">
  
    <?php include "footer.php"; ?>
  </div>
</div>
</body>
</html>
