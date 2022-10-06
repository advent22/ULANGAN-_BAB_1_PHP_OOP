<?php
class Motor{

    public $id_machine, $name, $type;

    public function __construct($name, $id_machine, $type)
    {
        $this -> name = $name;
        $this -> id_machine = $id_machine;
        $this -> type = $type;
    }
}

$obj1 = new Motor (name: "Beat RGB", id_machine: 2211, type: "Automatic");
$obj2 = new Motor (name: "FIZ R", id_machine: 5827, type: "Sport");

// echo "<hr>";
echo "Nama : " . $obj1 -> name . "<br>";
echo "id_machine : " . $obj1 -> id_machine . "<br>";
echo "type : " . $obj1 -> type . "<hr>";

echo "Nama : " . $obj2 -> name . "<br>";
echo "id_machine : " . $obj2 -> id_machine . "<br>";
echo "type : " . $obj2 -> type . "<hr>";
?>
