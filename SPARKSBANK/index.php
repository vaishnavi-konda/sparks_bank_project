<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Basic Banking System</title>
  </head>

  <body>
    <div class="col-sm-12 col-md img text-center">
                <img src="img/bank2.png" class="img-fluid pt-2" style="top:-25%;right:2%;width: 40%; position: absolute;">
              </div>
  <?php
     include 'navbar.php';
  ?>
  
      <div class="container-fluid">
      <!-- Introduction section -->
            <div class="row intro py-1" style="background-color : #D8D3CD; height: 350px; ">
              <div class="col-sm-09 col-md">
                <div  class="heading  my-3" style="text-align: center; top: 20%; left: 40%; position: absolute; ">
                
                  <h2><strong>Welcome to </strong></h3>
                  <h1><strong>SPARKS BANK</strong></h2>

                  <p><strong>We are with you,for a long future</strong></p>
                  </div>
                  <div style="top: 80%; position: absolute;">
                  <h5><strong>Website:</strong> www.sparksbank.com</h5>
                  <h5><strong>E-mail:</strong> sparksbank@gmail.com</h5>
                </div>
              </div>
            
            </div>
           
            

      <!-- Activity section -->
            <div class="row activity text-center" style="background-color: #E0ECE4;">
                  <div class="col-md act">
                    <img src="img/user3.png" class="img-fluid" style="width: 64.8%;">
                    <br>
                    <a href="createuser.php"><button style="background-color : #2785C4;">Create a User</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/transfer1.png" class="img-fluid" style="width: 96.5%;">
                    <br>
                    <a href="transfermoney.php"><button style="background-color : #2785C4;">Make a Transaction</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/history.png" class="img-fluid" style="width: 64.5%;">
                    <br>
                    <a href="transactionhistory.php"><button style="background-color : #2785C4;">Transaction History</button></a>
                  </div>
            </div>
      </div>
    
      
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>