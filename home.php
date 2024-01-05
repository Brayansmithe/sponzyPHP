
<?php
  include("session_user.php");
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/register.css">
    <link rel="stylesheet" href="css/Compte.css">
    <script src="https://kit.fontawesome.com/c629837099.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Accueil</title>
</head>
<body class="mt-5 mb-5">


<?php
include('footer.php');
?>

<?php
/* session_start();

if(isset($_SESSION['num_tel'])) {
    echo 'Bienvenue, ' . htmlspecialchars($_SESSION['num_tel']);
} else {
    header("Location: login.php");
    exit();
} */
?>

    <section class="container mt-3 d-lg-flex justify-content-between align-items-center entete  ">
      <div class="entete1"><!-- d class="text-cente"> -->
            
          <svg xmlns="http://www.w3.org/2000/svg" width="65" height="65" viewBox="0 0 65 65" fill="none">
              <circle cx="32.5" cy="32.5" r="30" fill="#291E41" stroke="white" stroke-width="5"/>
          </svg>
      </div>
      <div class="ms-3 text-center entete1">
          <p class="paragra">
              Bienvenue
              <?php

                if (isset($num_tel)) {
                  echo $num_tel;
                }

                
              ?>
          </p>
      </div>
      <div class="ms-3 text-center entete1">
          <p class="paragra">
              
          </p>
      </div>
      
  </section>

    

   <div class="container-fluide">
    <table class="table table-hover mt-2" style="width: 20rem;">
     
      <thead>
        
        <tr>

    </div>


    <div class="container">

      <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="card card1 text-center">
              <img src="assets/img1.jpeg" alt="image 1">
      
                <div class="card-body">
                  <p class="card-text text-white"> quae aspernatur voluptatem, corrupti aut doloribus eius delectus accusamus atque! Sed iure a saepe cupiditate sunt! Dicta repellendus officiis dignissimos! text to build on the card title and make up the bulk of the card's content.</p>
                </div>
      
            </div>
          </div>
          <div class="carousel-item">
            <div class="card card2 mt-2">
              <img src="assets/img2.jpeg" alt="image 1">
    
                  <div class="card-body ">
                    <p class="card-text text-white"> quae aspernatur voluptatem, corrupti aut doloribus eius delectus accusamus atque! Sed iure a saepe cupiditate sunt! Dicta repellendus officiis dignissimos! text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
            </div>
          </div>
        </div>
      </div>
      

        
    </div>
      



    <div class="container ">

      <div class="card">

        <div class="card-header">
          <h3 class="text-white text-center"><u>liste des utilisateurs recent</u> </h3>
        </div>
        <div class="card-body">
          <table class="table table-dark table-striped-columns">
            <thead class="text-cente">
            
              <tr  class="text-cente">
      
                
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
              
              </tr>
            </thead>
            <tbody>
              <tr>
      
                <td class="text-cente"> 1</td>
                <td class="text-cente"> Mark </td>
                <td class="text-cente"> bg </td>
              </tr>
              <tr>
                <td class="text-cente"> 1</td>
                <td class="text-/layouts/css/imagescente"> Mark </td>
                <td class="text-cente"> bg </td>
              </tr> 
            
            
            </tbody>

          </table>

        </div>

      </div>

    </div>
    

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    
</body>
</html>