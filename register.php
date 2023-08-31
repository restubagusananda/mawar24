<div class="view">
<fieldset>
<form name="form1" method="post" action="" enctype="multipart/form-data">
  <h3>FORM REGISTRASI</h3>
  <p>Username
    <input name="username" type="text" id="username">
</p>
  <p>Password 
    <input name="password" type="text" id="password">
  </p>
  <p>Nama Lengkap
    <input name="nama_lengkap" type="text" id="nama_lengkap">
  </p>
  <p>Email
    <input name="email" type="text" id="email">
  </p>
  <p>Alamat
    <textarea name="alamat" id="alamat"></textarea>
  </p>
  <p>No. Handphone
    <input name="nohp" type="text" id="nohp">
  </p>
  <p>
    <input name="register" type="submit" id="register" value="Register sebagai Member">
  </p>
</form>

<?php
if($_POST["register"]){
  include "koneksi.php";
  $sqlm = mysql_query("insert into member (username, password, nama_lengkap, email, alamat, nohp, tgl_daftar) values ('$_POST[username]', '$_POST[password]', '$_POST[nama_lengkap]', '$_POST[email]','$_POST[alamat]', '$_POST[nohp]', NOW())");
  
  if($sqlm){
  	echo "Proses registrasi berhasil. Silahkan Login";
  }else{
  	echo "Proses registrasi gagal";
  }
  echo "<META HTTP-EQUIV='Refresh' Content='2; URL=?p=home'>";
}
?> 
</div>
</fieldset>