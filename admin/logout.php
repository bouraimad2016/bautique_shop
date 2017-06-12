<?php 
   ob_start();
 require_once $_SERVER['DOCUMENT_ROOT'] . '/tutorial/core/init.php';
unset ($_SESSION['dbadmin']);
header('LOCATION: login.php');
?>