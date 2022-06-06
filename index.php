<?php
include_once 'header.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PC Parts List</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <div class="text-center text-primary pt-5">
            <h1 class="heading">Custom Pc Builder</h1>
        </div>
        <hr>
        <h1 class="mt-5">Choose PC Parts</h1>
        <div class="pt-5 margin row">
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="images/processor.jpg" class="img-fluid" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Processor</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="processor_list.php" class="btn btn-success">Choose Processor</a>
                    </div>
                </div>
            </div>
        
        <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="images/motherboard.jpg" class="img-fluid" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Motherboard</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="motherboard_list.php" class="btn btn-success">Choose Motherboard</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="images/storage.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Storage SSD/HDD</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="storage_list.php" class="btn btn-success">Choose Storage</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 pt-5">
                <div class="card">
                    <img class="card-img-top" src="images/ram.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">RAM</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="RAM.php" class="btn btn-success">Choose RAM</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 pt-5">
                <div class="card">
                    <img class="card-img-top" src="images/psu.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Power Supply Unit</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="psu.php" class="btn btn-success">Choose Power Supply Unit</a>
                    </div>
                </div>
            </div>
    </div>
    </div>
    <div class="padding"></div>
</body>

</html>