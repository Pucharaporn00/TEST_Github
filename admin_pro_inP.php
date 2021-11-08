<?php
    include "connect.php";
    //product
    $pro_id=$_POST['product_id'];
    $pro_name=$_POST['product_name'];
    $rom=$_POST['rom'];
    $color=$_POST['color'];
    $price=$_POST['price'];
    $gen=$_POST['generation'];
    $cat=$_POST['category_id'];
    $img=$_POST['product_img'];
    

    $sql="INSERT INTO product_istudio VALUES ('','$pro_name','$rom','$color','$price','$gen','$cat','$img')";
    $res=$conn -> query($sql);
   
    //echo $sql;
    if(mysqli_query($conn,$res)){
        echo "เพิ่มข้อมูลสำเร็จ";
    }else{
        echo "ERROR" .$sql. "<br>";
    }
    echo "<meta http-equiv='refresh' content='0;url=admin_pro_list.php'>";
?>