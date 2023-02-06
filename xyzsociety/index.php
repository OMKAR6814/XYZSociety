<?php


if(isset($_POST['fno'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";



    // Collect post variables
    $fno = $_POST['fno'];
    $mno = $_POST['mno'];
    $amt = $_POST['amt'];

   
    $sql = "INSERT INTO `society`.`entries` (`flat_no`, `number`, `amount`, `date_&_time`) VALUES ('$fno', '$mno', '$amt', current_timestamp())" ;

    
    

    if (mysqli_query($con, $sql)) {

  
    session_start();
    {
    $_SESSION['Amt']=$amt;


    header("location: pgRedirect.php");
    }
    header("Location: pgRedirect.php");


        
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }

    
    $con->close();
}

?>
<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>XYZ Society</title>

   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#712cf9">


    <style>
      input{
        margin-bottom: 10px;
      }

      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .form-signin {
    max-width: 430px;
    padding: 15px;
}
.form-floating {
    position: relative;
}
.form-floating>.form-control, .form-floating>.form-control-plaintext {
    padding: 1rem 0.75rem;
    
}
.form-floating>.form-control, .form-floating>.form-control-plaintext, .form-floating>.form-select {
    height: calc(3.5rem + 2px);
    line-height: 1.25;
}

@media all and (max-width: 1024px)
        {

          .col-8,.col-4
          {
            width:100%;
            height: auto;
            margin: auto;
          }
          
        }

   footer {
    width: 100%;
    background-color: rgb(132, 132, 132);
    color: white;
    text-align: center;
    }

    </style>

    
 
    
  </head>
  <body class="text-center">
    <div class="row">
      <div class="col-8">
        <h1 class="mb-4"  alt="" width="72" height="57" style="margin: auto; text-align: center;">XYZ Society</h1><hr>
        <img src="https://5.imimg.com/data5/YK/TY/VK/SELLER-3679784/real-estate-service-1000x1000.jpg" style="width: 100%;">
        <form action="members/MembersLogin.php">
          
            <button class="w-100px btn btn-lg btn-primary" style="margin-top: 10px; margin-bottom: 10px;">Updates</button>
          
        </form>
      </div>
      <div class="col-4" style="background-color: black;">
        <main class="form-signin w-100 m-auto">

          <form method="post">
            
            <h2 class="h3 mb-3 fw-normal" style="color: white;">Fill Information</h2>
        
            <div class="form-floating">
              <input type="text" name="fno" class="form-control" id="floatingInput" placeholder="Flat Number" required>
              <label for="floatingInput">Flat Number</label>
            </div>
            <div class="form-floating">
              <input type="text" name="mno" class="form-control" id="floatingPassword" placeholder="number" required>
              <label for="floatingPassword">Mobile Nunber</label>
            </div>
            <div class="form-floating">
              <input type="text" name="amt" class="form-control" id="floatingPassword" placeholder="Amount" required>
              <label for="floatingPassword">Amount</label>
            </div>

            <button  class="w-100 btn btn-lg btn-primary" type="submit">Pay</button>
            
          </form>
        </main>
      </div>
    </div>
    
    <!-- Footer -->
<footer class="page-footer font-small ">
  <div class="footer-copyright text-center py-3">Management Under:
    <a href=""> Salunkhe & Associates</a>
  </div>
</footer>
<!-- Footer -->



    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</body></html>