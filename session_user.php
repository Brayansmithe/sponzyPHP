<?php
  include("connexion.php");
  if (isset($_SESSION["id"])) {
    $id = $_SESSION["id"];
    $cles = $_SESSION["cle"];

    $req = $con->query("SELECT * FROM utilisateurs WHERE id = '".$id."'");
    $result = $req->fetchAll();

    foreach($result as $results){
      $id = $results["id"];
      $num_tel = $results["num_tel"];
      $nom = $results["nom"];
      $prenom = $results["prenom"];
      $num_retrait = $results["num_retrait"];
      $moyen_retrait = $results["moyen_retrait"];
      $code_parainage = $results["code_parainage"];
      $solde_user = $results["solde_user"];
      $cle = $results["code_user"];
    }
  }
?>