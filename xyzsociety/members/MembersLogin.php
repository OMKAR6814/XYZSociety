<?php
require("Connection.php");

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Members Login Panel</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
       
    </head>

    <body>
        <div class="login-form">
            <h2>MEMBERS LOGIN PANEL</h2>
            <form method="POST">
                <div class="input-field">
                    <input type="text" name="MemberName" placeholder="Member Name">
                </div>
                <div class="input-field">
                    <input type="password" name="MPassword" placeholder="Password">
                </div>
        
                <button name="signin" type="submit">Sign In</button>
            </form>


        </div>

        <?php

        if(isset($_POST['signin']))
        {
            $query="SELECT * FROM `members` WHERE `member_name`='$_POST[MemberName]' AND `member_password`='$_POST[MPassword]'";
            $result=mysqli_query($con,$query);
            if(mysqli_num_rows($result)==1)
            {
                session_start();
                $_SESSION['MemberLoginId']=$_POST['MemberName'];
                header("location: MemberPanel.php");
            }
            else
            {
                echo "<script>alert('Incorrect Password');</script>";
            }
        }

        ?>

    </body>

</html>