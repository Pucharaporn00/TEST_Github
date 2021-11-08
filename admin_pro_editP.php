<?php
    include "connect.php";
    date_default_timezone_set("Asia/bangkok");
    $date = date('Ymdhis');
    //product
    $pro_id=$_POST['product_id'];
    $pro_name=$_POST['product_name'];
    $rom=$_POST['rom'];
    $color=$_POST['color'];
    $price=$_POST['price'];
    $gen=$_POST['generation'];
    $cat=$_POST['category_id'];
    $img=$_FILES['product_img'];
    

    $datename = $date.$img['name'];
    if(move_uploaded_file($img['tmp_name'], "img/" .$date.$img['name'])){

    } 
   if ($img['name'] != '') {
    $sql="UPDATE product_istudio
    SET product_name='".$pro_name."',rom='".$rom."',color='".$color."',price='".$price."',
    generation='".$gen."',category_id='".$cat."',product_img='".$datename."'
    WHERE product_id ='".$pro_id."';";
   }else{
    $sql="UPDATE product_istudio
    SET product_name='".$pro_name."',rom='".$rom."',color='".$color."',price='".$price."',
    generation='".$gen."',category_id='".$cat."'
    WHERE product_id ='".$pro_id."';";
   }
    $res = $conn -> query($sql);
    if(mysqli_query($conn,$res)){
        echo "เพิ่มข้อมูลสำเร็จ";
    }else{
        echo "ERROR" .$sql. "<br>";
    }   
        
            

    //echo $sql;
   
    echo "<meta http-equiv= 'refresh' content='0;url=admin_pro_list.php'>";
?>