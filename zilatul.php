<?php
class mahasiswa
{
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
    protected function get_citacita()
    {
        return $this->citacita;
    } 
     function __destruct() {
    echo "<br> ini akhir dari class mahasiswa {$this->name}.";
  }
}
//class turunan organisasi
class organisasi extends mahasiswa {
      function hima() {
echo "Name: " . $zilla->get_name();
echo "\n";
echo "nim: " . $zilla->get_nim();
echo "\n";
echo "matkul: " . $zilla->get_matkul();
echo "\n";
echo "citacita: " . $zilla->get_citacita();
echo "\n";       
echo "Organisasi : HIMA"; 
      }
}
$zilla = new mahasiswa('zilla tulhusna', '2255201048', 'PBO', 'menjadi istri boboiboy');
$zilla->hima();

?>


