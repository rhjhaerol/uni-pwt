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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- My CSS -->
    <style>
        body {
          font-family: Montserrat;
          font-size: 18px;
          margin: 0;
        }
        
        * {
          box-sizing: border-box;
        }
        
        img {
          vertical-align: middle;
        }
        
        /* Position the image container (needed to position the left and right arrows) */
        .container {
          position: relative;
        }
        
        /* Hide the images by default */
        .mySlides {
          display: none;
          text-align:center;  
        }
        
        /* Add a pointer when hovering over the thumbnail images */
        .cursor {
          cursor: pointer;
        }
        
        /* Next & previous buttons */
        .prev,
        .next {
          cursor: pointer;
          position: absolute;
          top: 47%;
          width: auto;
          padding: 16px;
          margin-top: -50px;
          color: #3685FB;
          font-weight: bold;
          font-size: 20px;
          user-select: none;
          -webkit-user-select: none;
        }
        
        /* Position the "next button" to the right */
        .next {
          right: 20%;
        }

        .prev {
          left:20%;
        }
        
        /* On hover, add a black background color with a little bit see-through */
        .prev:hover,
        .next:hover {
          background-color: rgba(0, 0, 0, 0);
        }
        
        /* Number text (1/3 etc) */
        .numbertext {
          color: #f2f2f2;
          font-size: 12px;
          padding: 8px 12px;
          position: absolute;
          top: 0;
        }
        
        /* Container for image text */
        .caption-container {
          text-align: center;
          background-color: #FFFFFF;
          width: 50%;
          margin: auto;
          padding-top: 10px;
          color: black;
        }
        
        .row:after {
          content: "";
          display: table;
          clear: both;
        }
        
        /* Six columns side by side */
        .column {
          padding-top:30px;
          float: left;
          width: 16.66%;
        }
        
        /* Add a transparency effect for thumnbail images */
        .demo {
          opacity: 0.6;
        }
        
        .active,
        .demo:hover {
          opacity: 1;
        }
        </style>
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
    <div class="container py-5">
    <a href="destination.php"><i class="glyphicon glyphicon-remove" style="padding-bottom:70px; margin-left:100%; color:#3685FB;"></i></a>
    
    <div class="mySlides">
        <div class="numbertext">1 / 6</div>
        <img src="assets\img\1.jpg" style="width:50%">
    </div>

    <div class="mySlides">
        <div class="numbertext">2 / 6</div>
        <img src="assets\img\2.jpg" style="width:50%">
    </div>

    <div class="mySlides">
        <div class="numbertext">3 / 6</div>
        <img src="assets\img\3.jpg" style="width:50%">
    </div>
        
    <div class="mySlides">
        <div class="numbertext">4 / 6</div>
        <img src="assets\img\4.jpg" style="width:50%">
    </div>

    <div class="mySlides">
        <div class="numbertext">5 / 6</div>
        <img src="assets\img\5.jpg" style="width:50%">
    </div>
        
    <div class="mySlides">
        <div class="numbertext">6 / 6</div>
        <img src="assets\img\6.jpg" style="width:50%">
    </div>
        
    <a class="prev" onclick="plusSlides(-1)">❮</a>
    <a class="next" onclick="plusSlides(1)">❯</a>

    <div class="caption-container">
        <p id="caption"></p>
    </div>

    <div class="row">
        <div class="column">
        <img class="demo cursor" src="assets\img\1.jpg" style="width:100%" onclick="currentSlide(1)" alt="Pancuran Pitu dan Pancuran Telu">
        </div>
        <div class="column">
        <img class="demo cursor" src="assets\img\2.jpg" style="width:100%" onclick="currentSlide(2)" alt="Telaga Sunyi">
        </div>
        <div class="column">
        <img class="demo cursor" src="assets\img\3.jpg" style="width:100%" onclick="currentSlide(3)" alt="Taman Baturraden">
        </div>
        <div class="column">
        <img class="demo cursor" src="assets\img\4.jpg" style="width:100%" onclick="currentSlide(4)" alt="Curug Grojogan">
        </div>
        <div class="column">
        <img class="demo cursor" src="assets\img\5.jpg" style="width:100%" onclick="currentSlide(5)" alt="Baturraden">
        </div>    
        <div class="column">
        <img class="demo cursor" src="assets\img\6.jpg" style="width:100%" onclick="currentSlide(6)" alt="Kaloka Widya Mandala">
        </div>
    </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script>
        let slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
        showSlides(slideIndex += n);
        }

        function currentSlide(n) {
        showSlides(slideIndex = n);
        }

        function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("demo");
        let captionText = document.getElementById("caption");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
        captionText.innerHTML = dots[slideIndex-1].alt;
        }
    </script>
</body>
</html>