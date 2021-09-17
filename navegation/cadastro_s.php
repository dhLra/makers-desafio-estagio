<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BOOTSTRAP CSS-->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/customm.css">

    <title>Confirmação</title>
</head>

<body>

<?php include 'header.php';?>

<section>
<div class="container confirm">
        <?php
       include "../navegation/conexaoo.php";

        $marca = $_POST['marca'];
        $modelo = $_POST['modelo'];
        $tipo = $_POST['tipo'];
        $dispo = $_POST['dispo'];


        $sql = "INSERT INTO `carros`(`marca`, `modelo`, `tipo`, `dispo`) 
        VALUES ('$marca','$modelo','$tipo','$dispo')";

        if ($conn->query($sql) === TRUE) {
           echo  "<h3>Parabéns, cadastrado com sucesso!<h3><hr>";
        } else {
            echo "Erro: " . $conn->error;
        }

        $conn->close();
        ?> 
        <a class="btn btn-primary" href="index.php"> Inicio</a>
    </div>
</section>
</body>
<!----JS BOOTSTRAP----->
<script src="../js/bootstrap.bundle.min.js"></script>
 <!---FONT AWESOME----->
 <script src="https://kit.fontawesome.com/afc7c9c072.js" crossorigin="anonymous"></script>
</html>

