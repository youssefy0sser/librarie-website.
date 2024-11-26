<?php 
require_once("connect_db.php");
global $con;
$stmt = $con->prepare("SELECT * FROM form");
$stmt->execute();
$buys = $stmt->fetchAll();
foreach($buys as $buy){
    echo $buy;
}
?>