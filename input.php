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
            Hi, admin
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
            <li><a class="dropdown-item" href="dashboard.php">dashboard</a></li>
            <li><a class="dropdown-item" href="#">log out</a></li>
          </ul>
        </li>
                </ul>
            </div>
        </div>
    </nav>
    <br>
    <form class="ms-5 mb-5 container" action="transfer.php" method="POST">
        <legend class="text-center">Input Data</legend>
        <label>Title</label><br/>
        <input type="text" name="title"/>
        <br/><br/>
        <label>Cover</label><br/>
        <textarea name="cover" cols="30" rows="10"/></textarea>
        <br/><br/>
        <label>Description</label><br/>
        <textarea name="description" cols="30" rows="10"/></textarea>
        <br/><br/>
        <label>Harga</label>
        <input type="number" name="harga">
        <br/><br/>
        <button type="submit">Tambah</button>
    </form> 
</body>
</html>