<?php

$connection = mysqli_connect('localhost','root','','tesla');

if(isset($_POST['update'])){

   
    $id = $_POST['book_id'];
    $name = $_POST['name'];
    $model = $_POST['model'];
    $color = $_POST['color'];
    $payment = $_POST['payment'];

    echo $id;
    echo $name;
    echo $model;
    echo $color;
    echo $payment;

    $query = "UPDATE book_now SET Name='$name', Model='$model', Color='$color', Payment_Type='$payment' WHERE Book_ID='$id'";
    mysqli_query($connection,$query);
    header('location:index.php');
}

if(isset($_POST['upload'])){

    $target_dir = "Image/"; //Folder name

    $path = $target_dir.$_FILES['image']['name']; //Folder Name + Image Name

    move_uploaded_file($_FILES['image']['tmp_name'],$path); //Moving the selected image in to the set folder 

    $query = "INSERT INTO add_car (image) values ('$path')";

    $query_run = mysqli_query($connection,$query);
}


?>