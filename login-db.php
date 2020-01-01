<?php
$con = require_once ("connection.php");
$email=$_POST["email"];
$password=$_POST["password"];

$query="select * from user where email='".$email."' and password='".$password."'";
$result=mysqli_query($con,$query);
if($result){
	echo "Query Run Succefully";
    $count=mysqli_num_rows($result);
    if($count>0){
       echo"row Succfully";
       if(isset($_POST["remember"])){
           setcookie('email',$email,time()+60+60+7);
           setcookie('password',$password,time()+60+60+7);
	   }
       header("location:index.html");
    }
    else{
	   echo"incorrect email or Password";
    }
}
else{
	echo "Error".mysqli_error($con);
}

?>
