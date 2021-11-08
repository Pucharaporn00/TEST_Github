<?php 
include "connect.php";
session_start();
$user = $_POST['username'];
$pass = $_POST['password'];
$sql = "select * from user_istudio where username = '$user' and password = '$pass'";
$query = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($query);
if (!$row)
{
    echo "Error";
}
else
{
    $_SESSION['user_id'] = $row['user_id'];
    $_SESSION['status'] = $row['status'];
    if ($row['status']=='addmin')
    {
        header("location:admin_pro_list.php");
    }
    else if ($row['status']=='user') 
    {
        header("location:index.php");
    }else{
        header("location:index.php");
    }
    
}
?>