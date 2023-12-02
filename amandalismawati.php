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
  function get_matkul()
  {
    return $this->matkul;
  }
  function get_citacita;
  {
    return $this->citacita;
  }

}

$amanda = new Mahasiswa ('amanda', '2255201013', 'PBO', 'pengusaha');
echo "Name : " . $amanda->get_name();
echo "\n";
echo "nim: " . $amanda->get_nim();
echo "\n";
echo "matkul: " . $amanda->get_matkul();
echo "\n";
echo "citacita: " . $amanda->get_citacita();

?>
 
</body>
</html>
