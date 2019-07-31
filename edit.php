<?php
include 'database.php';
$db=new database();
?>
<form action="proses.php?aksi=update" method="post">
  <?php
      foreach ($db->edit($_GET['id']) as $z){
   ?>
  id<input type="text" value="<?php echo $z['id'] ?>" name="id" readonly><br>
  nama<input type="text" value="<?php echo $z['nama'] ?>" name="nama"><br>
  kota<input type="text" value="<?php echo $z['kota'] ?>" name="kota"><br>
  <input type="submit" value="Edit">
<?php } ?>
</form>
