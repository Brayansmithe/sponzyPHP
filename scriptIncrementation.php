<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

                    // Sélectionner les achats des utilisateurs avec les machines correspondantes

                    $requete = $con->prepare('SELECT * FROM `acheters` WHERE id_user = :id_user AND id_machine = :id_machine');
                    $requete->bindParam(':id_user', $id);
                    $requete->bindParam(':id_machine', $idM);
                    $requete->execute();
                    $resultat = $requete->fetch(PDO::FETCH_ASSOC);

                    // Répéter l'opération pendant 100 jours
                    for ($jour = 1; $jour <= 4; $jour++) {

                            
                            $id_utilisateur = $resultat['id_user'];
                            $id_machine = $resultat['id_machine'];

                            // Sélectionner le revenu quotidien de la machine achetée
                            $requeteMachine = $con->prepare("SELECT revenu_jour FROM machines WHERE id = :id_machine");
                            $requeteMachine->bindParam(':id_machine', $id_machine);
                            $requeteMachine->execute();
                            $revenu_jour = $requeteMachine->fetch();

                            $solde_user += $revenu_jour["revenu_jour"];

                            // Mettre à jour le solde de l'utilisateur avec le revenu quotidien de la machine
                            $requeteUpdateSolde = $con->prepare("UPDATE utilisateurs SET solde_user = :solde_user  WHERE id = :id_utilisateur");
                            $requeteUpdateSolde->bindParam(':solde_user', $solde_user);
                            $requeteUpdateSolde->bindParam(':id_utilisateur', $id_utilisateur);
                            $requeteUpdateSolde->execute();


                        // Attente d'une journée avant la prochaine mise à jour (86400 secondes = 24 heures)
                        sleep(2); // Attendre 24 heures avant la prochaine mise à jour
                    }

                    echo "Mises à jour terminées pendant 100 jours !";
                   

                    /* // Sélectionner les achats des utilisateurs avec les machines correspondantes

                    $requete = $con->prepare('SELECT * FROM `acheters` WHERE id_user = :id_user AND id_machine = :id_machine');
                    $requete->bindParam(':id_user', $id);
                    $requete->bindParam(':id_machine', $idM);
                    $requete->execute();
                    $resultat = $requete->fetchAll(PDO::FETCH_ASSOC);

                    // Répéter l'opération pendant 100 jours
                    for ($jour = 1; $jour <= 100; $jour++) {

                            
                            $id_utilisateur = $resultat['id_user'];
                            $id_machine = $resultat['id_machine'];

                            // Sélectionner le revenu quotidien de la machine achetée
                            $requeteMachine = $con->prepare("SELECT revenu_jour FROM machines WHERE id = :id_machine");
                            $requeteMachine->bindParam(':id_machine', $id_machine);
                            $requeteMachine->execute();
                            $revenu_jour = $requeteMachine->fetchColumn();

                            // Mettre à jour le solde de l'utilisateur avec le revenu quotidien de la machine
                            $requeteUpdateSolde = $con->prepare("UPDATE utilisateurs SET solde_user = solde_user + :revenu_jour WHERE id = :id_utilisateur");
                            $requeteUpdateSolde->bindParam(':revenu_jour', $revenu_jour);
                            $requeteUpdateSolde->bindParam(':id_utilisateur', $id_utilisateur);
                            $requeteUpdateSolde->execute();


                        // Attente d'une journée avant la prochaine mise à jour (86400 secondes = 24 heures)
                        sleep(20); // Attendre 24 heures avant la prochaine mise à jour
                    }

                    echo "Mises à jour terminées pendant 100 jours !"; */
?>
