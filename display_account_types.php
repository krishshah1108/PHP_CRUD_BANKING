<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Account Types | K11</title>
    <link rel="stylesheet" href="form_style.css">
</head>
<body>
    <table align="center">
        <tr id="heading">
            <th colspan="4"><h2>Available Records <sub> (Account Types)</sub></h2></th>
        </tr>
        <tr id="subheading">
            <th>Type Id</th>
            <th>Type Name</th>
            <th>Delete</th>
            <th>Update</th>
        </tr>
        <?php
            include 'crud.php';
            $obj1 = new crud();
            $output = $obj1 -> displayaccTypes();
            while($row = mysqli_fetch_assoc($output))
            {
        ?>
        <tr>
            <td><?php echo $row['type_id']; ?></td>
            <td><?php echo $row['type_name']; ?></td>
            <td><button><a href="delAccType.php?id=<?php  echo $row['type_id']; ?>">Delete</a></button></td>
            <td><button><a href="updateAccType.php?id=<?php  echo $row['type_id']; ?>">Update</a></button></td>
        </tr>
        <?php
            }
        ?>
    </table>
    <br><br><button><a href="display_user_det.php">User Details | Available records</a></button>&nbsp;&nbsp;&nbsp;
    <br><br><button><a href="display_acc_trans.php">Account Transactions | Available records</a></button>&nbsp;&nbsp;&nbsp;
</body>
</html>
