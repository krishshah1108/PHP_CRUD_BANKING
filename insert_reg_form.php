<?php

include 'crud.php';
$obj1 = new crud();
if(isset($_POST['submit']))
{
    $NAME = $_POST['name'];
    $CN = $_POST['cn'];
    $EMAIL = $_POST['email'];
    $GENDER = $_POST['gender'];
    $LANG = implode(' , ',$_POST['lang']);
    $UN = $_POST['un'];
    $PWD = $_POST['pwd'];

    $obj1->insertregForm($NAME,$CN,$EMAIL,$GENDER,$LANG,$UN,$PWD);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert_Reg_Form | K11</title>
    <link rel="stylesheet" href="insert.css">
</head>
<body>
    <div>
        <h2 id="text">Login here
        <button id="btn"><a href="login_form.php">Login</a></button></h2>
    </div>
    <div>
        <h2 id="text">Exit 
        <button id="btn"><a href="registration_form.php">Exit</a></button></h2>
    </div>
</body>
</html>


