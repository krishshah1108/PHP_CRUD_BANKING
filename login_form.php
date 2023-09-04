<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form | K11</title>
    <link rel="stylesheet" href="form_style.css">
</head>
<body>

<table>
        <tr id="heading">
            <th colspan="9">Records Registered</th>
        </tr>
    <tr id="k">
        <th>Name</th>
        <th>Contact Number</th>
        <th>Email ID</th>
        <th>Gender</th>
        <th>Languages Known</th>
        <th>Username</th>
        <th>Password</th>
        <th>Delete</th>
        <th>Update</th>
    </tr>
        <?php
        include 'crud.php';
        $obj1 = new crud();
        $output = $obj1 -> displayregForm();
        ?>
    <tr>
        <?php
        while($row = mysqli_fetch_assoc($output))
        {
        ?>
        <td><?php echo $row['Name'] ?></td>
        <td><?php echo $row['Contact'] ?></td>
        <td><?php echo $row['Email'] ?></td>
        <td><?php echo $row['gender']?></td>
        <td><?php echo $row['lang']?></td>
        <td><?php echo $row['Username'] ?></td>
        <td><?php echo $row['Password'] ?></td>
        <td><button><a href="deleteRegForm.php ?R_ID= <?php echo $row['R_ID']?>">Delete</a></button></td>
        <td><button><a href="update_reg_form.php ?U_ID= <?php echo $row['R_ID']?>">Update</a></button></td>
        
    </tr>
    <?php } ?>
</table>
    <form action="welcome.php" method="post" autocomplete="off">
        <table align="center">
            <tr id="heading">
                <th colspan="2" align="center"><marquee direction="right">Login Form</marquee></th>
            </tr>
            <tr>
                <td><label for="un">Username</label></td>
                <td><input type="text" name="un" id="un" placeholder="Enter Username"  required></td>
            </tr>
            <tr>
                <td><label for="pwd">Password</label></td>
                <td><input type="password" name="pwd" id="pwd" placeholder="Enter Password" required></td>
            </tr>
            <tr id="bottom">
                <td colspan="2" align="center"><button type="submit" name="login">Login</button></td>
            </tr>
        </table>
    </form>
</body>
</html>
<?php
if(isset($_GET['flag']))
{
    $flag = $_GET['flag'];
    if($flag==0)
    {
        echo "Incorrect username or password."."<br>";
        echo "Data not matched";
    }   
}

?>
