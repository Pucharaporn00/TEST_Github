<?php

session_start();
include "connect.php";
include "menu.php";
include "header.php";


$p_id=$_REQUEST['product_id'];
$act=$_REQUEST['act'];
$user = $_SESSION['user_id'];
//echo $p_id;
//echo $act;


if ($act=='add'&& ! empty($p_id)){
    if(isset($_SESSION['cart'][$p_id])){
        $_SESSION['cart'][$p_id]++;
    }else{
        $_SESSION['cart'][$p_id]=1;//เพิ่มการสั่งซื้อ
    }
}
?>
<body>
    
<div style="margin-top:4%">
<form name="frmcart" method="POST" action="confirmP.php" >
    <div class="container"><br>
    <h2 align="center">ยืนยันการสั่งซื้อ</h2><br>
        <table class="table">
            <thead>
                <tr>
                    <th> สินค้า <?php echo $p_id;?></th>
                    <th> ราคา </th>
                    <th> จำนวน </th>
                    <th> รวม(บาท) </th>
                </tr>
            <thead>
            <tbody>
            <?php 
                $total = 0;
                if(!empty($_SESSION['cart'])){
                    foreach($_SESSION['cart'] as $p_id => $qty){
                        $sql = "SELECT * FROM product_istudio WHERE product_id='$p_id'";
                        //echo $sql;
                        $query = mysqli_query($conn,$sql);
                        $row = mysqli_fetch_assoc($query);
                        $sum = $row['price'] * $qty;
                        $total += $sum;
            ?>
                        <tr>
                            <td><?php echo $row['product_name'];?></td>
                            <td><?php echo number_format($row['price']);?></td>
                            <td><input type="text" class="" name="<?php echo "amount[$p_id]";?>" value="<?php echo $qty;?>" size="2" readonly></td>
                            <td><?php echo number_format($sum,2)?></td>
                        </tr>   
            <?php }?>
                <tr>
                    <td colspan="3" align="center"><b>ราคารวม</b></td>
                    <td><?php echo number_format($total,2)?></td>
                </tr>
            <?php }?>
            </tbody>
        </table>
    </div>
<?php 

$sqli = "SELECT * FROM user_data WHERE data_id='$user'";
$query1 = mysqli_query($conn,$sqli);
$row1 = mysqli_fetch_assoc($query1);
//echo $sqli;
?>
<br><br>
<div class="container" style="margin-top:-1%">


    <h3 class="text-light" align="center">ข้อมูลผู้สั่งซื้อ</h3>

    <div class="col-sm-6" style="margin-left: 25%;">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-4"><br>
                ชื่อ :<input type="text" name="fname" class="form-control"  value="<?php echo $row1['fname'];?>"><br>
                นามสกุล :<input type="text" name="lname" class="form-control" value="<?php echo $row1['lname'];?>"><br>
            </div>
            <div class="col-4"><br>
                เบอร์โทรศัพท์ :<input type="text" name="tel" class="form-control" value="<?php echo $row1['tel'];?>"><br>
                email :<input type="text" name="email" class="form-control" value="<?php echo $row1['email'];?>"><br>
            </div>
            <input type="hidden" name="sum" value="<?php echo number_format($total,2);?>">
        </div>
    <tr >
        <td>
            <button class="btn btn-success"> ยืนยันการสั่งซื้อ </button>
            <button class="btn btn-warning"> ยกเลิกการสั่งซื้อ </button>
            
        </td>
    </tr>
    </div>
</form>

</div><br><br>

</div>
























</body>