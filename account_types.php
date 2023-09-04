<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account_Types  | K11</title>
    <link rel="stylesheet" href="form_style.css">
</head>
<body>
    <form action="insert_acc_types.php" method="post" autocomplete="off">
        <table align="center">
            <tr id="heading">
                <th colspan="2">Account Types</th>
            </tr>
            <!-- <tr>
                <td><label for="type_id">Type ID</label></td>
                <td><input type="text" id="type_id" name="type_id" placeholder="Enter Type ID" required></td>
            </tr> -->
            <tr>
                <td><label for="type_name">Type Name</label></td>
                <td>
                    <!-- <select name="type_name" id="type_name">
                        <option value="-1">Select Account</option>
                        <option value="savings">Savings</option>
                        <option value="current">Current</option>
                        <option value="recurring">Recurring</option>
                        <option value="fixed_account">Fixed Account</option>
                    </select> -->
                    <input type="text" name="type_name" id="type_name" placeholder="Enter Type Name" required>
                </td>
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
        <button id="move"><a href="account_transactions.php">Account Transactions | Form</a></button>
    </div>
</body>
</html>


