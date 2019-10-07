<?php
  $con=mysqli_connect('localhost','root','','abhishek');
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $name=$_POST['user'];
        $pass=$_POST['pass'];
        $sql="SELECT * FROM ayush WHERE user='$name' and pass='$pass'";
        $result= mysqli_query($con,$sql);
        $count = mysqli_num_rows($result);
     
    if($count ==1)          
    {
      
      header("location: http://localhost/Planner Pros/adminloginpage.php");
    }
        else
        {
            echo "ERROR";
            
        }
            
    }
    ?>