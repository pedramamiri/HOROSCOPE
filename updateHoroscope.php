<?php
session_start();
parse_str(file_get_contents("php://input"), $_PUT);
if($_SERVER['REQUEST_METHOD'] == "PUT" && $_SESSION["horos"]){
    $x = (int)substr($_PUT['personnummer'],4,4);
    include 'incl/class.php';    
    $myPerson = new person($x);
    $_SESSION['horos'] = $myPerson->horoscope();
    echo 1;
    }else{
      echo 0;
    }
?>