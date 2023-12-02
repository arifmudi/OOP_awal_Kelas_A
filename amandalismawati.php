<!DOCTYPE html>
<html>
<body>



<?php
class Mahasiswa {
  // Properties
  private $name;
  private $nim;
  private $matkul;
  private $citacita;
 

  // Methods
  function __construct($name, $nim, $matkul, $citacita)
  {
    $this->name = $name;
    $this->nim = $nim;
    $this->matkul = $matkul;
    $this->citacita = $citacita;
  }
  function get_name()
  {
    return $this->name;
  }
  function get_nim()
  {
    return $this->nim;
  }
  protected function get_matkul()
  {
    return $this->matkul;
  }
  protected function get_citacita;
  {
    return $this->citacita;
  }
  function __destruct()
  {
    echo "\n ini akhir dari class mahasiswa {$this->name}.",
  }
}
class organisasi extends mahasiswa
{
  protected $NamaOrganisasi;
    protected $TahunGabung;
    function hima()
    {
      echo "Name: " . $this->get_name();
      echo "\n";
      echo "Nim: " . $this->get_nim();
      echo "\n";
      echo "Matkul: " . $this->get_matkul();
      echo "\n";
      echo "Cita-cita: " . $this->get_citacita();
      echo "\n";
      echo "Nama Organisasi: " . $this->get_namaorganisasi();
      echo "\n";
      echo "Tahun Gabung: " . $this->get_tahun();
      
    }
function __construct($name, $nim, $matkul,  $citacita, $NamaOrganisasi, $TahunGabung)
{
    parent::__construct($name, $nim, $matkul, $citacita);
    $this->NamaOrganisasi = $NamaOrganisasi;
    $this->TahunGabung = $TahunGabung;
}
protected function get_namaorganisasi()
    {
        return $this->NamaOrganisasi;
    }
    protected function get_tahun()
    {
        return $this->TahunGabung;
    }
    function namatahun()
    {
      echo "\n";
      echo "Nama Organisasi: " . $this->get_namaorganisasi();
      echo "\n";
      echo "Tahun Gabung: " . $this->get_tahun();
    }

$amanda = new organisasi ('amanda', '2255201013', 'pbo', 'pengusaha', 'himanika', '20022 tahun' );
$amanda->Hima();

?>
 
</body>
</html>
