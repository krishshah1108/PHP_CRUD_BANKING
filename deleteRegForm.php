<?php
$id = $_GET['R_ID'];
echo $id;

include 'crud.php';
$obj1 = new crud();

$obj1 -> deleteRegForm($id);
header("location:login_form.php");
?>