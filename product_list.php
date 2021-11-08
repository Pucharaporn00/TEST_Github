<?php 
    include "connect.php";
    include "menu.php";
	include "header.php";
	$idt = $_GET['idt'];
?>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
.btn-product{
    width: 100%;
}
</style>
<div class="container" style="margin-top: 3%;">
    <div class="row">
        <h1 align="center">รายการสินค้า</h1><br>
			   <?php if($idt == '') {?>
				<?php 
                     $sql="SELECT * FROM product_istudio";
                     $query=mysqli_query($conn,$sql);
                     while ($row=mysqli_fetch_assoc($query)) {
                ?>
    	<div class="col-sm-3">
			<div class="">
				<div class="thumbnail" >
                    <div class="col-md-12">
								<h6><?php echo $row['product_name'];?></h6>
							</div>
					<img src="img/<?php echo $row['product_img'];?>" class="img-responsive" width="70%" >
					<div class="caption">
						<div class="row">
							
							<div class="col-md-6 col-xs-6 price">
								<h3>
								<label>฿<?php echo $row['price'];?></label></h3>
							</div>
						</div>
                    
						<div class="row">
							<div class="col-md-6">
								<a class="btn btn-primary btn-product"><span class="glyphicon glyphicon-thumbs-up"></span> detail</a> 
							</div>
							<div class="col-md-6">
								<a href="cart.php?product_id=<?php echo $row['product_id'];?>&act=add" class="btn btn-success btn-product"><span class="glyphicon glyphicon-shopping-cart"></span> Buy</a></div>
						</div>
					</div>
                </div> 
			</div> 
        </div> 
        <?php  } ?>
			   <?php }else{ ?>
				<?php 
                     $sql="SELECT * FROM product_istudio WHERE category_id = $idt";
                     $query=mysqli_query($conn,$sql);
                     while ($row=mysqli_fetch_assoc($query)) {
                ?>
    	<div class="col-sm-3">
			<div class="">
				<div class="thumbnail" >
                    <div class="col-md-12">
								<h6><?php echo $row['product_name'];?></h6>
							</div>
					<img src="img/<?php echo $row['product_img'];?>" class="img-responsive" width="70%" >
					<div class="caption">
						<div class="row">
							
							<div class="col-md-6 col-xs-6 price">
								<h3>
								<label>฿<?php echo $row['price'];?></label></h3>
							</div>
						</div>
                    
						<div class="row">
							<div class="col-md-6">
								<a class="btn btn-primary btn-product"><span class="glyphicon glyphicon-thumbs-up"></span> detail</a> 
							</div>
							<div class="col-md-6">
								<a href="cart.php?product_id=<?php echo $row['product_id'];?>&act=add" class="btn btn-success btn-product"><span class="glyphicon glyphicon-shopping-cart"></span> Buy</a></div>
						</div>
					</div>
                </div> 
			</div> 
        </div> 
        <?php  } ?>
				<?php } ?>
	</div>
</div>

<?php include "footer.php"; ?>