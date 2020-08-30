<html>
<body> 
<?php
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$username=$_POST['username'];  // passing variables from form.
$password=$_POST['password'];

// 'campusreg' is name of the whole database... sorry for the name part.
// table in which this data is known as 'account'.
$conn= new mysqli('localhost','root','','campusreg (2)'); // name of database on my pc is campusreg // change by jeet patel....

if($conn->connect_error)
{
    die('connection failed of the database ...please refer to steps in the README.md :' .$conn->connect_error);
}
else{
    
    $ent=$conn->prepare("INSERT INTO account(firstname,lastname,email,username,password)VALUES(?,?,?,?,?)");
    $ent->bind_param("sssss",$firstname,$lastname,$email,$username,$password);
    $ent->execute();
    echo"You Have Succesfully Registered To Technocolabs.We Welcome You To Our Humble Abode.May Our Journey Will be Long And Prosperous";

    $ent->close();
    $conn->close();
    header("location:./technologin.php");
}
?>
</body>
</html>