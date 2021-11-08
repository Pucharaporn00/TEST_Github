<?php 
include "menu.php";
include "header.php";?>
<div class="container">
    <form action="admin_pro_inP.php" method="POST" >
        <div>
            <label>ชื่อสินค้า:</label>
            <input type="text" class="form-control" name="product_name">
        </div><br>
        <div>
            <label>ความจุ:</label>
            <input type="text" class="form-control" name="rom">
        </div><br>
        <div>
            <label>สี:</label>
            <input type="text" class="form-control" name="color">
        </div><br>
        <div>
            <label>ราคา:</label>
            <input type="text" class="form-control" name="price">
        </div><br>
        <div>
            <label>รุ่น:</label>
            <input type="text" class="form-control" name="generation">
        </div><br>
        <div>
        <?php
              $sql = "SELECT * FROM category ";
              $res = $conn -> query($sql);
          ?>
          <select name="category_id" class="form-control">
                <option value="">-ประเภทสินค้า</option>
                <?php while($row=mysqli_fetch_assoc($res)){ ?>
                <option value="<?php echo $row['category_id'] ?>"><?php echo $row['category_name'] ?></option>
              <?php } ?>
          </select>
        </div><br>
        <div>
            <label>รูปสินค้า:</label>
            <input type="file" class="form-control" name="product_img">
        </div><br>
        <button type="submit">ตกลง</button>
    </form>
</div><br>
<br>
<br>
<?php include "footer.php"; ?>