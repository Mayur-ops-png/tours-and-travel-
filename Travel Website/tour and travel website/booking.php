<?php include("./includes/connection.php"); 

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete responsive tour and travel agency website design tutorial</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
    
<!-- header section starts  -->
<?php include("./includes/header.php"); ?>
<!-- header section ends -->

<section class="book" id="book" style="margin-top: 130px;">

    <h1 class="heading">
        <span>l</span>
        <span>o</span>
        <span>g</span>
        <span>i</span>
        <span>n</span>
    </h1>

    <div class="row"  style="width: 600px; margin: auto; padding-bottom: 130px;">

        <form action="" method="POST">
            <p style="color: red;"><?php include("./scripts/login-script.php"); ?></p>
            <div class="inputBox">
                <h3>Email</h3>
                <input type="email" name="email" placeholder="Enter email">
            </div>
            <div class="inputBox">
                <h3>Password</h3>
                <input type="password" name="password" placeholder="Enter password">
            </div>
            <button class="btn" name="submit">Login</button>
        </form>

    </div>

</section>

<!-- book section ends -->


<!-- footer section  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>about us</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda quas magni pariatur est accusantium voluptas enim nemo facilis sit debitis.</p>
        </div>
        <div class="box">
            <h3>branch locations</h3>
            <a href="#">india</a>
            <a href="#">USA</a>
            <a href="#">japan</a>
            <a href="#">france</a>
        </div>
        <div class="box">
            <h3>quick links</h3>
            <a href="#">home</a>
            <a href="#">book</a>
            <a href="#">packages</a>
            <a href="#">services</a>
            <a href="#">gallery</a>
            <a href="#">review</a>
            <a href="#">contact</a>
        </div>
        <div class="box">
            <h3>follow us</h3>
            <a href="#">facebook</a>
            <a href="#">instagram</a>
            <a href="#">twitter</a>
            <a href="#">linkedin</a>
        </div>

    </div>

    <h1 class="credit"> created by <span> mr. web designer </span> | all rights reserved! </h1>

</section>
















<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="script.js"></script>

</body>
</html>