<?php
include_once 'dbconfig.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Login</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
    <center>

        <div id="header">
            <div id="content">
                <label>Admin Login</label>
            </div>
        </div>
        <div id="body">
            <div id="content">
                <form action="admin_check.php" method="post">
                    <table align="center">
                        <tr>
                            <td><input type="text" name="UName" placeholder="Username" required /></td>
                        </tr>
                        <tr>
                            <td><input type="password" name="Password" placeholder="Password" required /></td>
                        </tr>
                        <tr>
                            <td><button type="submit" name="Login" style="position:relative; left: 270px; height:40px" ><strong>Login</strong></button></td>
                        </tr>
                        <tr>
                        </tr>
                    </table>
                </form>
            </div>
        </div>

    </center>
</body>

</html>
?>
