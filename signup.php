<html>
<body>

<?php
 $pass  = $_POST["password"];
 $user = ucwords( $_POST["uname"]);
 $email = $_POST["email"];
 
 $connection =  mysqli_connect("localhost","root","Zain","employees");
 if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

else {
    echo "yes"."<br>";}

$sql = "SELECT * FROM users where UserName='$user'";   
$result = mysqli_query($connection,$sql); 



if(mysqli_num_rows($result) > 0) 
{
    echo "Username already exists";
} 
  
else {
    
$addUser = "Insert Into users(UserName,passwd,email) values('$user','$pass','$email')";   
$result = mysqli_query($connection,$addUser);

if($result){
header("Location: http://localhost:81/website/Main.php?name=$user" );;
}
    
}


?>



</body>
</html>