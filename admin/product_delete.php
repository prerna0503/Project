<?php

$id=$_GET['id'];

include 'config.php';
$sql="DELETE from product where id={$id}";
$result=mysqli_query($conn,$sql) or die("Query unsuccessful");

header("Location: http://localhost/crud_office/admin/product_list.php");
     
mysqli_close($conn);

?>