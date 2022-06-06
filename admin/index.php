<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand px-5" href="../index.php">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"></a>
          
        </li>
       
      </ul>
    </div>
  </div>
</nav>
    <div class="container">
        <div class="text-center pt-5">
            <h1 class="heading">Admin Panel</h1>
            <hr>
        </div>
        <div class="row">
            <div class="col-md-4 pt-5">
                <a href="processor/processor_data.php" type="button" class="btn btn-success btn-lg">Processor</a>
            </div>
            <div class="col-md-4 pt-5">
                <a href="motherboard/motherboard_data.php" type="button" class="btn btn-success btn-lg">Motherboard</a>
            </div>
            <div class="col-md-4 pt-5">
                <a href="storage/storage_data.php" type="button" class="btn btn-success btn-lg">Storage -SSD/HDD</a>
            </div>
            <div class="col-md-4 padding">
                <a href="RAM/ram_data.php" type="button" class="btn btn-success btn-lg">RAM</a>
            </div>
            <div class="col-md-4 padding">
                <a href="PSU/psu_data.php" type="button" class="btn btn-success btn-lg">Power supply unit</a>
            </div>
        </div>
        
    </div>
</body>
</html>