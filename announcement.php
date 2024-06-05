<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="icon" href="public/img/logo.png">
    <link rel="stylesheet" href="public/css/materialize.css">
    <link rel="stylesheet" href="public/css/index.css">
    <style>
    .main-header {
    background: url(public/img/announcement1.jpg);
    background-size: cover;
    background-position: center;
  }
    </style>
    <title>Announcement</title>
</head>
<body>
    <header class="main-header">
        <?php include_once "views/common/nav.php"?>
      </header>

  <!-- sidenav -->
  <?php include_once "views/common/sidenav.php"?>


  
    <div class="container announcement-content">
        <div class="row">
            <div class="col s12 m5 push-l2 right">
                     
                      <div class="fb-page" data-href="https://www.facebook.com/moriintlagencycorp/" data-tabs="timeline, events" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true"><blockquote cite="https://www.facebook.com/moriintlagencycorp/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/moriintlagencycorp/">Mori International Agency Corporation</a></blockquote></div>
            </div>
            <div class="col s12 m7 pull-l1 content">
                <p class="flow-text">Latest Announcement...  <span class="material-icons left">campaign </span></p> 
                <label for="" id="time"></label> <br>
                <span class="flow-text purple-text">Job Interview for Mcdonald Qatar</span> <br>
                <span>Room 1, Ground Floor, Merchant Building Center, Arquiza Street, Ermita Manila</span><br>
                <span class="yellow">Position Available: Service Crew, McCafe Crew, Rider</span> <br>
                <span>Apply online  <a href="">click the link here!</a></span>
                <li class="divider"></li> <br>
            </div>
            <div class="col s12 m7 pull-l1 content">
                <label for="">June 28, 2022 Sunday</label> <br>
                <span class="flow-text purple-text">Job Interview for Mcdonald Qatar</span> <br>
                <span>Room 1, Ground Floor, Merchant Building Center, Arquiza Street, Ermita Manila</span><br>
                <span class="yellow">Position Available: Service Crew, McCafe Crew, Rider</span> <br>
                <span>Apply online  <a href="">click the link here!</a></span>
                <div class="divider"></div>
            </div>
        </div>
      </div>
        <!-- footer -->
        <?php include_once "views/common/footer.php"?>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="public/js/materialize.js"></script>
    <script src="public/js/index.js"></script>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v14.0" nonce="iOShdnbz"></script>
</body>
</html>