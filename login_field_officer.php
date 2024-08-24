<?php
include("function.php");
$objcrudadmin = new crud();

if (isset($_POST['fo_l_submit'])) {
    $msg1 = $objcrudadmin->fo_login($_POST);
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Login Page</title>
</head>

<body class="all">

    <div id="form" class="form1 shadow" style="border-radius:10px;">
        <div style="display: flex; justify-content:center; text-align:center">
            <h1 style="color:#F46A3B;">Login</h1>
        </div>
        <br>
        <?php
        if(isset($msg1))
        {
            if ($msg1 == 1) {
            header("location:field_officer_home.php");
        }
         else {
            ?>
             <span style="color:#F46A3B">Wrong email or Password</span><br>
             <?php
        
        }
        }
        

        ?>
        <form action="" name="form" method="post">
            <input type="email" id="email" name="fo_l_email" placeholder="Email" class="form-control input-lg" size="30"> <br>

            <input type="password" id="pass" name="fo_l_password" placeholder="Password:" class="form-control input-lg" size="30"><br>
            <div style="display: flex; justify-content:center; text-align:center">
                <input class="btn border-light hg" type="submit" name="fo_l_submit" id="sub" value="Login" style=" color:#F46A3B">
            </div>

        </form>


    </div>





    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
</body>

</html>s