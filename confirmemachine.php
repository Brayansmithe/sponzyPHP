        <?php

            error_reporting(E_ALL);
            ini_set("display_errors", 1);

            include('session_user.php');

        ?>
        <?php

            $idM=$_GET["p"];

            $result = $con->query('SELECT * FROM `machines` WHERE id = "'.$idM.'"');

            $row = $result->fetch();

            include('confirmScript.php');

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
    <title>Confirmez votre Achat</title>
</head>
<body class="mt-5 mb-5">
<?php
include('footer.php');
?>



    <section class="container mt-3 d-lg-flex justify-content-between align-items-center entete  ">
        <div class="entete1">
            <a href="machineMine.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="20" viewBox="0 0 13 20" fill="none">
                        <path d="M9.98615 0.775511L9.988 0.777443L11.31 2.16338C11.6765 2.54769 11.6739 3.17453 11.3118 3.55014L11.3096 3.55245L5.67662 9.47027L5.34815 9.81536L5.67698 10.1601L11.3158 16.0718C11.6824 16.4561 11.6798 17.0829 11.3177 17.4585L11.3151 17.4613L9.99385 18.8526C9.99371 18.8527 9.99358 18.8528 9.99345 18.853C9.63951 19.2236 9.08182 19.2206 8.73635 18.8545L8.73451 18.8526L0.779314 10.5124L0.77748 10.5105C0.408226 10.1275 0.408133 9.50059 0.773459 9.11759L8.72866 0.777443C9.08257 0.406408 9.64055 0.409276 9.98615 0.775511Z" fill="white" stroke="white"/>
                    </svg>
                </a>
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

        <?php
            if (isset($flash)) {
                echo $flash;
                unset($flash);
              }
        ?>
            <div class="card mb-5 border  carddim">

                <div class="row g-0">

                    <div class="col-4 d-flex align-items-center justify-content-center bare2">
                        <img src="assets/<?= $row["image"]; ?>" height="600" width="200" class="img-fluid rounded-start" alt="...">
                    </div>

                    <div class="col-8 bare1">
                        
                        <div class="card-body ">
                            <h5 class="card-title text-center titre"><span name="nomMachine"><?= $row["nomMachine"]; ?></span> </h5>

                            <div class="d-flex justify-content-between">
                                <p class="card-text pag">Revenue: </p>
                                <p class="card-text pagor"><span name="revenu_jour"><?= $row["revenu_jour"]; ?> </span> <span>F</span></p>
                            </div>

                            <div class="d-flex justify-content-between">
                                <p class="card-text pag">Revenu total: </p>
                                <p class="card-text pagor"><span name="revenu_total"><?= $row["revenu_total"]; ?></span> <span>F</span></p>
                            </div>

                            <div class="d-flex justify-content-between">
                                <p class="card-text pag">Limite d’achat: </p>
                                <p class="card-text pags"> <?= $row["quatiter_achetable"] ?></p>
                            </div>

                            <div class="d-flex justify-content-between">
                                <p class="card-text pag">Péreiode de validité: </p>
                                <p class="card-text pags"><span name="nombre_jour_valide"><?= $row["nombre_jour_valide"]; ?> </span> <span>Jours</span></p>   
                            </div>

                        </div>
                    </div>
                    
                </div>

                <div class="card-body d-flex justify-content-between">
                    <div class="text-center d-flex align-self-center money"><p name="prix"><span name=""><?= $row["cout_machine"]; ?> </span>  </p><span>F</span></div>
                    
                    <form action="" method="post">
                        <div class=" text-end "><input type="submit" class="btn btn-primary btns" name="confirm" value="Confirmer"></div>
                    </form>

                </div>

            </div>

           
        </div>
    </section>








<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    
</body>
</html>