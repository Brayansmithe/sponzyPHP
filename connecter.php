            <?php
                // Assumez que vous avez déjà une connexion à la base de données ($connexion) établie
 /*                include("connexion.php"); */
                // Vérification si le formulaire a été soumis
                if (isset($_POST['login'])) {
               
            
                    if(!empty($_POST["num_tel"]) AND !empty($_POST["mots_passe"])){
                        // Récupération des données du formulaire (supposez que vous ayez des champs "email" et "mot_de_passe")
                        $num_tel = $_POST["num_tel"];
                        $pass = $_POST["mots_passe"];

                        // Requête SQL pour vérifier si l'utilisateur existe dans la base de données
                        $requete = $con->prepare("SELECT * FROM utilisateurs WHERE num_tel = :num_tel AND mots_passe = :mots_passe");
                        $requete->bindParam(':num_tel', $num_tel);
                        $requete->bindParam(':mots_passe', $pass);
                        $requete->execute();

                        // Vérification de l'existence de l'utilisateur
                        if ($utilisateur = $requete->fetch()) {
                            // Utilisateur trouvé, rediriger vers la page d'accueil
                            $_SESSION["auth"]=$utilisateur;
                            $_SESSION["id"]=$utilisateur["id"];
                            $_SESSION["cle"]=$utilisateur["code_user"];
                            header("Location: home.php");
                            exit();
                        } else {
                            // Utilisateur non trouvé, afficher un message d'erreur (ou effectuer d'autres actions)
                            $flash = '<div class="alert alert-danger text-center">Numero ou mot de passe incorrecte !</div>';
                        }
                    }else {
                        $flash = '<div class="alert alert-danger text-center">Remplir tous les champs svp!</div>';
                    }
                }

?>