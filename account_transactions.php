 <?php
// ALTER TABLE account_transactions
// ADD CONSTRAINT fk_at FOREIGN KEY(account_no) REFERENCES user_details(account_no);

// ALTER TABLE account_transactions
// ADD CONSTRAINT fk_atypes FOREIGN KEY(type_id) REFERENCES account_types(type_id);

// echo 'Account_Transactions';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Transactions | K11</title>
    <link rel="stylesheet" href="form_style.css">
</head>
<body>
    <form action="insert_acc_tran.php" method="post">
    <table align="center">
        <tr id="heading">
            <th colspan="2">ACCOUNT TRANSACTIONS</th>
        </tr>
        <!-- <tr>
            <td><label for="t_id">Transaction ID</label></td>
            <td><input type="text" id="t_id" name="t_id" placeholder="Enter Transaction ID" required></td>
        </tr> -->
        <?php
        include 'crud.php';
        $obj1 = new crud();
        $output = $obj1 -> displayuserDet();
        $out = $obj1 -> displayaccTypes();
        while($row = mysqli_fetch_assoc($output))
        {
            array_push($obj1->accNumber ,$row['account_no']);
        }
        while ($r = mysqli_fetch_assoc($out)) {
            array_push($obj1->accTypeID ,$r['type_id']);
        }
        ?>
        <tr>
            <td><label for="ac_no">Account Number</label></td>
            <td>
                <select name="ac_no" id="ac_no">
                    <option value="-1">Select Account Number</option>
                    <?php
                    foreach($obj1->accNumber as $k)
                    {
                    ?>
                    <option value="<?php echo $k;?>"><?php echo $k;?></option>
                    <?php
                    }
                    ?>
                </select>
            </td>
        </tr>        
        <tr>
            <td><label for="type_id">Type ID</label></td>
            <td>
            <select name="type_id" id="type_id">
                <option value="-1">Select Type ID</option>
                <?php
                foreach ($obj1->accTypeID as $kr) {
                ?>
                <option value="<?php echo $kr ?>"><?php echo $kr ?></option>
                <?php
                }
                ?>
            </select>    
            </td>
        </tr>
        <tr>
            <td><label for="t_type">Transaction Type</label></td>
            <td><select name="t_type" id="t_type">
                <option value="-1">Select Type</option>
                <option value="Debit">Debit</option>
                <option value="Credit">Credit</option>
            </select></td>
        </tr>
        <tr>
            <td><label for="t_amount">Transaction Amount</label></td>
            <td><input type="number" id="t_amount" name="t_amount" placeholder="Enter Transaction Amount" required></td>
        </tr>
        <tr>
            <td><label for="t_date">Transaction Date</label></td>
            <td><input type="date" id="t_date" name="t_date" placeholder="Enter Transaction Date" required></td>
        </tr>
        <tr id="bottom">
            <td colspan="2" align="center">
            <button type="submit" name="insert" >Submit</button>
            </td>
        </tr>
    </table>
    </form>
    <div class="extra">
        <button><a href="user_details.php">User Details | Form</a></button>
        <button id="move"><a href="account_types.php">Account Types | Form</a></button>
    </div>
</body>
</html>