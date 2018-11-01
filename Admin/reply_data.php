<?php
session_start();
$email = $_SESSION['email'];
$comment = $_SESSION['comment'];
?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Query View</title>
        <link rel="stylesheet" href="style.css" type="text/css" />
        <script>
            function replyFunction() {
                if (confirm('The message has been replied')) {
                    window.location.href = 'userinfo.php';
                }
            }

        </script>
    </head>

    <body>
        <center>

            <div id="header">
                <div id="content">
                    <label>Query View</label>
                </div>
            </div>
            <div id="body">
                <div id="content">
                    <form method="post">
                        <table align="center">
                            <tr>
                                <th colspan="2"><a href="queries.php">Back to Queries</a></th>
                            </tr>
                            <tr>
                                <td>Email:
                                    <?php echo $email ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Comment:
                                    <?php echo $comment ?>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="text" name="Reply" placeholder="Your Reply" </td>
                            </tr>
                            <tr>
                                <td><input type="button" name="Reply Back" value="REPLY" onclick="replyFunction()" style="width:80px;"></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>

        </center>
    </body>

    </html>
