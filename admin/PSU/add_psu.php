<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Add PSU</title>
</head>
<body>
<div class="container">
<form action="" method="post" enctype= "multipart/form-data">
      <h1 class="text-center py-5"> ADD details of the PSU</h1>
      
        <div class="mb-3">
            <label class="form-label">PSU Name</label>
            <input type="text" name="ps_name" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Capacity </label>
            <input type="text" name="ps_watt" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Price </label>
            <input type="number" name="ps_price" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">PSU Details</label>
           <textarea rows="4" cols="50" class="form-control" name="ps_details"> </textarea>
        </div>
        <button type="submit" name="insert-btn" class="btn btn-success">Submit</button>
</form>

<?php

include_once '../dbconn.php';

if(isset($_POST['insert-btn'])){

    $ps_name = $_POST['ps_name'];
    $ps_watt = $_POST['ps_watt'];
    $ps_price = $_POST['ps_price'];
    $ps_details = $_POST['ps_details'];

    $insert = "INSERT INTO psu (ps_name, ps_watt, ps_price, ps_details) VALUES ('$ps_name','$ps_watt','$ps_price','$ps_details')";

    $run_insert = mysqli_query($conn, $insert);

    if($run_insert == true){
        echo "data inserted";
        header("Location: psu_data.php");
    }else{
        echo "insertion failed";
    }

}

    




?>
 
</body>
</html>