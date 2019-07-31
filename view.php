
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      include 'database.php';
      $db=new database();
      error_reporting(0);
    ?>
    <a href="input.php">Input data</a>
    <form action="view.php" method="get">
      <input type="text" name="cari"><input type="submit" value="Cari">
    </form>
    <?php

     ?>
    <table border="1">
      <tr>
        <th>no</th>
        <th>nama
          <a href="view.php?orderby=nama&sorting=asc">&uarr;</a>
          <a href="view.php?orderby=nama&sorting=desc">&darr;</a>
        </th>
        <th>kota</th>
        <th>aksi</th>
      </tr>
      <?php
      $no=1;
      foreach($db->tampil($_GET['cari'],$_GET['orderby'],$_GET['sorting']) as $y){
      ?>
      <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $y['nama'] ?></td>
        <td><?php echo $y['kota'] ?></td>
        <td>
          <a href="edit.php?id=<?php echo $y['id']?>&aksi=edit">Edit</a>
          <a href="proses.php?id=<?php echo $y['id']?>&aksi=hapus">Hapus</a>
        </td>
      </tr>
    <?php } ?>
    </table>
  </body>
</html>
