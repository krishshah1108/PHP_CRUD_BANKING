<?php
include 'crud.php';
$obj1 = new crud();
$id = $_GET['U_ID'];

$output = $obj1 -> formData($id);
while ($row = mysqli_fetch_assoc($output)) {

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Registration Form | K11</title>
    <link rel="stylesheet" href="form_style.css">
</head>
<body>
<form method="post">
        <table align="center">
            <tr>
                <th colspan="2" id="heading">Update Registration Form</th>
            </tr>
            <tr>
                <td><label for="name">Name</label></td>
                <td><input type="text" name="name" id="name" placeholder="Enter Name" pattern="[A-Za-z]{1,}" title="Only characters allowed" value="<?php echo $row['Name'];?>" required></td>
            </tr>
            <tr>
                <td><label for="cn">Contact Number</label></td>
                <td><input type="number" name="cn" id="cn" placeholder="Enter Contact Number" value="<?php echo $row['Contact'];?>" required></td>
            </tr>
            <tr>
                <td><label for="email">Email ID</label></td>
                <td><input type="text" name="email" id="email" placeholder="Enter Email ID" value="<?php echo $row['Email'];?>" required></td>
            </tr>
            <tr>
                <td><label for="gender">Gender</label></td>
                <td>
                    <input type="radio" name="gender" id="gender" group="gender" value="Male"
                    <?php
                    if($row['gender']=="Male")
                    {
                       echo "Checked";
                    }
                    ?>
                    >Male &nbsp;&nbsp;&nbsp;
                    <input type="radio" name="gender" id="gender" group="gender" value="Female"
                    <?php
                    if($row['gender']=="Female")
                    {
                       echo "Checked";
                    }
                    ?>
                    >Female
                </td>
            </tr>
            <tr>
                <td><label for="lang">Languages Known</label></td>
                <td>
                    <input type="checkbox" name="lang[]" id="lang" value="English"
                    <?php
                    $a = $row['lang'];
                    $LANG = explode(' , ',$a);
                    if(in_array("English",$LANG))
                    {
                        echo "Checked";
                    }   
                    ?>
                    >English &nbsp;&nbsp;
                    <input type="checkbox" name="lang[]" id="lang" value="Hindi"
                    <?php
                    if(in_array("Hindi",$LANG))
                    {
                        echo "Checked";
                    } 
                    ?>
                    >Hindi &nbsp;&nbsp;
                    <input type="checkbox" name="lang[]" id="lang" value="Gujarati"
                    <?php
                    if(in_array("Gujarati",$LANG))
                    {
                        echo "Checked";
                    } 
                    ?>
                    >Gujarati &nbsp;&nbsp;
                </td>
            </tr>
            <tr>
                <td><label for="un">Username</label></td>
                <td><input type="text" name="un" id="un" placeholder="Enter username" value="<?php echo $row['Username'];?>" required></td>
            </tr>
            <tr>
                <td><label for="pwd">Password</label></td>
                <td><input type="password" name="pwd" id="pwd" placeholder="Enter Password" minlength="8" maxlength="15" value="<?php echo $row['Password'];?>" required></td>
            </tr>
            <tr id="bottom">
                <td colspan="2" align="center">
                    <button type="submit" name="update">Update</button>
                </td>
            </tr>
        </table>
    </form>
    <?php
    }
    if(isset($_POST['update']))
    {
        $NAME = $_POST['name'];
        $CN = $_POST['cn'];
        $EMAIL = $_POST['email'];
        $GENDER = $_POST['gender'];
        $LANG = implode(' , ',$_POST['lang']);
        $UN = $_POST['un'];
        $PWD = $_POST['pwd'];

        $obj1 -> updateFormData($id,$NAME,$CN,$EMAIL,$GENDER,$LANG,$UN,$PWD );
        header("location:login_form.php");
    }
    ?>
</body>
</html>