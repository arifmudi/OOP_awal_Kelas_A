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
  function __construct ($name, $nim, $matkul, $cita_cita)
  {
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
  function get_matkul() {
  	return $this->matkul;
  }
  function get_cita_cita() {
  	return $this->cita_cita;
  }

}

$syreef = new mahasiswa('syareef', '2255201033', 'pbo', 'kaya');
echo "Name: " . $syreef->get_name();
echo "<br>";
echo "nim: " . $syreef->get_nim();
echo "<br>";
echo "matkul: " . $syreef->get_matkul();
echo "<br>";
echo "citacita: " . $syreef->get_cita_cita();
?>
 
</body>
</html>