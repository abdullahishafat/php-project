<?php
//Check if the button has been clicked
if (isset($_POST["btn_update"])){
    //Start receiving data from the form
    $id = $_POST["id_yangu"];
    $name = $_POST["w"];
    $quantity = $_POST["x"];
    $size = $_POST["y"];
    $price = $_POST["z"];


    //Connect to database
    require_once "db_connection.php";

    $update_query= "UPDATE `products` SET `name`='$name',`quantity`='$quantity',`size`='$size',`price`='$price' WHERE id='$id'";

    $update=mysqli_query($connection, $update_query);

    if (isset($update)){
        header("location:Company.php");
    }else{
        echo "Updating failed";
    }
}
