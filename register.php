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
    <title>@yield('titrePage')</title>
</head>
<body class="mt-5 mb-5">

<?php
include("connexion.php");
include('Test.php')
?>



<div class="container-fluid ">
<span class="w ">Enregistrement</span>
<button type="button" class="btn btn-primary">FR</button>
</div>

<section  class="mt-5 container d-flex justify-content-center mb-5">
<div class="">
<div class="card mb-5 border  carddim">

  <div class=" ">
                        
    <div class="d-flex justify-content-center card-body">

      
      <form action="Test.php" class="form-data formaction mb-5 mt-3 text-center" method="POST">
       
          <h2 class="w">Créer un compte</h2><br>
          <p class="t">Pour vous enregistrer, veuillez rempir le formulaire suivant</p><br><br>
          <div class="d-flex">
            <input class="inputtext1" type="number" name="num_tel" id="in1" placeholder="Numero de telephone" required><br><br>
          </div>    
          <div class="d-flex d-1 justifu-content-center align-items-center">

               
                  <input class="inputtext1" type="" name="mots_passe" id="" placeholder="Mot de passe" required><br><br>
     
              </div>
          <div class="d-flex">
            <input class="inputtext1" type="number" name="code_parainage" id="" placeholder="Code de parainage" required><br><br>
          </div>
            <input class="btnsReg" type="submit" value="S'enregistrer" class=""><br><br>

          <div class="footer"><p class="w">Vous avez déjà un compte ? <a href="login.php">Connexion</a></p></div>
      </form>

    </div>

  </div>

</div>
</div>
</section>





<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    
</body>
</html>