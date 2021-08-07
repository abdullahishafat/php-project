<?php
//Check if button register has been clicked
if (isset($_POST{"btn_reg"})) {
    //Start receiving data from the form
    $Name = $_POST["w"];
    $Quantity = $_POST["x"];
    $Size = $_POST["y"];
    $Price = $_POST["z"];

    //Now connect to database
    require_once "db_connection.php";

    //Prepare the insert query to save the data
    $insert_query = "INSERT INTO `products`(`id`, `name`, `quantity`, `size`, `price`) VALUES (null,'$Name','$Quantity','$Size','$Price')";


    //Finally save by use of a mysqli_query
    $save = mysqli_query($connection, $insert_query);

    //Check if the saving was successfully
    if (isset($save)){
        header("location:products.php");
    }else{
        echo "User registered failed";
    }
}