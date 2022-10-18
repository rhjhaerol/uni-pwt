<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Uni Pwt</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
    <script src="https://kit.fontawesome.com/0ac2a089e1.js" crossorigin="anonymous"></script>
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
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg ">
        <div class="container">
          <a class="navbar-brand" href="#"><img src="assets/img/Logo UniPwt.png" alt="UniPwt"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
              <a class="nav-item nav-link active" aria-current="page" href="#">Home</a>
              <a class="nav-item nav-link" href="#destination">Destination</a>
              <a class="nav-item nav-link" href="#Guide">Guide</a>
              <a class="nav-item nav-link" href="login-page.php">Login</a>
              <a class="nav-item btn btn-primary btn-lg tombol" href="signin-page.html">Sign Up</a>
            </div>
          </div>
        </div>
    </nav>

    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid" style="background-image:url(assets/img/background.jpg) ;">
        <div class="container">
            <h1 class="display-4">Enjoy Your Vacation</h1>
            <p class="lead">Explore Purwokerto, Kebumen and Purbalingga with Us.</p>
            <div class=" justify-content-center search">
              <i class="fa-solid fa-search" style="margin-left:235px; margin-top: 36.5px;"></i>
              <input type="text" class="form-control" placeholder="Pantai Menganti">
            </div>
        </div>
    </div>

    <!-- Container -->
    <div class="container">
        <!-- Content -->
        <div class="row justify-content-center">
          <div class="col-lg-12 info-content">
            <div class="row">
              <div class="col-lg">
                <h1 class="text-1">The local experience</h1>
                <p class="text-2">You will discover exactly why Bolivia is known as The Land of Hidden Treasures as you will embark on an adventure of a lifetime along the land</p>
              </div>
              <div class="col-lg" style="text-align:center;">
                <div class="row">
                  <div class="col">
                    <img src="assets/Transpo.Icon.png" class="rounded-circle" alt="">
                    <p class="text-3">Transport</p>
                  </div>
                  <div class="col">
                    <img src="assets/Food.Icon.png" class="rounded-circle" alt="">
                    <p class="text-3">Food</p>
                  </div>
                  <div class="col">
                    <img src="assets/Photos.Icon.png" class="rounded-circle" alt="">
                    <p class="text-3">Photos</p>
                  </div>
                </div>
              </div>
              <div class="col-lg">
                <a class="btn btn-primary btn-lg tombol-1" href="#">Guide</a>
              </div>
            </div>
          </div>
        </div>
    </div>

    <!-- Container -->
    <div class="container-fluid " style="background-color: #F9F9FB; padding: 100px 50px;" id="destination">
      <!-- info-text -->
      <div class="container info-text">
        <div class="container">
          <h1 class="text-dest">Destination</h1>
          <div class="row">
            <div class="col-10 col-sm-3">
              <p class="text-vis"><span class="color-blue">1000+</span><br>Visiter</p>
            </div>
            <div class="col-10 col-sm-4"><p>this is a popular tour in Purwokerto. Explore and enjoy your holiday by checking out our accommodation recommendations</p> </div>
          </div>
        </div>
      </div>
      <!-- info-box -->
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3" style="padding-left: 100px;">
        <div class="col">
          <div class="card shadow-sm">
            <img src="assets/img/Pantai Menganti.png" alt="Pantai Menganti">
            <div class="card-body">
              <p class="card-text">Pantai Menganti</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="row">
                  <div class="col">
                    <img src="assets/Like.Status.Icon.png" alt="" width="30px" height="30px">
                    <span class="text-place">Kebumen</span>
                  </div>
                  <div class="row">
                    <div class="col">
                      <img src="assets/Like.Status.Icon.png" alt="" width="30px" height="30px">
                      <span class="text-place">500</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="assets/img/Owabong.png" alt="Owabong">
            <div class="card-body">
              <p class="card-text">Owabong</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="row">
                  <div class="col">
                    <img src="assets/Like.Status.Icon.png" alt="" width="30px" height="30px">
                    <span class="text-place">Purbalingga</span>
                  </div>
                  <div class="row">
                    <div class="col">
                      <img src="assets/Like.Status.Icon.png" alt="" width="30px" height="30px">
                      <span class="text-place">500</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="assets/img/Taman Andang.png" alt="Taman Andang">
            <div class="card-body">
              <p class="card-text">Taman Andang</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="row">
                  <div class="col">
                    <img src="assets/Like.Status.Icon.png" alt="" width="30px" height="30px">
                    <span class="text-place">Kebumen</span>
                  </div>
                  <div class="row">
                    <div class="col">
                      <img src="assets/Like.Status.Icon.png" alt="" width="30px" height="30px">
                      <span class="text-place">500</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Jumbotron-1 -->
    <div class="jumbotron-1 jumbotron-fluid" style="background-color: white;" id="Guide">
      <div class="container">
          <h1 class="display-5">Guides For Your Next Vacation</h1>
          <p class="lead-1">Contains a guide to traveling and using this wesbite</p>
          <div class="justify-content-center" style="padding-top: 50px;">
            <img class="trans-i" src="assets/Transpo.Icon.png" alt="Transport"> 
            <p class="lead-2">You can get to Purwokerto by using</p>
            <div class="row justify-content-center">
              <div class="col-md-2">
                <p><i class="	fa fa-circle"></i> Bus</p>
                <p><i class="	fa fa-circle" style="padding-left: 60px;"></i> Personal Car</p>
              </div>
              <div class="col-md-2">
                <p><i class="	fa fa-circle"></i> Train</p>
                <p><i class="	fa fa-circle" style="padding-left: 45px;"></i> Motorcycle</p>
              </div>
            </div>
          </div>
          <div class="justify-content-center" style="padding-top: 50px;">
            <img class="food-i" src="assets/Food.Icon.png" alt="Food">
            <p class="lead-2">Typical food of Purwokerto area are</p>
            <!-- info-box-2 -->
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3" style="padding-left: 100px;">
              <div class="col">
                <div class="card-f shadow-sm">
                  <img src="assets/img/Mendoan.png" alt="Mendoan">
                  <div class="card-body">
                    <p class="card-text-f">Mendoan</p>
                    <div class="d-flex justify-content-between align-items-center">
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card-f shadow-sm">
                  <img src="assets/img/Gethuk Goreng.png" alt="Gethuk Goreng">
                  <div class="card-body">
                    <p class="card-text-f">Gethuk Goreng</p>
                    <div class="d-flex justify-content-between align-items-center">
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card-f shadow-sm">
                  <img src="assets/img/Kluban.png" alt="Kluban">
                  <div class="card-body">
                    <p class="card-text-f">Kluban</p>
                    <div class="d-flex justify-content-between align-items-center">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>  
    </div>
    
    <!-- Footer -->
    <footer>
      <div class="footer">
        <div class="container-fluid">
          <div class="row" style="padding-top: 100px;">
            <div class="col-6" style="padding-left: 100px;">
              <img src="assets/img/Logo UniPwt.png" alt="">
              <div class="row">
                <div class="col-3">
                  <img src="assets/img/Group 35.png" alt="">  
                </div>
              </div>
            </div>
            <div class="col-6">
              <p style="font-size: 32px; font-family:Montserrat; color: #FFFFFF; padding-left: 50px; padding-top: 100px;">Drop your email to get notified</p>
              <div class="justify-content-center form-ft" style="padding-left: 30px;">
                <input type="text" class="form-control" placeholder="Your e-mail address"><a href="" class="btn btn-primary" style="margin-left:420px; margin-top: -150px;">Send</a>
              </div>
              <p style="font-size: 24px; font-family:Montserrat; color: #FFFFFF; padding-top: 50px;">Cookie Policy | Privacy Policy | Term and Condition</p>
            </div>
          </div>
          <p style="font-family: Open Sans; font: size 20px; text-align:center; color:white; padding-top: 125px;">this is a popular tour in Purwokerto. Explore and enjoy your holiday by checking out our accommodation <br>recommendations</p>
        </div>
      </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>