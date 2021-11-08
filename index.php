<?php 
include "menu.php";
include "header.php"; 
session_start();     
?>
    
    
    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 
                
            </div>
        </div>
    </div> <!-- End mainmenu area -->
    
    <div class="slider-area">
        	<!-- Slider -->
			<div class="block-slider block-slider4">
				<ul class="" id="bxslider-home4">
					<li>
						<img src="img/pp4.jpg" alt="Slide">
						<div class="caption-group">
							
						</div>
					</li>
					<<li><img src="img/pp2.jpg" alt="Slide">
						<div class="caption-group">
							<h2 class="caption title">
                            iPhone  <span class="primary">11 <strong>Pro Max</strong></span>
							</h2>
							<h4 class="caption subtitle">Dimensions 7.78 x 0.81 x 15.80 cm.</h4>
							<a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
						</div>
					</li> -->
					<li><img src="img/pp3.jpg" alt="Slide">
						<div class="caption-group">
							<h2 class="caption title">
                            MacBook <span class="primary">air <strong></strong></span>
							</h2>
							<h4 class="caption subtitle">Dimensions 7.41 x21.24 x 0.41cm.</h4>
							<a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
						</div>
					</li>
					<li><img src="img/pp1.jpg" alt="Slide">
						<div class="caption-group">
						  <h2 class="caption title">
                          iPad <span class="primary">air <strong></strong></span>
							</h2>
							<h4 class="caption subtitle">Dimensions 17.41 x 25.06 x 0.61 cm.</h4>
							<a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
						</div>
					</li>
				</ul>
			</div>
			<!-- ./Slider -->
    </div> <!-- End slider area -->
    
    <?php 
    include "connect.php";
    
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

<?php if($_SESSION['status']=='user'){  ?>
<div class="container" style="margin-top: 3%;">
    <div class="row">
                <?php 
                     $sql="SELECT * FROM product_istudio LIMIT 4";
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
	</div>
</div>
<?php }else{ ?>    
<div class="container" style="margin-top: 3%;">
    <div class="row">
                <?php 
                     $sql="SELECT * FROM product_istudio limit 8  ";
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
							</div>
						</div>
					</div>
                </div> 
			</div> 
        </div> 
        <?php  } ?>
	</div>
</div>   
<?php }?>  
    
    

<?php include "footer.php"; ?>

</html>