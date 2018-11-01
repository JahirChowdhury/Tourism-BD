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

    </script>
    <style>

        

    </style>

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
    

    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "170px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }

    </script>

</body>

</html>
