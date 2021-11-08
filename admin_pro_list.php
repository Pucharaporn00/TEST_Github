<?php 
include "menu.php";
include "connect.php";
include "header.php";?>

<body>

<div class="container">
  <h2>Product</h2>
   <a href="admin_pro_inF.php" class="btn btn-primary">เพิ่มข้อมูล</a>       
  <table class="table table-striped">
    <thead>
      <tr>
        <th>product_id</th>
        <th>product_name</th>
        <th>rom</th>
        <th>color</th>
        <th>price</th>
        <th>generation</th>
        <th>category_id</th>
        <th>product_img</th>
        <th>แก้ไข</th>
        <th>ลบ</th>
      </tr>
    </thead>
    <tbody>
    <?php
        $sql="SELECT * FROM product_istudio";
        $query=mysqli_query($conn,$sql);//ดึงข้อมูล SQL ขึ้นมาแสดง
        while($row=mysqli_fetch_assoc($query)){
          $idty = $row ['category_id'];
          $sqlty = "select * from category where category_id = '$idty'";
          $queryty=mysqli_query($conn,$sqlty);
          $rowty=mysqli_fetch_assoc($queryty);
    ?>    
      <tr>
        <td class="text-center"><?php echo $row['product_id'];?></td>
        <td class="text-center"><?php echo $row['product_name'];?></td>
        <td class="text-center"><?php echo $row['rom'];?></td>
        <td class="text-center"><?php echo $row['color'];?></td>
        <td class="text-center"><?php echo $row['price'];?></td>
        <td class="text-center"><?php echo $row['generation'];?></td>
        <td class="text-center"><?php echo $rowty['category_name'];?></td>
        <td class="text-center"><img src="img/<?php echo $row['product_img'];?>" width="50px"></td>
        <td><a class='btn btn-info btn-xs' href="admin_pro_editF.php?product_id=<?php echo $row['product_id'];?>"><span class="glyphicon glyphicon-edit"></span> Edit</a></td>    
        <td><a href="JavaScript:if(confirm('Confirm Delete?')==true){window.location='admin_pro_delete.php?product_id=<?php echo $row['product_id'];?>';}" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
      </tr>
    <?php } ?>
    </tbody>
  </table>
</div>

</body>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php include "footer.php"; ?>
