<?php

class Company{
    public $name;
    public $location;
    public $tot_employees;
    public static $avg_salary = 1650;
    public static $total = 0;

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
            echo"L'ufficio $this->name con sede in $this->location ha ben $this->tot_employees dipendenti. \n";
        }else{
            //echo "L’ufficio Aulab con sede in Italia non ha dipendenti"
            echo "L'ufficio $this->name con sede in $this->location non ha dipendenti. \n";
        }
    }

    public function calculateAnnualCosts($int){
        return $this->tot_employees * (self::$avg_salary * $int);
    }

    public function printAnnualCostCalculate($month=12){
        echo "----$this->name----\n";
        echo "Il costo annuale dell'uffico $this->name è di " .$this->calculateAnnualCosts($month) . " euro .\n";
    }

    public function progressiveCost($month=12){
        return self::$total += $this->calculateAnnualCosts($month);
    }

    public static function printFinalTotal(){
        echo "il costo totale di tutte le Company è di: ".self::$total . " euro. \n";
    }
}

$company1 = new Company('Aulab','Bari',30);
$company1->printCheckEmployees();
$company1->printAnnualCostCalculate();
$company1->progressiveCost();

$company2 = new Company('Private&co','Bruxelles',0);
$company2->printCheckEmployees();
$company2->printAnnualCostCalculate();
$company2->progressiveCost();

$company3 = new Company('Reply','Torino',13000);
$company3->printCheckEmployees();
$company3->printAnnualCostCalculate();
$company3->progressiveCost();

$company4 = new Company('Erika','Luzzano',1);
$company4->printCheckEmployees();
$company4->printAnnualCostCalculate();
$company4->progressiveCost();

$company5 = new Company('Cisco','Los Angeles',47000);
$company5->printCheckEmployees();
$company5->printAnnualCostCalculate();
$company5->progressiveCost();

Company::printFinalTotal();