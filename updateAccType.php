<?php
$id = $_GET['id'];
include 'crud.php';
$obj1 = new crud();
$output = $obj1 -> accTypeData($id);
while($row = mysqli_fetch_assoc($output))
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Account Type | K11</title>
    <link rel="stylesheet" href="form_style.css">
</head>
<body>
<form method="post" autocomplete="off">
        <table align="center">
            <tr id="heading">
                <th colspan="2">Update Account Types</th>
            </tr>
            <!-- <tr>
                <td><label for="type_id">Type ID</label></td>
                <td><input type="text" id="type_id" name="type_id" placeholder="Enter Type ID" required></td>
            </tr> -->
            <tr>
                <td><label for="type_name">Type Name</label></td>
                <td>
                    <input type="text" name="type_name" id="type_name" placeholder="Enter Type Name" value="<?php echo $row['type_name'];?>" required>
                </td>
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
        $typeName = $_POST['type_name'];
        $obj1 -> updateAccType($id , $typeName);
        header("location:display_account_types.php");
    }
    ?>
</body>
</html>