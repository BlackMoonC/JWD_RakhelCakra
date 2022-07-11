
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="Assets/favicon.ico" type="image/x-icon">
    <link rel="icon" href="Assets/favicon.ico" type="image/x-icon">
    <title>Test</title>
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
                </ul>
            </div>
        </div>
    </nav>
    <section id="login">
        <div class="container">
            <div class="row vh-100 align-content-center justify-content-center">
                <div class="col-lg-5">
                    <div class="card">
                        <div class="card-header py-3">Login</div>
                        <form autocomplete="off" action="logins.php">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="username" class="form-label">Email</label>
                                    <input type="text" class="form-control" name="username" id="username">
                                    <!-- Untuk Membuat tanda error -->
                                    <!-- class="is-invalid"
                                    <div class="invalid-feedback">Email sudah digunakan</div> -->
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" name="password" id="password">
                                </div>
                                <div class="form-check mb-3">
                                    <input type="checkbox" class="form-check-input" id="confirm_password" name="confirm_password">
                                    <label for="remember" class="form-check-label">Remember Me!</label>
                                </div>
                                <button type="submit" class="btn btn-primary bg-gradient">Masuk</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>