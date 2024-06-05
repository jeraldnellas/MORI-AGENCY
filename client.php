
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="icon" href="public/img/logo.png">
    <link rel="stylesheet" href="public/css/index.css">
    <link rel="stylesheet" href="public/css/materialize.css">
    <style>
         .main-header {
         background: url(public/img/clients2.jpg);
         background-size: cover;
         background-position: center;
       }
       #scrollTop{
        display: none;
        position: fixed;
        bottom: 20px;
        right: 30px;
        z-index: 99;
        font-size: 25px;
        border: none;
        outline: none;
        background-color: #2a5298;
        color: white;
        cursor: pointer;
        padding: 15px;
        border-radius: 4px
    
       }
       html {
        scroll-behavior: smooth;
       }
       #scrollTop:hover {
        background-color: red;
       }
    </style>
    <title>Clients</title>
</head>
<body>
    <header class="main-header">  
<?php include_once "views/common/nav.php"?>
    </header>
    <!-- sidenav -->
<?php include_once "views/common/sidenav.php"?>

    <section class="container">
        <div class="row">
            <div class="col s12">
                <div class="card-image" id="card-slide">
                    <img src="../clients/Riyadth clients-1.jpg" class="responsive-img" alt="">
                </div>
                <div class="card-image">
                    <img src="public/clients/Riyadth clients-2.jpg" class="responsive-img" style="border-top:1px solid black ;" alt="">
                </div>
                <div class="card-image">
                    <img src="public/clients/Riyadth clients-3.jpg" class="responsive-img " style="border-top:1px solid black ;" alt="">
                </div>
                <div class="card-image">
                    <img src="public/clients/Dammam clients-2.jpg" class="responsive-img" alt="">
                </div>
                <div class="card-image">
                    <img src="public/clients/Jeddah from clients-3.jpg" class="responsive-img" alt="">
                </div>
                <div class="card-image">
                    <img src="public/clients/more clients-1.jpg" class="responsive-img" alt="">
                </div>
                <div class="card-image">
                    <img src="public/clients/more clients-2.jpg" class="responsive-img"  alt="">
                </div>
                <div class="card-image">
                    <img src="public/clients/more clients-3.jpg" class="responsive-img" style="border-top:1px solid rgb(133, 133, 133) ;" alt="">
                </div>
                <div class="card-image">
                    <img src="public/clients/Brunei.jpg" class="responsive-img" alt="">
                </div>
            </div>
        </div>
    </section> 
   <i class="material-icons medium" id="scrollTop" onclick="topFunction()">arrow_circle_up</i>

 <!-- footer -->
<?php include_once "views/common/footer.php"?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="public/js/materialize.js"></script>
    <script src="public/js/index.js"></script>
<script>
    // scrolltotop
       //Get the button
       var mybutton = document.getElementById("scrollTop");

       // When the user scrolls down 20px from the top of the document, show the button
       window.onscroll = function() {scrollFunction()};

       function scrollFunction() {
         if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
           mybutton.style.display = "block";
         } else {
           mybutton.style.display = "none";
         }
       }
       
       // When the user clicks on the button, scroll to the top of the document
       function topFunction() {
         document.body.scrollTop = 0;
         document.documentElement.scrollTop = 0;
       }
</script>

</body>
</html>