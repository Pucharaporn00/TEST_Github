<?php
    include "menu.php";
    include "connect.php";
    include "header.php";

    //user_istudio//
    $User_ID = $_POST['user_id'];
    $UserAccount = $_POST['username'];
    $Password= $_POST['password'];
    
    //user_data//
    $user_ID = $_POST['data_id'];
    $User_fname = $_POST['fname'];
    $User_lname = $_POST['lname'];
    $User_tel = $_POST['tel'];
    $User_email = $_POST['email'];
    $bd = $_POST['birthday'];

    $sql="INSERT INTO user_istudio VALUES ('','$UserAccount','$Password','user')";
    $res=$conn -> query($sql);
    $sql1="SELECT MAX(user_id) FROM user_istudio";
    $res= mysqli_query($conn,$sql1);
    $row=mysqli_fetch_assoc($res);
    $max=$row['MAX(user_id)'];

    $sql_1="INSERT INTO user_data VALUES ('$max','$User_fname','$User_lname','$User_tel','$User_email','$bd')";
    $res_1=$conn -> query($sql_1);
    if(mysqli_query($conn,$sql,$sql_1)){
        //echo "เพิ่มข้อมูลสำเร็จ";
    }else{
        //echo "ERROR" .$sql. "<br>";
        //echo "ERROR" .$sql_1. "<br>";
    }
    echo "<meta http-equiv='refresh' content='0;url=login.php'>";
?>