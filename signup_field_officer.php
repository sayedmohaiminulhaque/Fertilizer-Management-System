<?php
include("function.php");

$objcrudadmin = new crud();

if (isset($_POST['fo_submit'])) {
    $msg = $objcrudadmin->add_data($_POST);
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
    <title>Signup as Field officer</title>
</head>

<body >

    <div class="all">
 

    <div id="form" class="form1" style="border-radius:10px;">
        <div style="display: flex; justify-content:center; text-align:center">
            <h1 style="color:#F46A3B;">Sign-Up</h1>
        </div>
        <br>
        <?php
        if (isset($msg)) {
            ?>
            <h5 style="color:aliceblue; ">
                <?php  echo $msg; ?>
            </h5>
        <?php } ?> 
        
        <form action="" name="form" method="post" enctype="multipart/form-data">
            <input type="text" id="name" name="fo_name" placeholder="Name" class="form-control input-lg" size="30"> <br>

            <input type="tel" id="phone" name="fo_phone" placeholder="Phone" class="form-control input-lg" size="30"> <br>

            <input type="number" id="id" name="fo_id" placeholder="Office ID" class="form-control input-lg" size="30"> <br>

            <input type="email" id="email" name="fo_email" placeholder="Email" class="form-control input-lg" size="30"> <br>

            <input type="password" id="pass" name="fo_password" placeholder="Password:" class="form-control input-lg" size="30"><br>
            <label for="Picture" style="color:aliceblue;">Upload Your Photo</label><br>
            <input type="file" id="img" name="fo_img" class="bg-light btn"><br><br>
            <div style="display: flex; justify-content:center; text-align:center">
                <input class="btn border-light hg" type="submit" name="fo_submit" id="sub" value="Sign-Up" style=" color:#F46A3B">
            </div>

        </form>
        <br>
    </div>
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

</html>