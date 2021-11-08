<?php 
session_start();
    include "connect.php";
    include "menu.php";
    include "header.php";

$p_id=$_REQUEST['product_id'];
$act=$_REQUEST['act'];

//echo $p_id;
//echo $act;


if ($act=='add'&& ! empty($p_id)){
    if(isset($_SESSION['cart'][$p_id])){
        $_SESSION['cart'][$p_id]++;
    }else{
        $_SESSION['cart'][$p_id]=1;//เพิ่มการสั่งซื้อ
    }
}
if ($act=='remove' &&! empty($p_id)) {
    unset($_SESSION['cart'][$p_id]); //ยกเลิกการสั่งซื้อ
}
if ($act=="update") {
    $amount = $_POST['amount'];
    foreach($amount as $p_id => $amount){
        $_SESSION['cart'][$p_id]=$amount;   
    }//ยืนยันการสั่งซื้อ
}
?>

  <body>
                <div class="col-md-8" style="margin-left: 17%;">
                    <div class="product-content-right">
                        <div class="woocommerce">
                            <form name="frmcart" method="post" action="confirm.php">
                                <table cellspacing="0" class="shop_table cart">
                                    <thead>
                                        <tr>
                                            <th >ชื่อสินค้า</th>
                                            <th > ราคา </th>
                                            <th >จำนวน</th>
                                            <th >รวม(บาท)</th>
                                            <th >ลบ</th>
                                        </tr>
                                    </thead>
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
                                            <td>
                                                <?php echo $row['product_name'];?>
                                            </td>

                                            <td>
                                                <?php echo number_format($row['price']);?>
                                            </td>

                                            <td>
                                                <input type="text" class="" name="<?php echo "amount[$p_id]";?>" value="<?php echo $qty;?>" size="2"> 
                                                <input type="text" class="" name="product_id" value="<?php echo $row['product_id'];?>" hidden size="2"> 
                                            </td>

                                            <td>
                                                <?php echo number_format($sum,2)?>
                                            </td>

                                            <td>
                                                <a href="cart.php?product_id=<?php echo $p_id;?>&act=remove" class="btn btn-danger">ลบ</a> 
                                            </td>
                                        </tr>
                                    <?php }?>
                                            <tr>
                                                <td colspan="3" align="center"><b>ราคารวม</b></td>
                                                <td><?php echo number_format($total,2)?></td>
                                            </tr>
                                    <?php }?>
                                        <tr>
                                            <td class="actions" colspan="6">
                                                <input type="submit" class="btn btn-warning" name="button" value="ปรับปรุง">
                                                <input type="button" class="btn btn-success" name="submit2" value="สั่งซื้อ" onclick="window.location='confirm.php'" />
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </form> 
                        </div>                        
                    </div>                    
                </div>
            </div>
        </div>
    </div> 
</body>