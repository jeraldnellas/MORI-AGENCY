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
    background: url(public/img/FAQ1.jpg);
    background-size: cover;
    background-position: center;
    min-height: 250px;
  }
  

  #ask{
  position: relative;
      font-family: 'Poppins', sans-serif;
      font-size: 30px;
      font-weight: bold;
      color: #555;
 
    }

    label#ask{
      top: -20px;
    }
  
  ul li {
    font-family: 'Poppins', sans-serif;

  }
    </style>
    <title>FAQ</title>
</head>
<body>
<header class="main-header">
    <?php include_once "views/common/nav.php"?>
    </header>
    <?php include_once "views/common/sidenav.php"?>

    <section class="section section-faqs">
        <div class="container">
        <div class="row">
     
           <i class="material-icons medium search">search <label id="ask">Ask us anything...</label></i>
     
          <div class="col s12 m12 ">
            <ul class="collapsible z-depth-0">
              <li class="active">
                <div class="collapsible-header"><i class="material-icons">add</i> <b>Do I need a registered business/company in the Philippines before I can recruit employees to work for me?</b></div>
                <div class="collapsible-body"><span>Yes, Philippine laws only allow companies certified by the Department of Labor and Employment (DOLE) to hire employees. Before these companies can be certified by this government agency, they must first meet the eligibility requirement of having a registered business/company here in the Philippines. One of the main reasons behind this legal condition is because DOLE regulates the mandatory benefits, working conditions, and labor rights of employees in the Philippines.</span></div>
              </li>
              <li>
                <div class="collapsible-header"><i class="material-icons">add</i><b>When can we start hiring employees?</b></div>
                <div class="collapsible-body"><span>Employees may be hired as soon as the enterprise has received its registration certificates from the SEC and BIR. After submitting the necessary documents to ITS, within 5-7 business days from the signed agreement, we’ll be sending the first batch of candidates for assessment.</span></div>
              </li>
              <li>
                <div class="collapsible-header"><i class="material-icons">add</i><b>What documents should I submit?</b></div>
                <div class="collapsible-body"><span>We just need proof that your company is registered here in the Philippines. Documents such as SEC Certificate, BIR Certificate, and DTI Permit would be sufficient.</span></div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      </section>

      <!-- footer -->
      <?php include_once "views/common/footer.php"?>


<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="public/js/materialize.js"></script>
<script src="public/js/index.js"></script>
</body>
</html>