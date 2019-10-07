<?php include'C:\xampp\htdocs\Planner Pros\inc\header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Planner Pros</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/gijgo.min.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/all.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>User Registration</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->
    <head>
    <meta charset="UTF-8">
    <title>User Registration</title>
    <style>
     .signupbody
        {
            padding-left: 30%;
            display: flex;
            width: 50% 50%;
            padding-bottom: 2%;
        }
        .formbody
        {
            padding-left: 5%;
        }
    </style>
</head>
    <body>
        
    <br><br>
<div class="signupbody">
   <img src="img/icon/images.png">
   
   <div class="formbody">
   <h1>User Registration</h1>
        <form action="usersignupsuccess.php" method="POST">
        Enter Username: <br>
        <input type="text" name="user" id="user">
    <br>
       Enter Email: <br>
        <input type="email" name="email" id="email">
    <br>
       Enter Password: <br>
       <input type="password" name="pass" id="pass">
       <br><br>
       <input type="submit" name="SignUp" value="SignUp">
       <br>        
    </form>
    </div>
    
    </div>
    </body>
    <?php include 'C:\xampp\htdocs\Planner Pros\inc\footer.php'; ?>