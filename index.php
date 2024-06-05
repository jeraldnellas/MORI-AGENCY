<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="icon" href="public/img/logo.png">
  <link rel="stylesheet" href="public/css/materialize.min.css">
  <link rel="stylesheet" href="public/css/index.css">
  <style>
    .parallax{
background-image: url(public/img/commitment.jpg);
height: 400px;
background-attachment: fixed;
background-position: center;
background-repeat: no-repeat;
background-size: cover;
}
.parallax-2{
background-image: url(public/img/parallax.jpg);
height: 400px;
background-attachment: fixed;
background-position: center;
background-repeat: no-repeat;
background-size: cover;


}
  </style>
  <title>Mori International Agency Corp.</title>
</head>
<body>
  <!-- header -->
<?php include_once "views/common/header.php"?>

  <!-- nav -->
  <?php include_once "views/common/nav.php"?>

  <!-- sidenav -->
  <?php include_once "views/common/sidenav.php"?>

 <!-- mission vision -->
 <section class="section section-misvis grey lighten-4">
  <div class="container">
    <div class="row">
      <div class="col s12 l4">
        <div class="card-panel z-depth-0">
          <div class="card-content center">
            <i class="material-icons large green-text">ads_click</i>
            <h5>OUR MISSION</h5>
            <P class="truncate">To serve as conduits by putting together our service plans, concerted efforts and...</P>    
            <a href="#mission" class="btn-flat blue darken-4 white-text modal-trigger">read more</a>
          </div>
        </div>
      </div>
      <div class="col s12 l4 offset-s4" style="margin-left: 0;">
        <div class="card-panel z-depth-0">
          <div class="card-content center">
            <i class="material-icons large green-text">remove_red_eye</i>
            <h5>OUR VISION</h5>
            <P class="truncate">The geographical, political, social, technological and economic disparities of the...</P>    
            <a href="#vision" class="btn-flat blue darken-4 white-text modal-trigger">read more</a>
          </div>
        </div>
      </div>
      <div class="col s12 l4">
        <div class="card-panel z-depth-0">
          <div class="card-content center">
            <i class="material-icons large green-text">volunteer_activism</i>
            <h5>OUR COMMITMENT</h5>
            <P class="truncate">To do everything humanly and legally possible to ensure the prompt, timely and efficient...</P>    
            <a href="#commit" class="btn-flat blue darken-4 white-text modal-trigger">read more</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- modal mission vision -->
<div class="modal" id="mission">
<div class="modal-content center">
  <span class="material-icons modal-close right">
    highlight_off
    </span>
  <i class="material-icons large green-text">ads_click</i>
  <h5>OUR MISSION</h5>
  <P>To serve as conduits by putting together our service plans, concerted efforts and resources; utilizing time-saving and cost-effective dynamic technological advances to ensure that we prioritize initiatives that are truly important to our clients and to their work force.</P>    
</div>
</div>
<div class="modal" id="vision">
<div class="modal-content center">
  <span class="material-icons modal-close right">
    highlight_off
    </span>
  <i class="material-icons large green-text">remove_red_eye</i>
  <h5>OUR VISION</h5>
  <p>The geographical, political, social, technological and economic disparities of the countries worldwide and the needs of overseas business establishments for expat workers to man their operations are great realities.</p>
  <p>And the global competitive advantage of the skills, competence and reliability of professional overseas Filipino workers are excellent solution possibilities.</p>  
</div>
</div>
<div class="modal" id="commit">
<div class="modal-content center">
  <span class="material-icons modal-close right">
    highlight_off
    </span>
  <i class="material-icons large green-text">volunteer_activism</i>
  <h5>OUR COMMITMENT</h5>
  <p>To do everything humanly and legally possible to ensure the prompt, timely and efficient delivery of employment services to obtain our clients’ performance approval.</p>            
</div>
</div>

<!-- PARALLAX -->
<section class="section parallax">
  <div class="container">
    <div class="row">
      <div class="col s12 m10 offset-m1 center" id="parallax-content">
        <h5 class="center white-text">Believe that there are no limitations, no barriers to your success – you will be empowered and you will achieve. </h5>
       
        <a href="" class="btn-flat blue darken-4 white-text">Apply now!</a>
      </div>
    </div>
  </div>
</section>
<!-- testimony -->
<?php include_once "views/common/testimony.php"?>

  <section class="section parallax-2">
    <div class="container">
      <div class="row">
        <div class="col s12 m10 offset-m1 center" id="parallax-content">
          <h5 class="center white-text">We can never fall short when it comes to recruiting, hiring, maintaining and growing our workforce. It is the employees who make our organization’s success a reality. </h5>
          <a href="" class="btn-flat blue darken-4 white-text">Apply now!</a>
        </div>
      </div>
    </div>
  </section>
<!-- map contacts -->
<?php include_once "views/common/map.php"?>




  <!-- footer -->
<?php include_once "views/common/footer.php"?>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="public/js/materialize.js"></script>
  <script src="public/js/index.js"></script>
</body>
</html>