<?php
$id = $_GET['id'];
include 'crud.php';
$obj1 = new crud();

$obj1 -> delUseDetails($id);
header("location:display_user_det.php");

?> 