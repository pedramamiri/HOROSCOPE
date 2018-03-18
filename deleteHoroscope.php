<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == "DELETE" && $_SESSION["horos"]){
session_destroy();    
echo 1;
}else{
    echo 0;
}
?>