<?php
include('koneksi.php');
$query =  mysqli_query($koneksi, "SELECT * FROM books");
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.11.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.11.1/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <nav class="navbar py-4 navbar-expand-lg navbar-light bg-primary fixed-lg-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-end ms-auto">
                <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Hi, Guest
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
            <li><a class="dropdown-item" href="dashboard.php">Dashboard</a></li>
            <li><a class="dropdown-item" href="login.php">Log In</a></li>
          </ul>
        </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--Book-->
    <section id="member">
        <div class="container mb-5">
            <h1 class="h1 text-center mb-2">Books</h1>
            <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora corrupti sapiente quibusdam atque porro tenetur quaerat magnam odit, voluptatibus esse quis accusantium assumenda aperiam! Ducimus ipsum eius deserunt totam qui.</p>
            <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php foreach ($result as $value) { ?> 
                <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $value['cover']?>" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title"><?php echo $value['title'] ?></h5>
                    <a href="#" class="btn btn-primary">View</a>
                    <a href="#" class="btn btn-primary">Edit</a>
                    </br>
                    <p class="card-text">Rp <?php echo $value['harga']?></p>
                    </div>
                </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/data.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBM-iuspG7GUiEK6ZEk_C8GMnFVmzQAen0&callback=initialize" 
            async defer></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/chart.js"></script>
    <script src="js/data-tabel.js"></script>
</body>

</html>