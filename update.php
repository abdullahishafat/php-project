<?php

//Check if the update button has been clicked
if (isset($_GET["my_id"])){
    $ReceivedName = $_GET["my_name"];
    $ReceivedQuantity = $_GET["my_quantity"];
    $ReceivedSize = $_GET["my_size"];
    $ReceivedPrice = $_GET["my_price"];
    $ReceivedId = $_GET["my_id"];
}


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
    <script src="bootstrap/js/jquery-3.4.0.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
<h1 class="text-info text-center">Products Complete System</h1>
<div class="row">
    <div class="col-3"></div>
    <div class="col-6">
        <form action="update_handler.php" method="post">
            <div class="form-group">
                <input value="<?php echo $ReceivedName;?>" type="text" class="form-control" name="w" placeholder="Enter name">
            </div>
            <div class="form-group">
                <input value="<?php echo $ReceivedQuantity;?>" type="text" class="form-control" name="x" placeholder="Enter quantity">
            </div>
            <div class="form-group">
                <input value="<?php echo $ReceivedSize;?>" type="text" class="form-control" name="y" placeholder="Enter size">
            </div>
            <div class="form-group">
                <input value="<?php echo $ReceivedPrice;?>" type="text" class="form-control" name="z" placeholder="Enter price">
            </div>

            <input type="hidden" value="<?php echo $ReceivedId; ?>"name="id_yangu">
            <input type="submit" value="update" class="btn btn-outline-info btn-block" name="btn_update">
            <a href="Company.php" class="btn btn-outline-success btn-block">Cancel</a>
        </form>
    </div>
    <div class="col-3"></div>

</div>
</body>
</html>
