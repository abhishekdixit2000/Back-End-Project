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
                            <h2>Admin Login</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->
<head>
    <meta charset="UTF-8">
    <title>Admin Login Page</title>
    <style>
     .loginbody
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
<div class="loginbody">
   <img src="img/icon/admin.jpg">
   
   <div class="formbody">
   <h1>Admin Login Page</h1>
        <form action="success.php" method="POST">
        Username: <br>
        <input type="text" name="user" id="user">
    <br>
       Password: <br>
       <input type="password" name="pass" id="pass">
       <br>
       <input type="submit" name="Login" value="Login">
       <br>        
    </form>
    </div>
    
    </div>
</body>
<?php include 'C:\xampp\htdocs\Planner Pros\inc\footer.php'; ?>