<?php 
include "menu.php";
include "connect.php";
include "header.php";?>

<body>

<div class="container">
  <h2>Product Type</h2>
   <a href="admin_protype_inF.php" class="btn btn-primary">เพิ่มข้อมูล</a>       
  <table class="table table-striped">
    <thead>
      <tr>
        <th class="text-center">category_id</th>
        <th class="text-center">category_name</th>
        <th>แก้ไข</th>
        <th>ลบ</th>
      </tr>
    </thead>
    <tbody>
    <?php
        $sql="SELECT * FROM category";
        $query=mysqli_query($conn,$sql);//ดึงข้อมูล SQL ขึ้นมาแสดง
        while($row=mysqli_fetch_assoc($query)){
    ?>    
      <tr>
        <td class="text-center"><?php echo $row['category_id'];?></td>
        <td class="text-center"><?php echo $row['category_name'];?></td>        
        <td><a class='btn btn-info btn-xs' href="admin_protype_editF.php?category_id=<?php echo $row['category_id'];?>"><span class="glyphicon glyphicon-edit"></span> Edit</a></td>    
        <td><a href="JavaScript:if(confirm('Confirm Delete?')==true){window.location='admin_protype_delete.php?category_id=<?php echo $row['category_id'];?>';}" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
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
<?php include "footer.php";?>
