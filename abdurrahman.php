<!DOCTYPE html>
<html>
<body>

<?php
class mahasiswa {
  // Properties
  private $name;
  private $nim;
  private $matkul;
  private $cita_cita;
  // Methods
  function __construct($name, $nim, $matkul, $cita_cita){
      $this->name = $name;
      $this->nim = $nim;
      $this->matkul = $matkul;
      $this->cita_cita = $cita_cita;
  }
  function get_name() {
    return $this->name;
  }
  function get_nim() {
    return $this->nim;
  }
  function get_matkul () {
  	return $this->matkul;
  }
  function get_cita_cita () {
  	return $this->cita_cita;
  }
}

$roman = new mahasiswa('Abdurrahman', '2255201009', 'PBO', 'Pengusaha');
echo "nama: " . $roman->get_name();
echo "<br>";
echo "nim: " .  $roman->get_nim();
echo "<br>";
echo "matkul: " . $roman->get_matkul();
echo "<br>";
echo "matkul: " . $roman->get_cita_cita();
?>
 
</body>
</html>
