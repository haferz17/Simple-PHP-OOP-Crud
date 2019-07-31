<?php
  class database{
    var $host='localhost';
    var $uname='root';
    var $pass='';
    var $dbase='crudphp';
    protected $a;

  function __construct(){
    $this->a=mysqli_connect($this->host,$this->uname,$this->pass,$this->dbase);
  }

  function tampil($cari,$odrby,$sort){
    if(isset($cari)){
      $data=mysqli_query($this->a,"select * from siswa where CONCAT(nama,kota) like '%$cari%'");
    }
    else {
      if(isset($odrby,$sort)){
        $data=mysqli_query($this->a,"select * from siswa order by $odrby $sort");
      }
      else{
        $data=mysqli_query($this->a,"select * from siswa");
      }

    }
    while($d=mysqli_fetch_array($data)){
      $hasil[]=$d;
    }
    return $hasil;
  }

  function tambah($nama,$kota){
    mysqli_query($this->a,"insert into siswa values('','$nama','$kota')");
  }

  function hapus($id){
    mysqli_query($this->a,"delete from siswa where id='$id'");
  }

  function edit($id){
    $data=mysqli_query($this->a,"select * from siswa where id='$id'");
    while($d=mysqli_fetch_array($data)){
      $hasil[]=$d;
    }
    return $hasil;
  }
  function update($id,$nama,$kota){
    mysqli_query($this->a,"update siswa set nama='$nama',kota='$kota' where id='$id'");
  }
}
?>
