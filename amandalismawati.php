<!DOCTYPE html>
<html>
<body>


<!DOCTYPE html>
<html>
<body>



<?php
class Mahasiswa {
  // Properties
  private $name;
  private $nim;
  private $matkul;
 

  // Methods
  function __construct($name, $nim, $matkul) {
    $this->name = $name;
    $this->nim = $nim;
    $this->matkul = $matkul;

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
 
}

$amanda = new Mahasiswa('amanda', '2255201013', 'PBO');


echo 'Name : ' . $amanda->get_name();
echo "<br>";
echo 'nim: ' . $amanda->get_nim();
echo "<br>";
echo 'matkul: ' . $amanda->get_matkul();
?>
 
</body>
</html>