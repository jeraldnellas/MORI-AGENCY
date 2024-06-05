<?php
include_once "db/db_con.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> ]<link rel="icon" type="icon" href="public/img/logo.png">
    <link rel="stylesheet" href="public/css/materialize.min.css">
    <link rel="stylesheet" href="public/css/index.css">
    <title>Job Openings</title>
    <style>
        .title{
            margin-top: 0;
        }
        .jobposting{
            width: 100%;
        }
    </style>
</head>
<body>

<!-- nav -->
<?php include_once "views/common/nav.php"?>

<!-- sidenav -->
<?php include_once "views/common/sidenav.php"?>

<!-- job openings -->
<br><br><br><br><br>
<div class="container jobposting">
    <?php 
    $query = "SELECT * FROM `mori_jobs_list`";
    $query_run = mysqli_query($con, $query);


    if(mysqli_num_rows($query_run) >0){
        foreach($query_run as $job_lists);{
            ?>
            <div class="row">
        <div class="col s12 l5">
            <img src="public/img/slides-1.jpg"  alt="" class="responsive-img">
        </div>
        <div class="col s12 l7">
            <h2 class="employer"><?= $job_lists['employer'];?></h2>
            <p><?= $job_lists['country'];?></p>
            <p><?= $job_lists['date_interview'];?></p>
            <p><?= $job_lists['description'];?></p>
        </div>
    </div>
            <?php
        }

    }else{
        echo "NO RECORDS FOUND</h5>";
    }
    ?>
    
    

</div>



  <!-- footer -->
  <?php include_once "views/common/footer.php"?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="public/js/materialize.js"></script>
<script src="public/js/index.js"></script>
</body>
</html>