<?php
    include "connect.php";
    //product
    $pro_id=$_POST['category_id'];
    $pro_name=$_POST['category_name'];
    

    $sql="INSERT INTO category VALUES ('$pro_id','$pro_name')";
    $res=$conn -> query($sql);
   
    //echo $sql;
    if(mysqli_query($conn,$res)){
        echo "เพิ่มข้อมูลสำเร็จ";
    }else{
        echo "ERROR" .$sql. "<br>";
    }
    echo "<meta http-equiv='refresh' content='0;url=admin_protype_list.php'>";
?>