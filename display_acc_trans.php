<?php
include 'crud.php';
$obj1 = new crud();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Account Transaction | K11</title>
    <link rel="stylesheet" href="form_style.css">
</head>
<body>
    <table>
    <table align="center">
        <tr id="heading">
            <th colspan="8"><h2>Available Records <sub> (Account Transaction)</sub></h2></th>
        </tr>
        <tr id="subheading">
            <th>Transaction Id</th>
            <th>Account Number => Email</th>
            <th>Type ID</th>
            <th>Transaction Type</th>
            <th>Transaction Amount</th>
            <th>Transaction Date</th>
            <th>Delete</th>
            <th>Update</th>
        </tr>
        <?php 
        $output = $obj1->displayaccTrans();
        while ($row = mysqli_fetch_assoc($output)) {
            $var = $row['account_no'];
            $data = "SELECT user_email FROM user_details where account_no = '$var' ";
            $run = mysqli_query($obj1 -> con , $data);
            $f = mysqli_fetch_array( $run);
        ?>
        <tr>
        <td><?php echo $row['transaction_id'];?></td>
        <td>
        <?php
        echo $row['account_no']."=>";
        echo $f['user_email'];
        ?>
        </td>
        <td><?php echo $row['type_id'];?></td>
        <td><?php echo $row['transaction_type'];?></td>
        <td><?php echo $row['transaction_amount'];?></td>
        <td><?php echo $row['transaction_date'];?></td>
        <td><button><a href="deleteAccTrans.php ?id=<?php  echo $row['transaction_id']; ?>">Delete</a></button></td>
        <td><button><a href="updateAccTrans.php ?id=<?php  echo $row['transaction_id']; ?>">Update</a></button></td>
        </tr>
        <?php
        }
        ?>
    </table>
    <br><br><button><a href="display_user_det.php">User Details | Available records</a></button>&nbsp;&nbsp;&nbsp;
    <br><br><button><a href="display_account_types.php">Account Types | Available records</a></button>&nbsp;&nbsp;&nbsp;
</body>
</html>