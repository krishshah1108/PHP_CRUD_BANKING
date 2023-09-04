<?php
$id = $_GET['id'];
include 'crud.php';
$obj1 = new crud();

$obj1 -> delAccType($id);
header("location:display_account_types.php");
?>