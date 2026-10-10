<?php

class Company{
    public $name;
    public $location;
    public $tot_employees;

    public function __construct($nome, $sede, $dipendenti){
        $this->name = $nome;
        $this->location = $sede;
        $this->tot_employees = $dipendenti;
    }

    public function checkIfHaveEmployees($int1, $int2){
        if($int1 > $int2){
            return true;
        }
        return false;
    }

    public function printCheckEmployees ($num=0){
        if($this->checkIfHaveEmployees($this->tot_employees, $num)){
            //echo "L’ufficio Aulab con sede in Italia ha ben 50 dipendenti";
            echo"L'ufficio " . $this->name . " con sede in " . $this->location . " ha ben " . $this->tot_employees . " dipendenti. \n";
        }else{
            //echo "L’ufficio Aulab con sede in Italia non ha dipendenti"
            echo "L'ufficio " . $this->name  . " con sede in " . $this->location . " non ha dipendenti. \n";
        }
    }
}

$company1 = new Company('Aulab','Bari',30);
//$company1->printCheckEmployees();
$company2 = new Company('Private&co','Bruxelles',0);
//$company2->printCheckEmployees();
$company3 = new Company('Reply','Torino',13000);
//$company3->printCheckEmployees();
$company4 = new Company('Erika','Luzzano',1);
//$company4->printCheckEmployees();
$company5 = new Company('Cisco','Los Angeles',47000);
//$company5->printCheckEmployees();
