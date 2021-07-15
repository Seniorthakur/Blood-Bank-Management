<?php
include('connection.php');

$numRows = $db->query("SELECT COUNT(*) FROM patient_reg")->fetchColumn();
echo $numRows; 
?>