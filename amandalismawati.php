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
  function set_name($name)
  { 
    $this->name = $name;
  }
  function get_name()
  {
    return $this->name;
  }
  function set_nim($nim)
  {
    $this->nim = $nim;
  }
  function get_nim()
  {
    return $this->nim;
  }
  function set_matkul($matkul)
  {
    $this->matkul = $matkul;
  }
  function get_matkul()
  {
    return $this->matkul;
  }
}

$amanda = new Mahasiswa ();
$amanda->set_name('amanda');
$amanda->set-nim('2255201013');
$amanda->set_matkul('PBO');
echo 'Name : ' . $amanda->get_name();
echo "\n";
echo 'nim: ' . $amanda->get_nim();
echo "\n";
echo 'matkul: ' . $amanda->get_matkul();

?>
 
</body>
</html>
