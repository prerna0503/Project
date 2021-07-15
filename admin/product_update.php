<?php
  
    $id=$_POST['id'];
    $name=$_POST['name'];
    $type=$_POST['type'];
    $description=$_POST['description'];
    $price=$_POST['price'];
    include 'config.php';
    $sql="UPDATE `product` SET name='{$name}',
    type='{$type}',description='{$description}',price='{$price}' WHERE id='{$id}'";
    $result=mysqli_query($conn,$sql) or die("query unsuccessfull");
    header("Location: http://localhost/crud_office/admin/product_list.php");
    mysqli_close($conn);
?>