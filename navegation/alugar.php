<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BOOTSTRAP CSS-->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/customm.css">
    <title>Alterar</title>
</head>
<body>
<?php
include "conexaoo.php";

$id = $_GET['id'] ?? '';

$sql = "SELECT * FROM carros WHERE id = $id";
$dados = mysqli_query($conn, $sql);
$linha = mysqli_fetch_assoc($dados);
?>
<?php include 'header.php';?>
<section>
    <div class="container">
            <div class="col">
                <h2>Alugar Carro</h2>
                <form action="alugar_s.php" method="POST">
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Marca</label>
            <input type="text" class="form-control" name="marca"
                               value="<?php echo $linha['marca']; ?>" readonly="true">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Modelo</label>
            <input type="text" class="form-control" name="modelo"
                         value="<?php echo $linha['modelo']; ?>" readonly="true">
        </div>
        <div class="col-md-6">
            <label for="inputState" class="form-label">Tipo</label>
            <select id="inputState" class="form-select" name="tipo" disabled >
                <option value="<?php echo $linha['tipo']; ?>">Hatch</option>
                <option value="<?php echo $linha['tipo']; ?>">Sedan</option>
                <option value="<?php echo $linha['tipo']; ?>">SUV</option>
            </select>
        </div>
        <div class="mb-3">
            <input type="hidden" class="form-control" name="dispo" value="nao" id="formGroupExampleInput" placeholder="Digite o modelo do seu carro">
        </div>
        <div class="col-12">
            <h4>Deseja alugar esse carro?</h4>
            <button type="submit" class="btn btn-primary" name="id" value="<?php echo $linha['id']; ?>" >VRUUN!!</button>
            <a href="consulta.php" class="btn btn-info">Voltar</a>
        </div>
    </div>
                </form>
            </div>
</section>
</body>
<!----JS BOOTSTRAP----->
<script src="../js/bootstrap.bundle.min.js"></script>
 <!---FONT AWESOME----->
 <script src="https://kit.fontawesome.com/afc7c9c072.js" crossorigin="anonymous"></script>
</html>