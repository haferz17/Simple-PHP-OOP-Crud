<?php
class hewan{
  public $nama='kucing ';
  var $warna='kuning/';

  public function nama(){
    echo $this->nama."<br>";
  }
  public function warna(){
    echo $this->warna."/";
  }
}
class bunga extends hewan{
  var $namab;
  var $warnab;

  function namabu($nabu){
    $this->namab=$nabu;
  }
}



$bunga=new bunga();
echo $bunga->nama();
$bunga->namabu('lily');
echo $bunga->namab;
 ?>
