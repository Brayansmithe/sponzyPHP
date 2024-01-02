
        <?php 

            try{
                include("connexion.php");

                if(isset($_POST["num_tel"]) && isset($_POST["mots_passe"]) && isset($_POST["code_parainage"])){

                    $nom = $_POST["num_tel"];
                    $pass = $_POST["mots_passe"];
                    $sexe = $_POST["code_parainage"];
             
                    /* $pass = password_hash($password, PASSWORD_DEFAULT);
 */
                    $requete = "INSERT INTO `utilisateurs` (`id`,`num_tel`, `mots_passe`, `code_parainage`)
                    VALUES (NULL,'$nom', '$pass', '$sexe')";
                    $requete = $con->exec($requete);
                    echo("insertion reussie");
                    header("Location: login.php");
                    exit();
                }
                }catch(PDOException $e){
                echo("echec de la connection: ".$e->getMessage());
            }
        ?>
       