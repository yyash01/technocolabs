<?php
session_start();
if(isset($_SESSION['user_name'])){
  header('location:./technocolabsmainpage.php');
}

?>


<?php

$conn = new mysqli('localhost','root','','campusreg (2)'); 
 if($conn->connect_error)
{
    die('connection failed of the database ...please refer to steps in the README.md :' .$conn->connect_error);
}
  
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title> Login </title>
<link rel="stylesheet" href="technologin.css" type="text/css">
</head>
<body>
<form class="loginbox" action="" method="post">  <!--self calling for checking.-->
<h1> Login </h1>	
<input type="text" placeholder="Username" name="username" id="username">
<input type="password" placeholder="Password" name="password" id="password">
<input  type="submit" class="button" name="submit" value="Sign in"><br><br>
<label class="position">Don't have an account?</label> <a href="technosignup.html"> Sign up</a>
</form>
</body>
</html>

<?php
if(isset($_POST['submit']))
{
$user=$_POST['username'];
$pwd=$_POST['password'];

    if(isset($user) && isset($pwd)) // check if password and usernae are there or not.
    {
       
        $query = "SELECT * FROM account WHERE username = '$user' && password='$pwd'";
        $data=mysqli_query($conn , $query);
        $total = mysqli_num_rows($data);  // check if a row of this password and username exists

        if($total==1)
        {
           $_SESSION['user_name']= $user;
         header('location:./technocolabsmainpage.php');  // enter path of home page.
           // echo "done";
        }
        else
        {
            echo "wrong credentials";
            
        }
    }
    }
    /*
whichever page you want to proctect or want to check if user is logged in or not ,
just copy paste below php script on top of that html page code.(outside of html)



<?php
session_start();
if(isset($_SESSION['user_name'])){
 // whatever data you want to access.
}
else{
    header("whole path to the login.html page");  // if not login then go to the login page immedieately.
}
?>
*/


?>