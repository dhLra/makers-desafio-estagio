<!doctype html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BOOTSTRAP CSS-->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/customm.css">
    <title>.:EXCLUINDO:.</title>
</head>
<body>

<?php include 'header.php';?>
<section>
<div class="container">
        <?php
        include "conexaoo.php";

        $id = $_POST['id'];
        $sql = "DELETE FROM carros WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            echo "<h3>Parabéns, excluido com sucesso!<h3><hr>";
        } else {
            echo "Error: " . $conn->error;
        }

        $conn->close();
        ?>
        <a href="index.php" class="btn btn-primary button">Inicio</a>    
    </div>
</section>
</body>
<!----JS BOOTSTRAP----->
<script src="../js/bootstrap.bundle.min.js"></script>
 <!---FONT AWESOME----->
 <script src="https://kit.fontawesome.com/afc7c9c072.js" crossorigin="anonymous"></script>
</html>

