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
<style type="text/css">
    th, td {
  padding: 15px 35px;
  text-align: center;
}

.table{
    flex:1 1 40rem;
  padding:2rem;
  box-shadow: 0 1rem 2rem rgba(0,0,0,.1);
  border-radius: .5rem;
}


.table tr:nth-child(even){background-color: #f2f2f2}
</style>
</head>
<body>
    
<!-- header section starts  -->

<header>

    <div id="menu-bar" class="fas fa-bars"></div>

    <a href="admin.php" class="logo"><span>T</span>ravel</a>

        <nav class="navbar">
   <a href="admin.php">Dashboard</a>
        <?php if(isset($_SESSION['name'])){
            echo '<a href="./scripts/logout-script.php">Logout</a>';
        }else{
             echo '<a href="login.php">Login</a>';
        } ?>
        
    </nav>

    <div class="icons">
        <i class="fas fa-search" id="search-btn" style="display: none;"></i>
        <?php if(isset($_SESSION['name'])){
            echo ' <i style="font-size: 20px;">'.$_SESSION['name'].'</i>';
        }?>
       
    </div>

    <form action="" class="search-bar-container">
        <input type="search" id="search-bar" placeholder="search here...">
        <label for="search-bar" class="fas fa-search"></label>
    </form>

</header>

<!-- header section ends -->


<section class="book" id="book" style="margin-top: 130px;">

    <h1 class="heading">
        <span>w</span>
        <span>e</span>
        <span>l</span>
        <span>c</span>
        <span>o</span>
        <span>m</span>
        <span>e</span>
        <span class="space"></span>
        <span>a</span>
        <span>d</span>
        <span>m</span>
        <span>i</span>
        <span>n</span>
    
    </h1>

    <div class="table"  style="width: 90%; margin: auto; margin-bottom: 130px;">
         <div style="overflow-x:auto; font-size: 18px;" >
  <table style="margin: auto;">
    <tr>
      <th>#</th>
       <th>Booked By</th>
      <th>Destination</th>
      <th>Travel Date</th>
      <th>Paid</th>
      <th>Peoples</th>
      <th>Mobile No</th>
    </tr>
    <?php 
      $selectquery = "select * from booking";
      $query = mysqli_query($con, $selectquery);
    $i = 0;
while($p_res = mysqli_fetch_array($query)){
    $pid = $p_res['packageid'];
     $p = "select * from package where id = $pid";
     $pquery = mysqli_query($con, $p);
     $pres = mysqli_fetch_array($pquery);
        $i = $i+1;
?>
<tr>
      <td><?php echo $i ?></td>
       <td><?php echo $p_res['name'] ?></td>
      <td><?php echo $pres['name'] ?></td>
      <td><?php echo $p_res['date'] ?></td>
      <td>&#8377;<?php echo $pres['price'] ?></td>
      <td><?php echo $p_res['child'] ?> Child, <?php echo $p_res['adults'] ?> Adult</td>
       <td><?php echo $p_res['mob'] ?></td>
      
    </tr>


<?php 

}
    ?>
    

  </table>
</div>
       

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