<?php

class person {
    protected $firstName, $lastName, $id;
    
    public function __construct($first_name, $last_name, $identification) {
        $this->firstName = $first_name;
        $this->lastName = $last_name;
        $this->id = $identification;
    }
    
    function printPerson() {
        print("Name: {$this->lastName}, {$this->firstName}\n");
        print("ID: {$this->id}\n");
    }
}

class Student extends person {
    private $testScores,$avg;
    public function __construct($first_name, $last_name, $identification, $test_scores) {
        $this->firstName = $first_name;
        $this->lastName = $last_name;
        $this->id = $identification;
        $this->testScores =$test_scores;
    }
    
    function calculate() {
        $c=count($this->testScores);
        $sum=0;
        for($i=0;$i<$c;$i++)
            $sum=$sum+$this->testScores[$i];
        $avg=$sum/$c;
        
        if($avg>=90 && $avg<=100)
            return 'O';
        else if($avg>=80 && $avg<90)
            return 'E';
        else if($avg>=70 && $avg<80)
            return 'A';
        else if($avg>=55 && $avg<70)
            return 'P';
        else if($avg>=40 && $avg<550)
            return 'D';
        else 
            return 'T';
    }
}


$file = fopen("php://stdin", "r");

$name_id = explode(' ', fgets($file));

$first_name = $name_id[0];
$last_name = $name_id[1];
$id = (int)$name_id[2];

fgets($file);

$scores = array_map(intval, explode(' ', fgets($file)));

$student = new Student($first_name, $last_name, $id, $scores);

$student->printPerson();

print("Grade: {$student->calculate()}");
?>