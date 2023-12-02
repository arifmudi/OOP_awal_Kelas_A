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
  function __construct ($name, $nim, $matkul, $cita_cita){
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
  protected function get_matkul() {
  	return $this->matkul;
  }
  protected function get_cita_cita() {
  	return $this->cita_cita;
  }
  function __destruct() {
    echo "<br> ini akhir dari class mahasiswa {$this->name}.";
  }
}

//class turunan organisasi
class organisasi extends mahasiswa {
  // properties
    protected $organisasi;
    protected $tahun;

    // methods
    function __construct($name, $nim, $mata_kuliah, $citacita, $organisasi, $tahun)
    {
        parent::__construct($name, $nim, $mata_kuliah, $citacita);
        $this->organisasi = $organisasi;
        $this->tahun = $tahun;
    }
    
    protected function get_organisasi()
    {
        return $this->organisasi;
    }
    protected function get_tahun()
    {
        return $this->tahun;
    }
      function hima() {
          echo "Name: " . $this->get_name();
          echo "<br>";
          echo "Nim: " . $this->get_nim ();
          echo "<br>";
          echo "matkul: " . $this->get_matkul();
          echo "<br>";
          echo "Cita-Cita: " . $this->get_citacita();
          echo "<br>";
          echo "Nama organisasi: " . $this->get_organisasi();
          echo "<br>";
          echo "Tahun gabung: " . $this->get_tahun();
    }
 
}

$alhashir = new organisasi('alhashir', '2255201024', 'pbo', 'menjadi boboiboy','hima',2050);
$alhashir->hima();
?>

</body>
