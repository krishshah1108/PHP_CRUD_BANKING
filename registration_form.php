<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form | K11</title>
    <link rel="stylesheet" href="form_style.css">
</head>
<body>
    <form action="insert_reg_form.php" method="post">
        <table align="center">
            <tr>
                <th colspan="2" id="heading">Registration Form</th>
            </tr>
            <tr>
                <td><label for="name">Name</label></td>
                <td><input type="text" name="name" id="name" placeholder="Enter Name" size="40" pattern="[A-Za-z]{1,}" title="Only characters allowed" required></td>
            </tr>
            <tr>
                <td><label for="cn">Contact Number</label></td>
                <td><input type="number" name="cn" id="cn" placeholder="Enter Contact Number" size="40" required></td>
            </tr>
            <tr>
                <td><label for="email">Email ID</label></td>
                <td><input type="email" name="email" id="email" placeholder="Enter Email ID" size="40" required></td>
            </tr>
            <tr>
                <td><label for="gender">Gender</label></td>
                <td>
                    <input type="radio" name="gender" id="gender" group="gender" value="Male">Male &nbsp;&nbsp;&nbsp;
                    <input type="radio" name="gender" id="gender" group="gender" value="Female">Female
                </td>
            </tr>
            <tr>
                <td><label for="lang">Languages Known</label></td>
                <td>
                    <input type="checkbox" name="lang[]" id="lang" value="English">English &nbsp;&nbsp;
                    <input type="checkbox" name="lang[]" id="lang" value="Hindi">Hindi &nbsp;&nbsp;
                    <input type="checkbox" name="lang[]" id="lang" value="Gujarati">Gujarati &nbsp;&nbsp;
                </td>
            </tr>
            <tr>
                <td><label for="un">Username</label></td>
                <td><input type="text" name="un" id="un" placeholder="Enter username" size="40" required></td>
            </tr>
            <tr>
                <td><label for="pwd">Password</label></td>
                <td><input type="password" name="pwd" id="pwd" placeholder="Enter Password" size="40" minlength="8" maxlength="15" required></td>
            </tr>
            <tr id="bottom">
                <td colspan="2" align="center">
                    <button type="submit" name="submit">Register</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>

