<?php
$id = $_GET['id'];
include 'crud.php';
$obj1 = new crud();
$out = $obj1 -> accTransData($id);
while($r = mysqli_fetch_assoc($out))
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Account Transaction | K11</title>
    <link rel="stylesheet" href="form_style.css">
</head>
<body>
<form method="post">
    <table align="center">
        <tr id="heading">
            <th colspan="2">UPDATE ACCOUNT TRANSACTIONS</th>
        </tr>
        <tr>
            <td><label for="ac_no">Account Number</label></td>
            <td><input type="text" id="ac_no" name="ac_no" placeholder="Enter Account Number" value="<?php echo $r['account_no'] ?>" required></td>
        </tr>
        <tr>
            <td><label for="type_id">Type ID</label></td>
            <td><input type="text" id="type_id" name="type_id" placeholder="Enter Type ID" value="<?php echo $r['type_id'] ?>" required></td>
        </tr>
        <tr>
            <td><label for="t_type">Transaction Type</label></td>
            <td><select name="t_type" id="t_type">
                <option value="<?php echo $r['transaction_type'] ?>"><?php echo $r['transaction_type'] ?></option>
                <option value="Debit">Debit</option>
                <option value="Credit">Credit</option>
            </select></td>
        </tr>
        <tr>
            <td><label for="t_amount">Transaction Amount</label></td>
            <td><input type="number" id="t_amount" name="t_amount" placeholder="Enter Transaction Amount" value="<?php echo $r['transaction_amount'] ?>" required></td>
        </tr>
        <tr>
            <td><label for="t_date">Transaction Date</label></td>
            <td><input type="date" id="t_date" name="t_date" placeholder="Enter Transaction Date" value="<?php echo $r['transaction_date'] ?>" required></td>
        </tr>
        <tr id="bottom">
            <td colspan="2" align="center">
            <button type="submit" name="update" >Update</button>
            </td>
        </tr>
    </table>
    </form>
    <?php
    }
    if(isset($_POST['update']))
    {
        $ACC_NO = $_POST['ac_no'];
        $TYPE_ID = $_POST['type_id'];
        $TR_TYPE = $_POST['t_type'];
        $TR_AMT = $_POST['t_amount'];
        $TR_DATE = $_POST['t_date'];
        $obj1 -> updateAccTrans($id,$ACC_NO,$TYPE_ID,$TR_TYPE,$TR_AMT,$TR_DATE);
        header("location:display_acc_trans.php");
    }
    ?>
</body>
</html>