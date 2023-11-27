<?php
class mahasiswa
{
    // Properties
    private $name;
    private $nim;
    private $mkul;
    private $citacita;
    // Methods
    function __construct($name, $nim, $mkul, $citacita)
    {
        $this->name = $name; 
        $this->nim = $nim; 
        $this->mkul = $mkul; 
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

    function get_mkul()
    {
        return $this->mkul;
    }
    function get_citacita()
    {
        return $this->citacita;
    }
     function __destruct()
    {
        echo "\n ini akhir dari class mahasiswa {$this->name}.";
    }
}
class organisasi extends mahasiswa
{
    function hima()
    {
        echo "Name: " . $this->get_name();
        echo "\n";
        echo "Nim: " . $this->get_nim();
        echo "\n";
        echo "Matkul: " . $this->get_mkul();
        echo "\n";
        echo "Cita-cita: " . $this->get_citacita();
        echo "\n";
        echo "Organisasi : Hima";

    }
}    

$yuda = new organisasi('yuda', '2255201039', 'PBO', 'menjadi power ranger hijau');
$yuda->Hima();
