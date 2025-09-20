<?php 
namespace App\Controllers;

class Operations extends BaseController{
    public function index(){
        echo "Student Number: 2023117093<br>";
        echo "Fullname: John Gabriel R batac<br>";
        echo "Degree Program: BSIT Specialized in Web and Mobile Application Development<br>";
        echo "Year Level:  3rd Year<br>";
        echo "Section: TW32<br>";
    }
    public function displayInfo($StudentNumber, $Fullname, $DegreeProgram, $YearLevel, $Section){
        echo "Student Number: " . $StudentNumber . "<br>";
        echo "Fullname: " . $Fullname . "<br>";
        echo "Degree Program: " . $DegreeProgram . "<br>";
        echo "Year Level: " . $YearLevel . "<br>";
        echo "Section: " . $Section . "<br>";
    }
    public function compute($num1 = 0, $num2 = 0){
        echo "Number 1: " . $num1 . "<br>";
        echo "Number 2: " . $num2 . "<br>";

        echo "Sum: " . ($num1 + $num2) . "<br>";
        echo "Difference: " . ($num1 - $num2) . "<br>";
        echo "Product: " . ($num1 * $num2) . "<br>";
        if($num2 != 0){
            echo "Quotient: " . ($num1 / $num2) . "<br>";
            echo "Remainder: " . ($num1 % $num2) . "<br>";
        } else {
            echo "Quotient: Division by zero is not allowed.<br>";
            echo "Remainder: Division by zero is not allowed.<br>";
        }
    }
}

?>