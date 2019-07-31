<?php
include 'database.php';
$db=new database();

$aksi=$_GET['aksi'];
if($aksi=="tambah"){
  $db->tambah($_POST['nama'],$_POST['kota']);
  header('location:view.php');
}
elseif($aksi=='update'){
  $db->update($_POST['id'],$_POST['nama'],$_POST['kota']);
  header('location:view.php');
}
elseif($aksi=="hapus"){
  $db->hapus($_GET['id']);
  header('location:view.php');
}
elseif($_GET['cari']){
  $db->cari($_GET['cari']);
  header('location:view.php');
}
?>
