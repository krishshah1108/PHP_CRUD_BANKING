<?php
if(isset($_POST['login']))
{
    include 'crud.php';
    $obj1 = new crud();
    $out = $obj1 -> displayregForm();
    
    $UN = $_POST['un'];
    $PWD = $_POST['pwd'];
    $flag = 0;
    $name;
    while($r = mysqli_fetch_assoc($out))
    {
        if(($UN==$r['Username']) && ($PWD==$r['Password']))
        {
            $name = $r['Name'];
            echo "Welcome ".$name."<br>";
            $flag = 1;
        }
    }
    if($flag == 1)
    {
        echo "Data matched Login Success.";
    }
    else{
        header("location:login_form.php?flag=$flag");
    }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="insert.css">
</head>
    <body>
        <br><br><br>
        <!-- <button id="btn"><a href="login_form.php">Login Again</a></button> -->
        <button id="btn"><a href="account_types.php">Account_Types</a></button>
        <button id="btn"><a href="user_details.php">User_Details</a></button>
        <button id="btn"><a href="account_transactions.php">Account_Transactions</a></button>
    </body>
</html>