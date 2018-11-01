<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Create Account</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
    <center>

        <div id="header">
            <div id="content">
                <label>Create New Account</label>
            </div>
        </div>
        <div id="body">
            <div id="content">
                <form method="post">
                    <table align="center">
                        <tr>
                            <td align="center"><a href="userinfo.php">Go Back</a></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="UName" placeholder="Username" required /></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="FName" placeholder="First Name" required /></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="LName" placeholder="Last Name" required /></td>
                        </tr>
                        <tr>
                            <td><input type="password" name="Password" placeholder="Password" required /></td>
                        </tr>
                        <tr>
                            <td><input type="email" name="Email" placeholder="Email" required /></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="Contactno" placeholder="Contact No" required /></td>
                        </tr>
                        <tr>
                            <td><button type="submit" name="Save"><strong>SAVE</strong></button></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>

    </center>
</body>

</html>
<?php

$firstname="";
$lastname="";
$username="";
$password="";
$contactno="";
$email="";
$id=0;
// Create connection
$conn = mysqli_connect("localhost", "root", "", "webtech");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
    
if(isset($_POST["Save"]))
{ 
$firstname=$_POST['FName'];
$lastname=$_POST['LName'];
$username=$_POST['UName'];
$password=$_POST['Password'];
$contactno=$_POST['Contactno'];
$email=$_POST['Email'];

$sql = "INSERT INTO userinfo  VALUES ('','$firstname','$lastname','$username','$password','$contactno','$email')";

if (mysqli_query($conn, $sql)) 
{
    ?>
    <script type="text/javascript">
        alert('Data Are Created Successfully');

    </script>
    <?php
} else {
    ?>
        <script type="text/javascript">
            alert('Data Are Not inserted');

        </script>
        <?php
}

mysqli_close($conn);
}
?>
