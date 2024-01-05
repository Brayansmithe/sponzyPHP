<?php
    include("connexion.php");

    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    if (isset($_SESSION["id"])) {
        $id = $_SESSION["id"];

        $requete = $con->prepare('SELECT * FROM utilisateurs WHERE id = :id');
        $requete->bindParam(':id', $id);
        $requete->execute();
        $utilisateure = $requete->fetch(PDO::FETCH_ASSOC);

    }else{
        header("Location:login.php");
    }
    ?>

<?php



    if (isset($_SESSION["id"])) {
        $id = $_SESSION["id"];
        
        $requete = $con->prepare('SELECT * FROM utilisateurs WHERE id = :id');
        $requete->bindParam(':id', $id);
        $requete->execute();

        $utilisateure = $requete->fetch(PDO::FETCH_ASSOC);
        $nom_user =$utilisateure['nom'];
        $num_tel = $utilisateure['num_tel'];
        $solde=$utilisateure['solde_user'];


        if(isset($_POST["mon_retrait"])){

            $mon_retrait = $_POST["mon_retrait"];

            if($mon_retrait < 4500){
                $flash = '<div class="alert alert-danger text-center"  id="flashMessage">le retrait minimum est de 4500FCFA </div>';


            }else if($mon_retrait > $solde){
                $flash = '<div class="alert alert-danger text-center"  id="flashMessage">solde insufisant veillez recharger </div>';

            }else{

                $insert = "INSERT INTO `retraits` (`id`, `num_user`, `montant_retrait`, `nom_user`, `created_at`)
                    VALUES (NULL, '$num_tel', '$mon_retrait', '$nom_user', CURRENT_TIMESTAMP)";
                    $inserted = $con->exec($insert);

                    if ($inserted) {
                        $flash = '<div class="alert alert-success text-center  id="flashMessage" ">Retrait en attente</div>';
                    } else {
                        $flash = '<div class="alert alert-danger text-center"  id="flashMessage">Erreur lors de l\'insertion dans la base de données</div>';
                    }

                    $nouveau_solde = $solde - $mon_retrait;
                    $requete = "UPDATE `utilisateurs` SET `solde_user` = :nouveau_solde WHERE id = :id";
                    $req = $con->prepare($requete);

                    // Liaison des valeurs aux paramètres de la requête préparée
                    $req->bindValue(':nouveau_solde', $nouveau_solde, PDO::PARAM_INT);
                    $req->bindValue(':id', $id, PDO::PARAM_INT);

                    // Exécution de la requête
                    if ($req->execute()) {
                        $flash = '<div class="alert alert-success text-center" id="flashMessage">Retrait en attente</div>';
                         header("Location:compte.php");

                    }else {

                        $flash = '<div class="alert alert-danger text-center">Erreur lorsretrait</div>';
                    }


            
            }
        }
    }
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
    <title>Retrait</title>
</head>
<body class="mt-5 mb-5">
<?php
include('footer.php');
?>


<section class="container d-flex justify-content-between align-items-center entete  ">
            <div class="">
                <a href="compte.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="20" viewBox="0 0 13 20" fill="none">
                        <path d="M9.98615 0.775511L9.988 0.777443L11.31 2.16338C11.6765 2.54769 11.6739 3.17453 11.3118 3.55014L11.3096 3.55245L5.67662 9.47027L5.34815 9.81536L5.67698 10.1601L11.3158 16.0718C11.6824 16.4561 11.6798 17.0829 11.3177 17.4585L11.3151 17.4613L9.99385 18.8526C9.99371 18.8527 9.99358 18.8528 9.99345 18.853C9.63951 19.2236 9.08182 19.2206 8.73635 18.8545L8.73451 18.8526L0.779314 10.5124L0.77748 10.5105C0.408226 10.1275 0.408133 9.50059 0.773459 9.11759L8.72866 0.777443C9.08257 0.406408 9.64055 0.409276 9.98615 0.775511Z" fill="white" stroke="white"/>
                    </svg>
                </a>
            </div>
            <div class="">
                <p class="paragra">
                    Page Retrait
                </p>
            </div>
            <div class="ms-3 text-center entete1">
                <p class="paragra">
                    
                </p>
            </div>

         
        </section>



     <?php if ($utilisateure) {
    ?>


        <section  class="mt-5 container d-flex justify-content-center mb-5">
            <div class="">



                <div class="card mb-5 border img large-95  ">
                        <div class="">
                            
                            <div class="d-flex justify-content-between card-body">
                                
                                <div class="">
                                    <p class="paragras ms-3">
                                        Mon Solde ( FCFA )
                                    </p>

                                    <p class="paragra ms-3">
                                    <?php echo $utilisateure['solde_user']; ?>
                                    </p>
                                </div>
                                
                            </div>
                            
                    </div>
                </div>

                <div class="card mb-5 border  carddim">
                    <div class="d-flex justify-content-center card-body">
                        
                        <div class="">
                            
                            <div class=" formaction mb-5 ">
                                <h1 class="mb-5 pags2"> <i> Montant Minimum de retrait: <b> 4500 FCFA</b></i></h1>
                                <div class="d-flex justify-content-between mb-3">
                                    <p class="pags1">Nom: </p>
                                    <p class="texte1 "> 
                                    <p class="texte1 "><?php echo $utilisateure['nom']; ?></p>
                                    </p>
                                    <p> </p>
                                </div>

                                <div class="d-flex justify-content-between mb-3">
                                    <p class="pags1">Prénom: </p>
                                    <p class="texte1 "><?php echo $utilisateure['prenom']; ?></p>
                                    <p> </p>
                                </div>

                                <div class="d-flex justify-content-between mb-3">
                                    <p class="pags1">Moyen de retrait: </p>
                                    <p class="texte1 "> <?php echo $utilisateure['moyen_retrait']; ?></p>
                                    <p> </p>
                                </div>

                                <div class="d-flex justify-content-between mb-5">
                                    <p class="pags1">Numero du retrait: </p>
                                    <p class="texte1 ">  <?php echo $utilisateure['num_retrait']; ?> </p>
                                    <p> </p>
                                </div>

                            </div>

                            <?php }  ?>

                            <?php 

                                if (isset($flash)) {
                                echo $flash;
                                unset($flash);
                                }
                                ?>

                            <div class="mt-5" >


                       
                                <form action="" method="POST"  class="form-data formaction mb-5 mt-5" id="bas">
                                    <input class="form-control inputtext mt-5 mb-4" name="mon_retrait" type="number" placeholder="Entrer le montant de votre retrait" aria-label="default input example" required>
                                    
                                    <button class="btn btn-primary btns2" type="submit">Retiré</button>

                                 
                                </form>  
                              
                            </div>

                            
                        </div>
                        
                    </div>

                </div>
        
            </div>
        </section>


       <?php include('footer.php'); ?>

       <script>
            // Sélection du message flash
            var flashMessage = document.getElementById('flashMessage');

            // Cacher le message après 5 secondes (5000 millisecondes)
            if (flashMessage !== null) {
                setTimeout(function() {
                    flashMessage.style.display = 'none';
                }, 10000); // Durée en millisecondes (5 secondes)
            }
            </script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    
</body>
</html>