<?php
//Check if the delete button has been clicked
if (isset($_GET["my_id"])){
    $id = $_GET["my_id"];


    //Connect to the database
    require_once "db_connection.php";

    //Prepare the delete query
    $delete_query = "DELETE FROM products WHERE id='$id'";
    //Finally delete using mysqli_query()
    $delete = mysqli_query($connection, $delete_query);
    //Check if the deletion was successfully
    if (isset($delete)){
        //Redirect back to users.php to see changes
        header("location:Company.php");
    }else{
        echo "Delete failed";
    }
}
