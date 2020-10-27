<?php
//comments
$variable1 = 0;
$otherVariable = 10;

$array = array("object1" => 1);

$variableClass = new myClass(1);

//we can access to the function with '->'
$number = $variableClass->getNumber();

//Procedure (no return value)
function changeVariable(int $param1){
    // global imports the global variable instead of defining a local one
    // cannot import and manipulate at the same line
    global $variable1;
    $variable1+=$param1;
}

//Function (returns something)
function changeTheOtherVariable(){
    global $otherVariable;
    $otherVariable--;
    return $otherVariable;
}

changeTheOtherVariable();
changeVariable(5);

// prints or echo, the "." is to append, "+" and "-" are for arithmetics only
echo "otherVariable is equals to " . $otherVariable."<br />";
echo "variable1 is equals to " . $variable1."<br \>";

// echo the variable type and value
var_dump($variable1);
var_dump($variableClass);

class myClass{

    private $params;
    public $param1;

    function __construct($param2){
        $this->$param1=$param2;
    }
    function __destruct(){

    }

    public function getNumber(){
        return 1;
    }
}

?>