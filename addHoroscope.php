<?php 
session_start();
if($_POST['personnummer'] && !$_SESSION['horos']){
    $x = (int)substr($_POST['personnummer'],4,4);
    include 'incl/class.php';    
    $myPerson = new person($x);
    $_SESSION['horos'] = $myPerson->horoscope();   
}
?>