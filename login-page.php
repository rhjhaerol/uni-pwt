<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Uni Pwt</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
    <!-- My CSS -->
    <link rel="stylesheet" href="css/styles.css">
    <!-- Icon -->
    <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Jumbotron -->
    <div class="jumbotron-lp" style="background-image:url(assets/img/background.jpg) ;"></div>
    <div class="container">
        <div class="box">
            <form id="login-app">
                <img src="assets/img/Group 6890.png" alt="">
                <p class="text-ats-1">Open your amazing trip</p>
                <div class=" justify-content-center form">
                    <input type="text" class="form-control" placeholder="Username" name="username">
                    <input class="form-control" placeholder="Password" name="password" type="password">
                    <i><p id="info-msg" style="color:red; padding-left: 20px;"></p></i>
                </div>
                <div>
                <button type="submit" class="btn btn-primary btn-sm tombol-2">Login</button>
                </div>
            </form>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/app.js"></script>
</body>
</html>