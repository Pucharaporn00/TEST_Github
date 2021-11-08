<?php
    session_start();
    include_once "connect.php";
    $id=$_SESSION['user_id'];
    $date=$_POST['orders_date'];
    $status=$_POST['status'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $tel=$_POST['tel'];
    $sum=$_POST['sum_prece'];
    
    $sql1="INSERT INTO orders VALUES ('','".$id."',CURRENT_TIMESTAMP,'รอการชำระเงิน','".$fname."','".$lname."','".$tel."','".$sum."')";
    $query1=mysqli_query($conn,$sql1);
    $sql2="SELECT MAX(orders_id) AS orders_id FROM orders WHERE user_id='".$id."'";
    $query2=mysqli_query($conn,$sql2);
    $row=mysqli_fetch_array($query2);
    $orders_id=$row['orders_id'];

    foreach($_SESSION['cart'] as $p_id=>$qty)
    {
        $sql3="SELECT * FROM product_istudio WHERE product_id='".$p_id."'";
        $query3=mysqli_query($conn,$sql3);
        $row3=mysqli_fetch_array($query3);
        $price = $row3['price'];
        $total=$row3['price']*$qty;


        $sql4="INSERT INTO order_detail VALUES('','".$orders_id."','".$p_id."','".$qty."','".$total."')";
        $query4=mysqli_query($conn,$sql4);
        // echo $sql4;



        $sql6="SELECT * FROM product_istudio WHERE product_id='".$p_id."'";
        $query6=mysqli_query($conn,$sql6);
        $row6=mysqli_fetch_array($query6);



//echo "$orders_id";
    }

    if($query1 && $query4){
        $msg="สั่งซื้อสินค้าเรียบร้อยแล้ว เมื่อท่านชำระเงินแล้วกรุณาแจ้งการชำระ และหลักฐานการชำระเงินมายัง Pucharaporn0507@gmail.com";
        foreach($_SESSION['cart'] as $p_id)
        {
            unset($_SESSION['cart']);
            echo "<meta http-equiv= 'refresh' content='0;url=index.php'>";
        }
    }
    else{
        $msg="สั่งซื้อไม่สำเร็จ โปรดติดต่อเจ้าหน้าที่";
    }
    //echo "$sql1,$sql2,$sql3,$sql4,$sql6";
?>
<script type="text/javascript">
alert("<?php echo $msg;?>");
window.location='index.php';
</script>