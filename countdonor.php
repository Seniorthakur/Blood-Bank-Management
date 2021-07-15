<?php
include('connection.php');

$numRows = $db->query("SELECT COUNT(*) FROM donor_reg")->fetchColumn();
echo $numRows; 
?>