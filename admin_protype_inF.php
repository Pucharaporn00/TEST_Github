<?php
include "menu.php";
include "header.php";?>
<div class="container">
    <form action="admin_protype_inP.php" method="POST">
        <div>
            <label>ชื่อสินค้า:</label>
            <input type="text" class="form-control" name="category_name">
        </div><br>
        <button type="submit">ตกลง</button>
    </form>
</div><br>
<br>
<br>
<?php include "footer.php"; ?>