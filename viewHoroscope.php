<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_SESSION['horos']) ){
echo $_SESSION['horos'];
}
?>