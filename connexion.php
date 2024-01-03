<?php
    session_start();

    try {
        $con = new PDO("mysql:host=localhost; dbname=sponzy", "root", "");
 
    } catch (\Throwable $th) {
        echo '<div class="alert alert-danger">echec de connection a la bd</div>';
    }
    
?>

