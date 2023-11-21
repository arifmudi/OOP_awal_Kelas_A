<!DOCTYPE html>
<html>
<body>

<?php
class mahasiswa {
  // Properties
  private $name;
  private $nim;
  private $matkul;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
  function set_nim($nim) {
    $this->nim = $nim;
  }
  function get_nim() {
    return $this->nim;
  }
  function set_matkul($matkul) {
    
  	$this->matkul = $matkul;
  }
  function get_matkul () {
  	return $this->matkul;
  }
}

$nama = new mahasiswa();
$nama->set_name('Bayu aji lubis');
$nama->set_nim('2255201014');
$nama->set_matkul('pbo');
echo "nama: " . $nama->get_name();
echo "<br>";
echo "nim: " .  $nama->get_nim();
echo "<br>";
echo "matkul: " . $nama->get_matkul();
?>
 
</body>
</html>