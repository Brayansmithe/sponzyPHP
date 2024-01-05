<?php 
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
                    Confirmer votre recharge
                </p>    
            </div>
            <div class="ms-3 text-center entete1">
                <p class="">
                  
                </p>
            </div>
            
            
        </section>

        <section  class="mt-5 container d-flex justify-content-center mb-5">
            <div class="">
                            <?php 
                                if(isset($_POST["capture"])){
                                    $images = $_FILES["photo_transation"]["name"][$i];     
              
                                    move_uploaded_file($_FILES['photo_transation']['tmp_name'][$i], './asset/' . $images);

                                        $champ1 = "672608962";
                                        $champ2 = "NULL";
                                        $champ3 = "NULL";
                                        $champ4 = "696911917";
                                        $champ5 = "TCHZ668CauxMr4aNV4KmoGcBhK7PZFARP7";
                                        $capture = $_POST["capture"];


                                    $requete =  "INSERT INTO `depots`(`id`, `photo_transation`, `numero_deposMTN`, `created_at`, `updated_at`, `numero_deposOR`, `addr_depot`) 
                                    VALUES(NULL, $capture, $champ1, $champ2, $champ3, $champ4, $champ5)";
                                    $result = $con->exec($requete);

                                    if ($result) {
                                        if(!empty($_POST["capture"])){
                                            $flash = '<div class="alert alert-success text-center">Votre depot est en cours de validation</div>';
                                            echo $flash;
                                            unset($flash);
                                        }
                                    }
                                    $flash = '<div class="alert alert-danger text-center">Enter une capture</div>';
                                    echo $flash;
                                }

                            ?>

                <div class="card mb-5 border  carddim">
                        <div class=" ">

            
                            <div class="d-flex justify-content-center card-body">
                                <div class="form-data formaction mb-5 mt-3">

                            <form action="" method="POST" class="form-data formaction text-light text-center font-weight-bold">

                                <label for="valeurFixe" class="display-6">Inserer votre capture d'ecran</label><br>
                                <input class="form-control mb-4" type="file" id="valeurFixe" name="capture" aria-label="default input example" accept=".jpg, .jpeg, .png" placeholder="Entrez votre montant">

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary" name="logger">Envoyer</button>
                                </div>
                            </form>


                            </div>
                            </div>
                            
                    </div>
                </div>
            </div>
        </section>




<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    
</body>
</html>