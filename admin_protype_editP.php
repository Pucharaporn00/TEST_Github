<?php
    include "connect.php";
    date_default_timezone_set("Asia/bangkok");
    $date = date('Ymdhis');
    //category
    $pro_id=$_POST['category_id'];
    $pro_name=$_POST['category_name'];
    
    

    
    $sql="UPDATE category SET category_name='".$pro_name."' WHERE category_id ='".$pro_id."';";
    $res = $conn -> query($sql);
    if(mysqli_query($conn,$res)){
        echo "เพิ่มข้อมูลสำเร็จ";
    }else{
        echo "ERROR" .$sql. "<br>";
    }   
        
            

    //echo $sql;
   
    echo "<meta http-equiv='refresh' content='0;url=admin_protype_list.php'>";
?>