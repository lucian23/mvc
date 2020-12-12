<?php
require('db/config.php');
$fn = $_GET['nume'];
$ln = $_GET['pre'];
$afiseaza = 'Cel mai tare este baiatul cu numele ' . $fn . ' si prenumele  ' . $ln . ' si vrea sa iasa la joaca :)';

$sql = "SELECT * FROM `nomenclator_medicamente` WHERE 1";
$result = $conn->query($sql);
echo "<br>";
#require('db/fetch_assoc.php');
#require('db/fetch_array.php');
require('db/affdb.php');

$vector = [
    'Ion',
    'Marcu',
    'Steaua'
];

$assoc = [
    'varsta' => 44,
    'profesie' => 'web dev',
    'nume' => 'lucian'
];
require('../views/index2.view.php');
?>