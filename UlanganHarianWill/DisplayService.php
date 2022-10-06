<?php
interface DisplayService{
    public function display();
}
abstract class Motor implements DisplayService{
    public $name;
    public $machine_number;
    public $type;
    public $type_cilinder;
    public $colour;
    public static $index = 1;   

    public function __construct($name, $machine_number, $type, $type_cilinder)
    {
        $this->name = $name;
        $this->machine_number = $machine_number;
        $this->type = $type;
        $this->type_cilinder = $type_cilinder;
        self::$index;
    }
    public function getNoMachine(){
        return $this->machine_number;
    }

    public function getType(){
        return $this->type;
    }

    public function getName(){
        return $this->name;
    }

    public function getTypeCilinder(){
        return $this->type_cilinder;
    }

    public function space(){
        echo '<hr>';
    }

    public function display()
    {
        echo 'No. ' . self::$index++ . '<br>';
        echo 'Nama: ' . $this->getName() . '<br>';
        echo 'No Mesin: ' . $this->getNoMachine() . '<br>';
        echo 'Type: ' . $this->getType() . '<br>';
        echo 'CC Cilinder: ' . $this->getTypeCilinder();
        echo $this->space();
    }
}

class Vario extends Motor{
    
}

class Sonic extends Motor{

}

$vario1 = new Vario(name: "FIZ R" , machine_number: 123, type: 'sport', type_cilinder: 125);
$vario2 = new Vario(name: "SUPRA X", machine_number: 4523, type: 'sport',type_cilinder: 150);
$sonic = new sonic(name: "Sonic", machine_number: 54232, type: 'sport',type_cilinder: 150);
echo $vario1->display();
echo $vario2->display();
echo $sonic->display();
/* output
No. 1
Nama: FIZ R
No Mesin: 123
Type: sport
CC Cilinder: 125
----------------
No. 2
Nama: SUPRA X
No Mesin: 4523
Type: sport
CC Cilinder: 150
----------------
No. 3
Nama: Sonic
No Mesin: 54232
Type: sport
CC Cilinder: 150
 */