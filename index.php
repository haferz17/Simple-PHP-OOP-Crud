<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>crudphp</title>
  </head>
  <body>
    <table border="1">
      <tr>
        <th>no</th>
        <th>id</th>
        <th>nama</th>
        <th>kota</th>
      </tr>
      <?php
        include 'koneksi.php';
        $no=1;
        $a=mysqli_query($host,'select * from siswa');
        while($b=mysqli_fetch_array($a)){
      ?>
      <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $b['id'] ?></td>
        <td><?php echo $b['nama'] ?></td>
        <td><?php echo $b['kota'] ?></td>
      </tr>
    <?php } ?>
    </table>
  </body>
</html>
