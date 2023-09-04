<?php
include 'crud.php';
$obj1 = new crud();
if(isset($_POST['insert']))
{
    // $TYPE_ID = $_POST['type_id'];
    $TYPE_NAME = $_POST['type_name'];
    $auto = "SELECT MAX(type_id) FROM account_types";
    $run = mysqli_query($obj1->con,$auto);
    $output = mysqli_fetch_array($run);
    $TYPE_ID = ++ $output[0];

    $obj1 -> insertaccTypes($TYPE_ID , $TYPE_NAME);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="insert.css">
    <title>Insert Account Types | K11</title>
</head>
<body>
        <button id="dis"><a href="display_account_types.php">Available Records | Account Types</a></button>
        <div class="extra">
            <button id="btn"><a href="user_details.php">User Details | Form</a></button>
            <button  id="btn"><a href="account_transactions.php">Account Transactions | Form</a></button>
         </div>
</body>
</html>