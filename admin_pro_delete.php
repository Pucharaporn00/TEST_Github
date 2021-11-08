<?php
include "connect.php";
$product_id=$_GET['product_id'];

$sql="DELETE FROM product_istudio WHERE product_id='".$product_id."'";

//echo $sql;
if (mysqli_query($conn,$sql)){
    //echo "DELETE COMPLETE";
}else{
    //echo "ERROR : ".$sql."<br>";
}
echo "<meta http-equiv='refresh' content='0;url=admin_pro_list.php'>";

?>