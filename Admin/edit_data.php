<?php
include_once 'dbconfig.php';

$sql_query="SELECT * FROM userinfo WHERE user_id=".$_GET['edit_id'];
$result_set=mysql_query($sql_query);
$fetched_row=mysql_fetch_array($result_set) or die ($sql_query."<br/><br/>".mysql_error());
if(isset($_POST['Save']))
{
 // variables for input data
$firstname = $_POST['FName'];
$lastname = $_POST['LName'];
$username = $_POST['UName'];
$password = $_POST['Password'];
$email = $_POST['Email'];
$contactno = $_POST['Contactno'];
 // variables for input data

 // sql query for update data into database
 
$query = "UPDATE userinfo SET FirstName = '".$firstname."', LastName='".$lastname."', Username ='".$username."',Password='".$password."',ContactNo='".$contactno."', Email='".$email."' WHERE user_id =".$_GET['edit_id'];
 
 // sql query execution function
if(mysql_query($query))
{
?>
   
    <script type="text/javascript">
        
        if(confirm('Data Are Updated Successfully'))
            {
                window.location.href = 'userinfo.php';
            }
       

    </script>
    <?php
 }
 else
 {
       echo $query.mysql_error();
  ?>
        <script type="text/javascript">
            alert('error occured while updating data');
          

        </script>
        <?php
 }
 // sql query execution function
}
if(isset($_POST['btn-cancel']))
{
 header("Location: userinfo.php");
}
?>
            <!DOCTYPE html>
            <html>

            <head>
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                <title>Update Account</title>
                <link rel="stylesheet" href="style.css" type="text/css" />
            </head>

            <body>
                <center>

                    <div id="header">
                        <div id="content">
                            <label>Update Account</label>
                        </div>
                    </div>

                    <div id="body">
                        <div id="content">
                            <form method="post">
                                <table align="center">
                                    <tr>
                                        <td align="center"><a href="userinfo.php">Back to UserInfo</a></td>
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
                                        <td>
                                            <button type="submit" name="Save"><strong>SAVE</strong></button>
                                            <button type="submit" name="btn-cancel"><strong>Cancel</strong></button>
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>

                </center>
            </body>

            </html>
