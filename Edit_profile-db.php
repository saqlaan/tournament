<?php
$con=require_once ("connection.php");
$email=$_POST["email"];
$password=$_POST["password"];
$username=$_POST["USER_NAME"];

$query="update user set email = '".$email."', password = '".$password."' where name='".$username."'";
$result=mysqli_query($con,$query);
if($result){
	echo "Query Run Succefully";
    header("location:index.html");
}
else{
	echo "Error".mysqli_error($con);
}

?>
