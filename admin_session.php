<?php 
session_start();
$_SESSION['admin']='admin';
$_SESSION['karyawan']='karyawan';
$_SESSION['atasan']='atasan';

?>
<center><a href="karyawan.php">Menu Cuti</a></center>
<center><a href="admin.php">Menu admin</a></center>
<center><a href="atasan.php">Menu atasan</a></center>