<?php
include "connect.php";
$category_id=$_GET['category_id'];

$sql="DELETE FROM category WHERE category_id='".$category_id."'";

//echo $sql;
if (mysqli_query($conn,$sql)){
    //echo "DELETE COMPLETE";
}else{
    //echo "ERROR : ".$sql."<br>";
}
echo "<meta http-equiv='refresh' content='0;url=admin_protype_list.php'>";

?>