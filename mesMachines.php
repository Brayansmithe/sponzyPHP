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
include('footer.php');
include("connexion.php");

$requete = $con->prepare("SELECT * FROM utilisateurs WHERE solde_user = 50000");
$requete->execute();

$utilisateur = $requete->fetch(PDO::FETCH_ASSOC);

if ($utilisateur["solde_user"] >= 7500) {
    header("Location: machine.php");
}


?>


    <section class="container mt-3 d-lg-flex justify-content-between align-items-center entete  ">
        <div class="entete1">
            <svg xmlns="http://www.w3.org/2000/svg" width="65" height="65" viewBox="0 0 65 65" fill="none">
                <circle cx="32.5" cy="32.5" r="30" fill="#291E41" stroke="white" stroke-width="5"/>
            </svg>
        </div>
        <div class="ms-3 text-center entete1">
            <p class="paragra">
                Machine Minières
            </p>
        </div> 
        <div class="ms-3 text-center entete1">
            <p class="paragra">
                
            </p>
        </div>
        
    </section>

    <section  class="mt-5 container d-flex justify-content-center">
        <div class="">

            <div class="card mb-5 border  carddim">

                <div class="row g-0 ">

                    <div class="border border-top-0 border-start-0 col-4 d-flex align-items-center justify-content-center">
                        <img src="assets/ma.png" height="600" width="200" class="img-fluid rounded-start" alt="...">
                    </div>

                    <div class="col-8 border border-top-0 border-end-0">
                        
                        <div class="card-body">
                        <h5 class="card-title text-center titre">MTI ViP 1 </h5>

                        <div class="d-flex justify-content-between">
                            <p class="card-text pag">Revenue: </p>
                            <p class="card-text pagor"> 300 <span>F</span></p>
                        </div>

                        <div class="d-flex justify-content-between">
                            <p class="card-text pag">Revenu total: </p>
                            <p class="card-text pagor"> 30 000 <span>F</span></p>
                        </div>

                        <div class="d-flex justify-content-between">
                            <p class="card-text pag">Quantité achatée: </p>
                            <p class="card-text pags"> 1 </p>
                        </div>

                        <div class="d-flex justify-content-between">
                            <p class="card-text pag">Péreiode de validité: </p>
                            <p class="card-text pags"> 100 <span>Jours</span></p>
                            
                        </div>
                        </div>
                    </div>
                    
                </div>
                <div class="card-body d-flex justify-content-between">
                    <div class="text-center d-flex align-self-center money"><p>7 500 </p><span>F</span></div>
                    <div class=" text-end "><a href="machine.php" class="btn btn-success btns1">Actif</a></div>

                </div>
            </div>
        </div>
    </section>





<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    
</body>
</html>