<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="icon" type="icon" href="public/img/logo.png">
    <link rel="stylesheet" href="public/css/materialize.css">
    <link rel="stylesheet" href="public/css/index.css">
    <style>
        .main-header {
         background: url(public/img/services1.jpg);
         background-size: cover;
         background-position: center;
   
       }
       div.services h1 {
        position: relative;
         font-size: 50px;
         font-family: 'Poppins', sans-serif;
         font-weight: bolder;
         color: bisque;
         top: -40px;
       }
       p  {
         font-family: 'Poppins', sans-serif;
         font-size: 16px;
       }
         </style>
    <title>Services</title>

    </head>
    <body>
    <!-- header -->
    <header class="main-header">
    <?php include_once "views/common/nav.php"?>
</header>
<!-- sidenav -->
<?php include_once "views/common/sidenav.php"?>


    <section class=" section section-services-content">
        <div class="container">
           <divc class="row center">
            <div class="col s12">
                <p><b>Mori International Agency Incorporation</b> is reputable and stable veteran agency in the field of overseas recruitment and manpower deployment in the Philippines. Being one among the most respectable agencies, Mori is consistently listed in good standing by the Philippine Overseas Employment Administration (POEA).</p>
                <p>With long years of established reliability and credibility, Mori provides manpower staffing services globally in the fields of:
                    <b>ARCHITECTURE AND DESIGN, ELECTRO-MECHANICAL, CIVIL ENGINEERING, VERTICAL AND HORIZONTAL CONSTRUCTIONS, OPERATIONS AND MAINTENANCE, BUSINESS AND FINANCE, HOTELS, RESORTS AND RESTAURANTS, COMPUTERS AND COMMUNICATION, INFORMATION TECHNOLOGY, PETROCHEMICAL, GAS AND OIL, MANUFACTURING AND AGRICULTURE, HEAVY EQUIPMENT AND MECHANICS AND THE ENTERTAINMENT INDUSTRY.</b>
                </p>
                <p>Our entertainment division is fully equipped with the latest and state-of-the-art training facilities and manned by world-class choreographers. We can provide with internationally tested and acclaimed talents and performing artists for five-star hotels and nightlife establishments at competitive package. Many of our performing artist are engaged and are being enjoyed at by the demanding and discriminating taste of multinational clients in classy and popular entertainment places all over the major Asian cities in Japan, China, Taiwan, Hong Kong, Singapore, Malaysia, Brunei, etc. etc.</p>
                <p>Let MORI be a major solution to your staffing problems thru the reliability and professionalism of its recruited OVERSEAS FILIPINO WORKERS (OFWs).
                </p>
                <p>Avail of our services and discover the benefits that you can reap from the mutually profitable and happy partnership that we offer!
                </p>
            </div>
           </div>
        </div>
    </section> 

   <footer>
   <?php include_once "views/common/footer.php"?>
   </footer>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="public/js/materialize.js"></script>
<script src="public/js/index.js"></script>

</body>
</html>