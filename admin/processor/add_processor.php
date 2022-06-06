<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Add Processor</title>
</head>
<body>
<div class="container">
<form action="" method="post" enctype= "multipart/form-data">
      <h1 class="text-center py-5"> ADD details of the Processor</h1>
      
        <div class="mb-3">
            <label class="form-label">Processor Name</label>
            <input type="text" name="p_name" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Price </label>
            <input type="number" name="p_price" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Processor Details</label>
           <textarea rows="4" cols="50" class="form-control" name="p_details"> </textarea>
        </div>
        <button type="submit" name="insert-btn" class="btn btn-success">Submit</button>
</form>

<?php

include_once '../dbconn.php';

if(isset($_POST['insert-btn'])){

    $p_name = $_POST['p_name'];
    $p_price = $_POST['p_price'];
    $p_details = $_POST['p_details'];

    $insert = "INSERT INTO processor (p_name, p_price, p_details) VALUES ('$p_name','$p_price','$p_details')";

    $run_insert = mysqli_query($conn, $insert);

    if($run_insert == true){
        echo "data inserted";
        header("Location: processor_data.php");
    }else{
        echo "insertion failed";
    }

}

    




?>
 
</body>
</html>