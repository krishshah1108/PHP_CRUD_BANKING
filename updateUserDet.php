<?php
$id = $_GET['id'];
include 'crud.php';
$obj1 = new crud();

$out = $obj1 -> userDetData($id);
while($r = mysqli_fetch_assoc($out))
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User Details | K11</title>
    <link rel="stylesheet" href="form_style.css">
</head>
<body>
<form method="post">
            <table align="center">
            <tr id="heading">
                <th colspan="2">UPDATE USER DETAILS</th>
            </tr>
            <tr>
                <td><label for="u_email">User Email</label></td>
                <td><input type="text" id="u_email" name="u_email" placeholder="Enter User Email" value="<?php echo $r['user_email'];?>" required></td>
            </tr>
            <?php
            
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
                    <option  value="<?php echo $r['user_account_type'];?>"> <?php echo $r['user_account_type'];?></option>
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
                <td><input type="text" id="u_name" name="u_name" placeholder="Enter User Name"  value="<?php echo $r['user_name'];?>" required></td>
            </tr>
            <tr>
                <td><label for="cn">Contact Number</label></td>
                <td><input type="text" id="cn" name="cn" placeholder="Enter Contact Number"  value="<?php echo $r['user_contact_no'];?>" required></td>
            </tr>
            <tr>
                <td><label for="kyc">KYC Number</label></td>
                <td><input type="text" id="kyc" name="kyc" placeholder="Enter KYC Number"  value="<?php echo $r['kyc_no'];?>" required></td>
            </tr>
            <tr>
                <td><label for="cu_bal">Current Balance</label></td>
                <td><input type="number" id="cu_bal" name="cu_bal" placeholder="Enter Current Balance"  value="<?php echo $r['user_current_bal'];?>" required></td>
            </tr>
            <tr>
                <td><label for="op_date">Opening Date</label></td>
                <td><input type="date" id="op_date" name="op_date" placeholder="Enter Opening Date"  value="<?php echo $r['opening_date'];?>" required></td>
            </tr>
            <tr>
                <td><label for="address">User Address</label></td>
                <td><input type="text" id="address" name="address" placeholder="Enter User Address"  value="<?php echo $r['user_address'];?>" required></td>
            </tr>
            <tr id="bottom">
                <td colspan="2" align="center">
                <button type="submit" name="update" >Update</button>
                </td>
            </tr>
        </table>
        <?php
        }
        if(isset($_POST['update']))
        {
            $U_EMAIL = $_POST['u_email'];
            $U_AC_TY = $_POST['u_ac_ty'];
            $UN = $_POST['u_name'];
            $U_CN = $_POST['cn'];
            $KYC = $_POST['kyc'];
            $CUR_BAL = $_POST['cu_bal'];
            $OP_DATE = $_POST['op_date'];
            $U_ADDRESS = $_POST['address'];
            $obj1->updateuserDetails($id,$U_EMAIL,$U_AC_TY,$UN,$U_CN,$KYC,$CUR_BAL,$OP_DATE,$U_ADDRESS);
            header("location:display_user_det.php");
        }
        ?>
    </form>
</body>
</html>