<?php 
    include "menu.php";
    include "header.php";
    include "connect.php";
    $category_ID = $_GET['category_id'];
    

    //echo $category_ID;
    $sql = "select * from category where category_id = $category_ID; ";
    $query = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($query);
?>


<div class="container">
    <form action="admin_protype_editP.php" method="POST">
        <div>
            <label>รหัสสินค้า:</label>
            <input type="text" class="form-control" name="category_id" value="<?php echo $row['category_id'];?>" readonly>
        </div><br>
        <div>
            <label>ชื่อสินค้า:</label>
            <input type="text" class="form-control" name="category_name" value="<?php echo $row['category_name'];?>">
        </div><br>
        <button type="submit">ตกลง</button>
    </form>
</div><br>
<br>
<br>
<?php include "footer.php"; ?>