<?php  
session_start(); 
include "connect.php";
?>
<nav style="">
<?php if($_SESSION['status']=='addmin'){ ?>
<div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                        <ul>
                            <li><a href="admin_pro_list.php"><i class="fa fa-heart"></i>product</a></li>
                            <li><a href="admin_protype_list.php"><i class="fa fa-user"></i> producttype</a></li>
                        
                            <li><a href="checklogout.php"><i class="fa fa-user"></i>logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End header area -->
<?php }else if($_SESSION['status']=='user'){  ?>
    <div class="header-area">
        <div class="container">
        <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                        <ul>
                            <li><a href="index.php"><i class="fa fa-user"></i>Home</a></li>
                            <li><a href="product_list.php"><i class="fa fa-user"></i>product</a></li>
                            <li><a href="checklogout.php"><i class="fa fa-user"></i>logout</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-4">
                    
                        <ul class="user-menu">
                               
                                    <?php $sqlt = "SELECT * FROM category";
                                          $rest = $conn -> query($sqlt);
                                    ?>
                                    <?php while($rowt = $rest -> fetch_assoc()){ ?>
                                    <li><a href="product_list.php?idt=<?php echo $rowt['category_id'] ?>"><?php echo $rowt['category_name'] ?></a></li>
                                    <?php } ?>
                            
                        </ul>
                </div>
        </div>
            <!-- <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                        <ul>
                            <li><a href="index.php"><i class="fa fa-user"></i>Home</a></li>
                            <li><a href="product_list.php"><i class="fa fa-user"></i>product</a></li>
                            <li><a href="checklogout.php"><i class="fa fa-user"></i>logout</a></li>

                        <div class="header-right">
                           <li class="list-unstyled list-inline" style=""><a href="index.php"><i class="fa fa-rocket"></i>kuy</a></li>
                        </div>
                    </ul>
                    </div>
                </div>
            </div> -->
        </div>
    </div> <!-- End header area -->
<?php }else{?>
    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                        <ul>
                            <li><a href="#"><i class="fa fa-user"></i>Home</a></li>
                            <li><a href="register.php"><i class="fa fa-heart"></i>register</a></li>
                            <li><a href="login.php"><i class="fa fa-user"></i> Login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End header area -->
<?php } ?>
</nav>