<?php
require("Connection.php");

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Admin Login Panel</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
       
    </head>

    <body>
        <div class="login-form">
            <h2>ADMIN LOGIN PANEL</h2>
            <form method="POST">
                <div class="input-field">
                    <input type="text" name="AdminName" placeholder="Admin Name">
                </div>
                <div class="input-field">
                    <input type="password" name="Password" placeholder="Password">
                </div>
        
                <button name="signin" type="submit">Sign In</button>
            </form>


        </div>

        <?php

        if(isset($_POST['signin']))
        {
            $query="SELECT * FROM `ad` WHERE `Admin_Name`='$_POST[AdminName]' AND `Admin_Password`='$_POST[Password]'";
            $result=mysqli_query($con,$query);
            if(mysqli_num_rows($result)==1)
            {
                session_start();
                $_SESSION['AdminLoginId']=$_POST['AdminName'];
                header("location: AdminPanel.php");
            }
            else
            {
                echo "<script>alert('Incorrect Password');</script>";
            }
        }

        ?>

    </body>

</html>