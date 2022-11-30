<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <title>THE YELLOW FERRIES</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-secondary">
  <div class="container">
    <a class="navbar-brand text-light" href="#">
        <img src="./images/logo.jpg" alt="LOGO" class="img-fluid rounded">
        THE YELLOW FERRIES
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ms-auto">
        <a class="nav-link active text-light" aria-current="page" href="#">SIGN UP</a>
      </div>
    </div>
  </div>
</nav>


<section class="mt-5 text-light text-center">
    <div class="container bg-dark opacity-75 rounded-5">
        <h4 class="text-wrap">THE YELLOW FERRIES RESERVATION SYSTEM</h4>
        <form class="container mt-5">
            <h5>LOGIN</h5>
            <label for="username" class=""><i class="bi bi-person"></i> Username</label>
            <input type="text" name="username" class="form-control"> <br><br>
            <label for="password"><i class="bi bi-shield-lock"></i> Password</label>
            <input type="password" name="password" class="form-control">
        </form>

            <button class="btn btn-primary mt-3 mb-5" type="submit">SUBMIT</button>

            <p>Click Sign in as Guest if you want to book a reservation</p>
        <a href="#" class="text-light ms-auto">Sign in as Guest</a>
    </div>
    
</section>

<div class="footer text-light text-center bg-dark opacity-75">
        <p>© 2022 The Yellow Ferries | All Rights Reserved</p>
</div>
<script src="./assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>