<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display User Types | K11</title>
    <link rel="stylesheet" href="form_style.css">
</head>
<body>
    <table align="center">
        <tr id="heading">
            <th colspan="11"><h2>Available Records <sub> (User Details)</sub></h2></th>
        </tr>
        <tr id="subheading">
            <th>Account Number</th>
            <th>User Email</th>
            <th>Account Type</th>
            <th>User Name</th>
            <th>Contact Number</th>
            <th>KYC Number</th>
            <th>Current Balance</th>
            <th>Opening Date</th>
            <th>Address</th>
            <th>Delete</th>
            <th>Update</th>
        </tr>
        <?php
        include 'crud.php';
        $obj1 = new crud();
        $output = $obj1 -> displayuserDet();
        while($row = mysqli_fetch_assoc($output))
        {
        ?>
        <tr>
            <td><?php echo $row['account_no'];?></td>
            <td><?php echo $row['user_email'];?></td>
            <td><?php echo $row['user_account_type'];?></td>
            <td><?php echo $row['user_name'];?></td>
            <td><?php echo $row['user_contact_no'];?></td>
            <td><?php echo $row['kyc_no'];?></td>
            <td><?php echo $row['user_current_bal'];?></td>
            <td><?php echo $row['opening_date'];?></td>
            <td><?php echo $row['user_address'];?></td>
            <td><button><a href="delUserDet.php?id=<?php echo $row['account_no'];?>">Delete</a></button></td>
            <td><button><a href="updateUserDet.php?id=<?php echo $row['account_no'];?>">Update</a></button></td>
        </tr>
        <?php } ?>
    </table>
    <br><br><button><a href="display_account_types.php">Account Types | Available records</a></button>&nbsp;&nbsp;&nbsp;
    <br><br><button><a href="display_acc_trans.php">Account Transactions | Available records</a></button>&nbsp;&nbsp;&nbsp;
</body>
</html>