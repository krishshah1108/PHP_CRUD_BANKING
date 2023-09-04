<?php
include 'crud.php';
$obj1 = new crud();
if(isset($_POST['insert']))
{
    // $T_ID = $_POST['t_id'];
    $AC_NO = $_POST['ac_no'];
    $TYPE_ID = $_POST['type_id'];
    $T_TYPE = $_POST['t_type'];
    $T_AMOUNT = $_POST['t_amount'];
    $T_DATE = $_POST['t_date'];

    $auto = "SELECT MAX(transaction_id) FROM account_transactions";
    $run = mysqli_query($obj1->con,$auto);
    $output = mysqli_fetch_array($run);
    $T_ID = ++ $output[0];  

    $obj1 -> insertaccTrans($T_ID,$AC_NO,$TYPE_ID,$T_TYPE,$T_AMOUNT,$T_DATE);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Account Transaction | K11</title>
    <link rel="stylesheet" href="insert.css">
</head>
<body>
        <button id="dis"><a href="display_acc_trans.php">Available Records | Account Transaction</a></button>
        <div class="extra">
            <button id="btn"><a href="account_types.php">Account Types| Form</a></button>
            <button id="btn"><a href="user_details.php">User Details | Form</a></button>
         </div>
</body>
</html>