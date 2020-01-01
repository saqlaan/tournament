<?php
return mysqli_connect("localhost","root","","cam");
if($con==false){
	die("Connot connect".mysqli_connect_error());
}
?>