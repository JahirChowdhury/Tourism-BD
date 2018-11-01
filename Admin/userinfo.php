<?php
include_once 'dbconfig.php';
?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>User Info</title>
        <link rel="stylesheet" href="style.css" type="text/css" />
        <script type="text/javascript">
        function userinfo()
        {
            window.location = "userinfo.php";
        }
        function edit_id(id)
        {
            if (confirm('Sure to edit ?')) {
                window.location.href = 'edit_data.php?edit_id=' + id;
            }
        }

        function delete_id(id) {
            if (confirm('Sure to Delete ?'))
            {
                window.location.href = 'userinfo.php?delete_id=' + id;
            }
        }
        function openNav() {
            document.getElementById("mySidenav").style.width = "150px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }


    </script>
    </head>

    <body>
       
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#" onclick="userinfo()">UserInfo</a>
        <a href="queries.php">Queries</a>
    </div>

    <div id="header">
                <div id="content">
                    <label>Hello ADMIN!!</label>
                    <a href="admin_login.php" style="position: relative; left: 420px; color: black; top:5px;"><img src="Logout.png" style="height:35px; width:35px"></a>
                    <span style="font-size:30px;cursor:pointer;position:relative;right:900px " onclick="openNav() " >&#9776;</span>
                    
                </div>
            </div>
    
        <center>
            <form method="get">
                <div id="body">
                    <div id="content">
                        <table align="center">
                            <tr>
                                <th colspan="6"><a href="add_data.php">Add data here.</a></th>
                            </tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Contact No</th>
                            <th>Email</th>
                            <th colspan="2">Operations</th>
                            </tr>
                            <?php
	$sql_query="SELECT * FROM userinfo";
	$result_set=mysql_query($sql_query);
	if(mysql_num_rows($result_set)>0)
	{
        while($row=mysql_fetch_row($result_set))
		{
		?>
                                <tr>
                                    <td align="center">
                                        <?php echo $row[1]; ?>
                                    </td>
                                    <td align="center">
                                        <?php echo $row[2]; ?>
                                    </td>
                                    <td align="center">
                                        <?php echo $row[3]; ?>
                                    </td>
                                    <td align="center">
                                        <?php echo $row[4]; ?>
                                    </td>
                                    <td align="center">
                                        <?php echo $row[5]; ?>
                                    </td>
                                    <td align="center">
                                        <?php echo $row[6]; ?>
                                    </td>

                                    <td align="center"><a href="javascript:edit_id('<?php echo $row[0]; ?>')"><img src="b_edit.png" align="EDIT" /></a></td>
                                    <td align="center"><a href="javascript:delete_id('<?php echo $row[0]; ?>')"><img src="b_drop.png" align="DELETE" /></a></td>
                                </tr>
                                <?php
		}
	}
	else
	{
		?>
                                <tr>
                                    <td colspan="6">No Data Found !</td>
                                </tr>
                                <?php
	}
	?>
                        </table>
                    </div>
                </div>
        </center>
    </body>
    </form>

    </html>
<?php
if(isset($_GET['delete_id']))
{
	$sql_query="DELETE FROM userinfo WHERE user_id=".$_GET['delete_id'];
	mysql_query($sql_query);
	header("Location: $_SERVER[PHP_SELF]");
}