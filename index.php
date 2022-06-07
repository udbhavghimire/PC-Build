<?php
include_once 'header.php';
$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
    header('location:login.php');
};

if (isset($_GET['logout'])) {
    unset($user_id);
    session_destroy();
    header('location:login.php');
};
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
        <div class="user-profile">

            <?php
            $select_user = mysqli_query($conn, "SELECT * FROM `user_info` WHERE id = '$user_id'") or die('query failed');
            if (mysqli_num_rows($select_user) > 0) {
                $fetch_user = mysqli_fetch_assoc($select_user);
            };
            ?>

            <p> username : <span><?php echo $fetch_user['name']; ?></span> </p>
            <p> email : <span><?php echo $fetch_user['email']; ?></span> </p>
            <div class="flex">
                <a href="login.php" class="btn">login</a>
                <a href="register.php" class="option-btn">register</a>
                <a href="index.php?logout=<?php echo $user_id; ?>" onclick="return confirm('are your sure you want to logout?');" class="delete-btn">logout</a>
            </div>

        </div>
        <div class="text-center text-primary pt-5">
            <h1 class="heading"><b><u> Custom Pc Builder</u> </b></h1>
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