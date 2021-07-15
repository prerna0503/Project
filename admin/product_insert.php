<?php

session_start();
$user_id=$_SESSION['user_id'];

if(isset($_POST['submit'])){
        include 'config.php';
        $name=$_POST['name'];
        $type=$_POST['type'];
        $description=$_POST['description'];
        $price=$_POST['price'];
        $image=$_FILES['image'];

        $image_name=$image['name'];
        $image_tmp =$image['tmp_name'];

        $file_ext=explode('.',$image_name);
        $file_check=strtolower(end($file_ext));

        $fileextstored=array('png','jpg','jpeg');
        if(in_array($file_check,$fileextstored))
        {
                $destinationfile='upload/'.$image_name;
                move_uploaded_file($image_tmp,$destinationfile);
                
        $sql="INSERT into product(user_id,name,type,description,price,image) VALUES ('{$user_id}','{$name}','{$type}','{$description}','{$price}','{$image_name}')";
        $result=mysqli_query($conn,$sql) or die("Query Unsuccessful");


        }

        header("Location: http://localhost/crud_office/admin/product_list.php");
}

else{
        echo "Error";
}
     
?>
