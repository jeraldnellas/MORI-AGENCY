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
    background: url(public/img/contactus.jpg);
    background-size: cover;
    background-position: center;
  }
    </style>
    <title>Contact us</title>
</head>
<body>
    <header class="main-header">
    <?php include_once "views/common/nav.php"?>
    </header>
    <?php include_once "views/common/sidenav.php"?>
    
    <!-- map -->
    <?php include_once "views/common/map.php"?>

   <!-- footer -->
    <?php include_once "views/common/footer.php"?>


<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="public/js/materialize.js"></script>
<script src="public/js/index.js"></script>
</body>
</html>