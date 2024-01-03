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
    <title>Connexion</title>
</head>
<body class="mt-5 mb-5">

<?php
include("connexion.php");
include("connecter.php");

?>



  <div class="container-fluid ">
    <span class="w">Connexion</span>
    <button type="button" class="btn btn-primary">FR</button>
  </div>
  
  <section  class="mt-5 container d-flex justify-content-center mb-5">
    <div class="">
      <div class="card mb-5 border  carddim">
  
        <div class=" ">
                              
          <div class="d-flex justify-content-center card-body">
  
    
            <form action="" method="post">


              <h2 class="w">Heureux de vous revoir</h2><br>
              <p class="t">Pour vous connectez, veuillez rempir le formulaire</p><br><br>
              <?php 
                if (isset($flash)) {
                  echo $flash;
                  unset($flash);
                }
              ?>
              <input type="number" class="inputtext1" name="num_tel" id="" placeholder="Numero de telephone" ><br><br>
              <input type="password" class="inputtext1" name="mots_passe" id="" placeholder="Mot de passe" ><br><br>
              <input type="submit" value="Se connecter" name="login" class="btnsReg"><br><br>

              <p class="w">Vous n'avez pas de compte ? <a href="register.php">S'inscrire</a></p>

            </form>
            
          </div>
        </div>
      </div>
    </div>
  </section>
    





<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    
</body>
</html>.