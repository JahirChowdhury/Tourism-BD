<?php
include_once 'dbconfig.php';
session_start();
?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>User Queries</title>
        <link rel="stylesheet" href="style.css" type="text/css" />
        <script type="text/javascript">
        function userinfo()
        {
            window.location = "userinfo.php";
        }
        function reply_id(id)
        {
            if (confirm('Sure to Reply ?')) {
                window.location.href = 'reply_data.php?reply_id=' + id;
                
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
            <form action="reply_data.php" method="post">
                <div id="body">
                    <div id="content">
                       
                        <table align="center">
                           
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Comment</th>
                            <th colspan="1">Operations</th>
                            </tr>
                        
                            <?php
	$sql_query="SELECT * FROM queries";
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
                                        <?php echo $row[3];
                                        $_SESSION['email']= $row[3];
                                        ?>
                                    </td>
                                    <td align="center">
                                        <?php echo $row[4]; 
                                        $_SESSION['comment']=$row[4];
                                        ?>
                                    </td>

                                    <td align="center"><a href="javascript:reply_id('<?php echo $row[0]; ?>')"><img src="reply.png" align="REPLY" /></a></td>
                                    
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