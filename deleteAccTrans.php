<?php
$id =  $_GET['id'];
echo $id;
include 'crud.php';
$obj1 = new crud();

$obj1 -> delAccTrans($id);
header("location:display_acc_trans.php");
?>