<?php 
$con=require_once ("connection.php");

$user_id=$_GET['id'];
$query="DELETE FROM basicinfo_section1 WHERE id='$user_id'";
$result =mysqli_query($con,$query);
if($result){
    header("location:view_all_users.php");   
}else{
    echo "Error".mysqli_error($con);
    //header("location:view_report.php?error=update");
}

?>