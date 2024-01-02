<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    include("connexion.php");
    $req = $con->prepare("SELECT * FROM reseigement");
    $req->execute();
    $rows = $req->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Noms</th>
            <th>Prenoms</th>
            <th>password</th>
            <th>sexe</th>
        </tr>
        <?php foreach($rows as $row): ?>
        <tr>
            <td><?= $row["id"]; ?></td>
            <td><?= $row["nom"]; ?></td>
            <td><?= $row["prenom"]; ?></td>
            <td><?= $row["pass"]; ?></td>
            <td><?= $row["sexe"]; ?></td>
        </tr>
        <?php endforeach ?>
    </table>
</body>
</html>
