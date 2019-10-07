 <?php
  $con=mysqli_connect('localhost','root','','abhishek2');

 if($_SERVER["REQUEST_METHOD"] == "POST")
 {
    //username and password sent from form
     $email = $_POST['email'];
     $pass = $_POST['pass'];
     
     
     $sql= "SELECT * FROM userregistrationdata WHERE email='$email' and pass='$pass'";

     $result = mysqli_query($con,$sql);
     $count = mysqli_num_rows($result);
   
     
     if($count!=0)
     {
              
              header("location: http://localhost/Planner Pros/index.php");
     }
     else
     {
         echo"Wrong!! Go back to login page";
     }
 }
 ?>