<?php 
    include "menu.php";
    include "header.php";
    include "connect.php";
    $product_ID = $_GET['product_id'];
    

    //echo $product_ID;
    $sql = "select * from product_istudio where product_id = $product_ID; ";
    $query = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($query);
?>


<div class="container">
    <form action="admin_pro_editP.php" method="POST" enctype="multipart/form-data">
        <div>
            <label>รหัสสินค้า:</label>
            <input type="text" class="form-control" name="product_id" value="<?php echo $row['product_id'];?>" readonly>
        </div><br>
        <div>
            <label>ชื่อสินค้า:</label>
            <input type="text" class="form-control" name="product_name" value="<?php echo $row['product_name'];?>">
        </div><br>
        <div>
            <label>ความจุ:</label>
            <input type="text" class="form-control" name="rom" value="<?php echo $row['rom'];?>">
        </div><br>
        <div>
            <label>สี:</label>
            <input type="text" class="form-control" name="color" value="<?php echo $row['color'];?>">
        </div><br>
        <div>
            <label>ราคา:</label>
            <input type="text" class="form-control" name="price" value="<?php echo $row['price'];?>">
        </div><br>
        <div>
            <label>รุ่นโทรศัพท์:</label>
            <input type="text" class="form-control" name="generation" value="<?php echo $row['generation'];?>">
        </div><br>
        <div>
            <label>รหัสประเภท:</label>
            <input type="text" class="form-control" name="category_id" value="<?php echo $row['category_id'];?>">
        </div><br>
        <div>
            <label>รูปสินค้า:</label>
            <input type="file" class="form-control" name="product_img" value="<?php echo $row['product_img'];?>">
        </div><br>
        <button type="submit">ตกลง</button>
    </form>
</div><br>
<br>
<br>
<?php include "footer.php"; ?>