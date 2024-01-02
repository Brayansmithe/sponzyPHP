
            <?php
                // Assumez que vous avez déjà une connexion à la base de données ($connexion) établie
                include("connexion.php");
                // Vérification si le formulaire a été soumis
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Récupération des données du formulaire (supposez que vous ayez des champs "email" et "mot_de_passe")
                    $nom = $_POST["num_tel"];
                    $pass = $_POST["mots_passe"];

                    // Requête SQL pour vérifier si l'utilisateur existe dans la base de données
                    $requete = $con->prepare("SELECT * FROM utilisateurs WHERE num_tel = :num_tel AND mots_passe = :mots_passe");
                    $requete->bindParam(':num_tel', $nom);
                    $requete->bindParam(':mots_passe', $pass);
                    $requete->execute();

                    // Récupération du résultat
                    $utilisateur = $requete->fetch(PDO::FETCH_ASSOC);

                    // Vérification de l'existence de l'utilisateur
                    if ($utilisateur) {
                        // Utilisateur trouvé, rediriger vers la page d'accueil
                        header("Location: home.php");
                        exit();
                    } else {
                        // Utilisateur non trouvé, afficher un message d'erreur (ou effectuer d'autres actions)
                        echo "Vous n'avez pas de compte enregistrez vous svp";
                    }
                }


                /* include("connexion.php");

                session_start();

                // Vérification si le formulaire a été soumis
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Récupération des données du formulaire (supposez que vous ayez des champs "email" et "mot_de_passe")
                    $nom = $_POST["num_tel"];
                    $pass = $_POST["mots_passe"];

                    $requete = $con->prepare("SELECT * FROM utilisateurs WHERE num_tel = :num_tel AND mots_passe = :mots_passe");
                    $requete->bindParam(':num_tel', $nom);
                    $requete->bindParam(':mots_passe', $pass);
                    $requete->execute();
                    $user = $requete->fetch(PDO::FETCH_ASSOC);

                    if ($user && password_verify($pass, $user['mots_passe'])) {
                        $_SESSION['num_tel'] = $user['num_tel'];
                        $_SESSION['mots_passe'] = $user['mots_passe'];
                
                        header("Location: home.php");
                        exit();
                    } else {
                        echo "Identifiants invalides";
                    }

                } */

?>