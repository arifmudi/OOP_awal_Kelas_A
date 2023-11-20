<!DOCTYPE html>
<html>
<body>



<?php
class Mahasiswa {
  // Properties
  public $name;
  public $nim;
  public $matkul;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
  function set_nim($nim) {
    $this->name = $name;
  }
  function get_nim() {
    return $this->nim;
  }
  function set_matkul($matkul) {
    $this->matkul = $matkul;
  }
  function get_matkul() {
    return $this->matkul;
  }
}

$nisa = new Mahasiswa();
$nim = new Mahasiswa();
$matkul = new Mahasiswa();
$nisa->set_name('Khairunnisa');
$nim->set_name('2255201004');
$matkul->set_name('pbo');

echo 'Nama : ' . $cindy->get_name();
echo "<br>";
echo 'nim: ' . $nim->get_name();
echo "<br>";
echo 'matkul: ' . $matkul->get_name();
?>
 
</body>
</html>
