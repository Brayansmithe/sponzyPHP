<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

                    $solde_user -= $row["cout_machine"];/* 
                    $qte= $row["quatiter_achetable"] - 1 ; */

                    echo $row["quatiter_achetable"];
                    echo $solde_user ;

                    
                    $date = date("Y-m-d H:i:s");
                    $insert = "INSERT INTO `acheters` (`id`,`id_user`, `id_machine`,  `created_at`, `updated_at`)
                    VALUES (NULL,'$id', '$idM', '$date', '$date')";
                    $insert = $con->exec($insert);

                    /* $requete = $con->prepare("UPDATE machines SET quatiter_achetable = :quatiter_achetable, updated_at = :updated_at WHERE id = :idM");
                    $requete->bindParam(':quatiter_achetable', $qte);
                    $requete->bindParam(':updated_at', $date);
                    $requete->bindParam(':idM', $idM);
                    $requete->execute(); */

                    $requete = $con->prepare("UPDATE utilisateurs SET solde_user = :nouveau_solde, updated_at = :updated_at WHERE id = :id_utilisateur");
                    $requete->bindParam(':nouveau_solde', $solde_user);
                    $requete->bindParam(':updated_at', $date);
                    $requete->bindParam(':id_utilisateur', $id);
                    $requete->execute();

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
