
        <?php 
        /* error_reporting(E_ALL);
        ini_set("display_errors", 1); */

            
                include("connexion.php");
        

            if (isset($_POST['inscrire'])) {

                if (isset($_GET["p"])) {
                    $cles=$_GET["p"];

                    if(!empty($_POST["num_tel"]) && !empty($_POST["mots_passe"]) && !empty($_POST["mots_passe_confirme"]) ){

                        $num_tel = $_POST["num_tel"];
                        $pass = $_POST["mots_passe"];
                        $cpass = $_POST["mots_passe_confirme"];
                        $code_parainage = $_POST["code_parainage"];
    
                        $requete = $con->prepare("SELECT COUNT(*) FROM utilisateurs WHERE num_tel = :num_tel");
                        $requete->execute([':num_tel' => $num_tel]);
                        $donne = $requete->fetchColumn();
    
                        
                        if ($donne != 1) {
                            // Le numéro de téléphone n'existe déjà
                        
                        
                            if ($pass === $cpass) {

                                
                                $cle = rand(1000,10000);
                                $date = date("Y-m-d H:i:s");
                                $insert = "INSERT INTO `utilisateurs` (`id`,`num_tel`, `mots_passe`, `code_parainage`, `code_user`, `created_at`)
                                VALUES (NULL,'$num_tel', '$pass', '$cles', '$cle', '$date')";
                                $insert = $con->exec($insert);
    
                                $flash = '<div class="alert alert-succes text-center">Vous etes inscrit!</div>';
                                header("Location: login.php");
                               /*  exit(); */

                            }else {
                                $flash = '<div class="alert alert-danger text-center">Les deux mots de passes ne correspondent pas !</div>';
                            }
                        }else {
                            $flash = '<div class="alert alert-danger text-center">Le numero de telephone existe deja</div>';
                        }
                    }else {
                        $flash = '<div class="alert alert-danger text-center">Tous les champs sont obligatoires</div>';
                    }


                }else {
                    if(!empty($_POST["num_tel"]) && !empty($_POST["mots_passe"]) && !empty($_POST["mots_passe_confirme"]) && empty($_POST["code_parainage"])){

                        $num_tel = $_POST["num_tel"];
                        $pass = $_POST["mots_passe"];
                        $cpass = $_POST["mots_passe_confirme"];
                        $code_parainage = $_POST["code_parainage"];

                        var_dump($code_parainage); 

                        $requete = $con->prepare("SELECT COUNT(*) FROM utilisateurs WHERE num_tel = :num_tel");
                        $requete->execute([':num_tel' => $num_tel]);
                        $donne = $requete->fetchColumn();
                        
                        if ($donne != 1) {
                            // Le numéro de téléphone n'existe déjà
                        
                        
                            if ($pass === $cpass) {
                                $cle = rand(1000,10000);
                                $date = date("Y-m-d H:i:s");
                                $insert = "INSERT INTO `utilisateurs` (`id`,`num_tel`, `mots_passe`, `code_parainage`, `code_user`, `created_at`)
                                VALUES (NULL,'$num_tel', '$pass', '$code_parainage', '$cle', '$date')";
                                $insert = $con->exec($insert);
    
                                $flash = '<div class="alert alert-succes text-center">Vous etes inscrit!</div>';
                                header("Location: login.php");
                                exit();
                            }else {
                                $flash = '<div class="alert alert-danger text-center">Les deux mots de passes ne correspondent pas !</div>';
                            }
                        }else {
                            $flash = '<div class="alert alert-danger text-center">Le numero de telephone existe deja</div>';
                        }
                    }else {
                        $flash = '<div class="alert alert-danger text-center">Tous les champs sont obligatoires</div>';
                    }
                }
               
            
                

            }
        ?>
       