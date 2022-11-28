<?php
include 'connection.php';

?>

<?php

$idweb = $_GET["id"];

$sql = "SELECT * FROM articles WHERE id= $idweb";
$results = $conn->query($sql);

?>



<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./script.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">


    <title>Article</title>
</head>

<body>
    <?php
    foreach ($results as $result) {
    ?>
    <p>
        <?php
        echo $result[''];
        ?>
    </p>

    <?php
    }
    ?>
    <p>Article</p>
</body>

</html>