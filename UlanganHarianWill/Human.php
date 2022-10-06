<?php

Class Human
{
    public $name;
    public $umur;
    public $jurusan;
    public $is_active;

    public function __construct($name, $umur, $is_active, $jurusan)
    {
        $this->name = $name;
        $this->umur = $umur;
        $this->jurusan = $jurusan;
        $this->is_active = $is_active;
    }
}

$obj1 = new Human (name: "William", umur: 18, is_active: true, jurusan: "Rekayasa Perangkat Lunak");


echo "Name: " . $obj1->name . "<br>";
echo "Umur: " . $obj1->umur . "<br>";
echo "is_active: " . $obj1->is_active . "<br>";
echo "Jurusan: " . $obj1->jurusan . "<hr>";

