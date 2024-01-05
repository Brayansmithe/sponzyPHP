<?php /* 
    error_reporting(E_ALL);
    ini_set('display_errors', 1); */

    include('footer.php');
    include("connexion.php");
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
    <title>Depot</title>
</head>
<body class="mt-5 mb-5">

        <section class="container mt-3 d-flex justify-content-between align-items-center entete  ">
            <div class="">
                <a href="retrait.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="20" viewBox="0 0 13 20" fill="none">
                        <path d="M9.98615 0.775511L9.988 0.777443L11.31 2.16338C11.6765 2.54769 11.6739 3.17453 11.3118 3.55014L11.3096 3.55245L5.67662 9.47027L5.34815 9.81536L5.67698 10.1601L11.3158 16.0718C11.6824 16.4561 11.6798 17.0829 11.3177 17.4585L11.3151 17.4613L9.99385 18.8526C9.99371 18.8527 9.99358 18.8528 9.99345 18.853C9.63951 19.2236 9.08182 19.2206 8.73635 18.8545L8.73451 18.8526L0.779314 10.5124L0.77748 10.5105C0.408226 10.1275 0.408133 9.50059 0.773459 9.11759L8.72866 0.777443C9.08257 0.406408 9.64055 0.409276 9.98615 0.775511Z" fill="white" stroke="white"/>
                    </svg>
                </a>
            </div>
            <div class="">
                <p class="paragra">
                    Effectuer votre recharge
                </p>    
            </div>
            <div class="ms-3 text-center entete1">
                <p class="">
                  
                </p>
            </div>
            
            
        </section>
        <div class="container-fluid text-center mt-5">
            <h2 class="text-light ">
                <u>Consigne de recharge</u>
            </h2>
        </div>

        <div class="container text-light text-center mt-5">

        

            <h5 class="font-weight-bold">- Montant minimum de recharge：7000XAF</h5>
            <h5 class="font-weight-bold">- Veuillez copier le numéro de compte ci-dessus pour finaliser le paiement.</h5>
            <h5 class="font-weight-bold">- Utilisez toujours le numéro de paiement disponible ou contactez le service client pour un numéro de téléphone</h5>
            <h5 class="font-weight-bold">- Si le montant de la recharge est inférieure à 7000xaf votre compte ne sera pas crédité avec succès</h5>
            <h5 class="font-weight-bold">- Veillez joindre le service de clients si votre recharge n'arrive pas après 30 minutes</h5>
            <h5 class="font-weight-bold">- Évitez de soumettre votre preuve de paiement à plus de deux reprises.</h5>
            <h5 class="font-weight-bold">- Ne partagez pas votre preuve de paiement même pas avec vos amis. Une preuve de paiement envoyé pour deux comptes différents sera considéré comme fraude</h5>

        </div>


        <section  class="mt-5 container d-flex justify-content-center mb-5">
            <div class="">



                <div class="card mb-5 border  carddim">
                        <div class=" ">
                            
                            <div class="d-flex justify-content-center card-body">
                                <div class="form-data formaction mb-5 mt-3">
                                    <h3 class="text-light text-center">
                                        Copier le numero de depot suivant
                                    </h3><br>
                            <?php

                                    $table = "depots";
                                    $champ = "numero_deposMTN";

                                    $requete = $con->query("SHOW COLUMNS FROM $table LIKE '$champ'");
                                    $colonne = $requete->fetch(PDO::FETCH_ASSOC);

                                    // La valeur par défaut se trouve dans la colonne "Default" du résultat
                                    $valeur_par_defaut1 = $colonne['Default'];

                                    $table = "depots";
                                    $champ = "numero_deposOR";

                                    $requete = $con->query("SHOW COLUMNS FROM $table LIKE '$champ'");
                                    $colonne = $requete->fetch(PDO::FETCH_ASSOC);

                                    // La valeur par défaut se trouve dans la colonne "Default" du résultat
                                    $valeur_par_defaut2 = $colonne['Default'];

                                    $table = "depots";
                                    $champ = "addr_depot";

                                    $requete = $con->query("SHOW COLUMNS FROM $table LIKE '$champ'");
                                    $colonne = $requete->fetch(PDO::FETCH_ASSOC);

                                    // La valeur par défaut se trouve dans la colonne "Default" du résultat
                                    $valeur_par_defaut3 = $colonne['Default'];
                            
                            ?>

                            <form action="confirm_depot.php" method="post" class="form-data formaction text-light text-center font-weight-bold">
                                <label for="choix" class="display-6">Choisissez une option</label>

                                <select class="form-select form-select-lg inputtext texte1"  name="choix" id="choix" aria-label="Large select example" required onchange="updateInput()">
                                        <option disabled>Entrez votre moyen de retrait</option>
                                        <option value="option1">MTN</option>
                                        <option value="option2">Orange</option>
                                        <option value="option3">USDT</option>
                                </select>

                                <br>

                                <label for="valeurFixe" class="display-6">Numero de depot</label>
                                <input class="form-control inputtext mb-4 text-dark" type="" id="valeurFixe" name="valeurFixe" aria-label="default input example" readonly>

                                <label for="valeurFixe" class="display-6">Montant du  depot</label>
                                <input class="form-control inputtext mb-4" type="number" id="valeurFixe" name="valeurFixe" aria-label="default input example" placeholder="Entrez votre montant">

                                <br>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary" name="logger">Envoyer</button>
                                </div>
                            </form>

                            <?php 
                               /*  if(!empty($_POST["capture"])){
                                    $flash = '<div class="alert alert-success">Votre depot est en cours de validation</div>';
                                } */
                            ?>

                            <script>
                                function updateInput() {
                                    var choix = document.getElementById("choix").value;
                                    var valeurFixeInput = document.getElementById("valeurFixe");

                                    // Mettez ici les valeurs spécifiques pour chaque option
                                    if (choix === "option1") {
                                        valeurFixeInput.value = <?= $valeur_par_defaut1 ?>;
                                    } else if (choix === "option2") {
                                        valeurFixeInput.value = <?= $valeur_par_defaut2 ?>;
                                    } else if (choix === "option3") {
                                        valeurFixeInput.value = <?= $valeur_par_defaut3 ?>;
                                    }
                                }

                                // Appeler la fonction updateInput() pour initialiser la valeur au chargement de la page
                                updateInput();
                            </script>


                                </div>
                            </div>
                            
                    </div>
                </div>
            </div>
        </section>




<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    
</body>
</html>