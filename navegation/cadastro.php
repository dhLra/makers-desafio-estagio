<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BOOTSTRAP CSS-->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/customm.css">
    <title>Cadastro</title>
</head>
<body>
    <?php include 'header.php';?>
<section>
    <form action="cadastro_s.php" method="POST">
    <div class="container">
    <h2>Fazer Cadastro</h2>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Marca</label>
            <input type="text" class="form-control" name="marca" id="formGroupExampleInput" placeholder="Digite a marca do seu carro">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Modelo</label>
            <input type="text" class="form-control" name="modelo" id="formGroupExampleInput" placeholder="Digite o modelo do seu carro">
        </div>
        <div class="col-md-3">
            <label for="inputState" class="form-label">Tipo</label>
            <select id="inputState" class="form-select" name="tipo">
                <option value="Hatch">Hatch</option>
                <option value="Sedan">Sedan</option>
                <option value="SUV">SUV</option>
            </select>
        </div>
        <div class="mb-3">
            <input type="hidden" class="form-control" name="dispo" value="sim" id="formGroupExampleInput" placeholder="Digite o modelo do seu carro">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">VRUUN!!</button>
            <a href="index.php" class="btn btn-info">Voltar</a>
        </div>
    </div>
    </form>
</section>
</body>
<!----JS BOOTSTRAP----->
<script src="../js/bootstrap.bundle.min.js"></script>
 <!---FONT AWESOME----->
 <script src="https://kit.fontawesome.com/afc7c9c072.js" crossorigin="anonymous"></script>
</html>