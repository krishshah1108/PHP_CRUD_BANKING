<?php
// ALTER TABLE user_details
// ADD CONSTRAINT chk_bal CHECK(user_current_bal >= 0);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>User Details | K11</title>
        <link rel="stylesheet" href="form_style.css">
    </head>
    <body>
        <form action="insert_user_det.php" method="post">
            <table align="center">
            <tr id="heading">
                <th colspan="2">USER DETAILS</th>
            </tr>
            <!-- <tr>
                <td><label for="ac_no">Account Number</label></td>
                <td><input type="text" id="ac_no" name="ac_no" placeholder="Enter Account Number" required></td>
            </tr> -->
            <tr>
                <td><label for="u_email">User Email</label></td>
                <td><input type="text" id="u_email" name="u_email" placeholder="Enter User Email" required></td>
            </tr>
            <?php
                include 'crud.php';
                $obj1 = new crud();
                $output = $obj1 -> displayaccTypes();
                while($row = mysqli_fetch_assoc($output))
                {
                    array_push($obj1 -> arrTypeName,$row['type_name']);
                }
            ?>
            <tr>
                <td><label for="u_ac_ty">Account Type</label></td>
                <td>
                    <select name="u_ac_ty" id="u_ac_ty">
                    <option value="-1">Select Accout Type</option>
                    <?php
                    foreach ($obj1->arrTypeName as $v) {
                    ?>
                    <option value="<?php echo $v?>">
                    <?php echo $v;?>
                    </option>
                    <?php
                    }
                    ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="u_name">User Name</label></td>
                <td><input type="text" id="u_name" name="u_name" placeholder="Enter User Name" required></td>
            </tr>
            <tr>
                <td><label for="cn">Contact Number</label></td>
                <td><input type="text" id="cn" name="cn" placeholder="Enter Contact Number" required></td>
            </tr>
            <tr>
                <td><label for="kyc">KYC Number</label></td>
                <td><input type="text" id="kyc" name="kyc" placeholder="Enter KYC Number" required></td>
            </tr>
            <tr>
                <td><label for="cu_bal">Current Balance</label></td>
                <td><input type="number" id="cu_bal" name="cu_bal" placeholder="Enter Current Balance" required></td>
            </tr>
            <tr>
                <td><label for="op_date">Opening Date</label></td>
                <td><input type="date" id="op_date" name="op_date" placeholder="Enter Opening Date" required></td>
            </tr>
            <tr>
                <td><label for="address">User Address</label></td>
                <td><input type="text" id="address" name="address" placeholder="Enter User Address" required></td>
            </tr>
            <tr id="bottom">
                <td colspan="2" align="center">
                <button type="submit" name="insert" >Submit</button>
                </td>
            </tr>
        </table>
    </form>
    <div class="extra">
        <button><a href="account_types.php">Account Types | Form</a></button>
        <button id="move"><a href="account_transactions.php">Account Transactions | Form</a></button>
    </div>
</body>
</html>