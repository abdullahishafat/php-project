<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Company</title>

    <script src="bootstrap/js/jquery-3.4.0.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
    <a class="btn btn-outline-info btn-block" href="products.php">Add products</a>
    <h1 class="text-info text-center">Products</h1>
    <table class="table table-hover table-dark">
        <tr>
            <th>Name</th>
            <th>Quantity</th>
            <th>Size</th>
            <th>Price</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        <?php
        //Connect to the database
        require_once "db_connection.php";
        //Prepare the select query
        $select_query ="SELECT * FROM `products`";
        //Finally fetch the users by use of mysqli_query()
        $users =mysqli_query($connection, $select_query);
        //loop through the fetched users ti display them one by one
        while ($row = mysqli_fetch_assoc($users)){
            //Extract all the rows and print them one by one
            extract($row);
            echo "
            <tr>
                <td>$name</td>
                <td>$quantity</td>
                <td>$size</td>
                <td>$price</td>
                <td><a href='delete.php?my_id=$id' class='btn btn-danger'>Delete</a></td>
                <td><a href='update.php?my_id=$id&my_name=$name&my_quantity=$quantity&my_size=$size&my_price=$price' class='btn btn-info'>Update</a></td>
            </tr>
            ";
        }
        ?>

    </table>
</body>
</html>
