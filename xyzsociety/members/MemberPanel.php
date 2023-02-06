<?php
  session_start();
  if(!isset($_SESSION['MemberLoginId']))
  {
    header("location: MembersLogin.php");
  }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script> 
        <script src='https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js'></script>

        <style>
        body{
            margin: 0px;
        }

        .header{
            font-family: poppins;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0px 60px;
            background-color: rgb(130, 119, 232);
            margin-bottom: 20px;
        }
        
        div.header button{
            background-color: #f0f0f0;
            font-size: 16px;
            font-weight: 550;
            padding: 8px 12px;
            border: 2px solid black;
            border-radius: 5px;
        }

        .table{
            text-align: center;
            margin-top: 20px;

        }
        </style>    

       

    </head>
    <style type="text/css">
        .main-section{
            margin-top:150px;
        }
    </style>
    <body>


    <div class="header">
    <h1>WELCOME TO Members PANEL - <?php echo $_SESSION['MemberLoginId']?></h1>
    <form method="POST">
    <button name="Logout">LOG OUT</button>
    </form>
    </div>

    <br><br>

    <h1>No Updates Yet!</h1>


    <?php
    if(isset($_POST['Logout']))
    {
        session_destroy();
        header("location: MembersLogin.php");
    }
    
    ?>
    </body>
</html>