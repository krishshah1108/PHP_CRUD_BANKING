<?php
include 'crud.php';
$obj1 = new crud();
if(isset($_POST['insert']))
{
    // $AC_NO = $_POST['ac_no'];
    $U_EMAIL = $_POST['u_email'];
    $U_AC_TY = $_POST['u_ac_ty'];
    $U_NAME = $_POST['u_name'];
    $CN = $_POST['cn'];
    $KYC = $_POST['kyc'];
    $CU_BAL = $_POST['cu_bal'];
    $OP_DATE = $_POST['op_date'];
    $ADDRESS = $_POST['address'];

    $auto = "SELECT MAX(account_no) FROM user_details";
    $run = mysqli_query($obj1->con,$auto);
    $output = mysqli_fetch_array($run);
    $AC_NO = ++ $output[0];
    $obj1 -> insertuserDetails($AC_NO,$U_EMAIL,$U_AC_TY,$U_NAME,$CN,$KYC,$CU_BAL,$OP_DATE,$ADDRESS);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert User Details | K11</title>
    <link rel="stylesheet" href="insert.css">
</head>
<body>
        <button id="dis"><a href="display_user_det.php">Available Records | User Details</a></button>
        <div class="extra">
            <button id="btn"><a href="account_types.php">Account Types | Form</a></button>
            <button  id="btn"><a href="account_transactions.php">Account Transactions | Form</a></button>
         </div>
</body>
</html>