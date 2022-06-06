<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Add Motherboard</title>
</head>
<body>
<div class="container">
<form action="" method="post" enctype= "multipart/form-data">
      <h1 class="text-center py-5"> ADD details of the Motherboard</h1>
      
        <div class="mb-3">
            <label class="form-label">Motherboard Name</label>
            <input type="text" name="m_name" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Price </label>
            <input type="number" name="m_price" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Motherboard Details</label>
           <textarea rows="4" cols="50" class="form-control" name="m_details"> </textarea>
        </div>
        <button type="submit" name="insert-btn" class="btn btn-success">Submit</button>
</form>

<?php

include_once '../dbconn.php';

if(isset($_POST['insert-btn'])){

    $m_name = $_POST['m_name'];
    $m_price = $_POST['m_price'];
    $m_details = $_POST['m_details'];

    $insert = "INSERT INTO motherboard (m_name, m_price, m_details) VALUES ('$m_name','$m_price','$m_details')";

    $run_insert = mysqli_query($conn, $insert);

    if($run_insert == true){
        echo "data inserted";
        header("Location: motherboard_data.php");
    }else{
        echo "insertion failed";
    }

}

    




?>
 
</body>
</html>