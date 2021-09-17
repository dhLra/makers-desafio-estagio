<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BOOTSTRAP CSS-->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/customm.css">

    <title>.:Consulta:.</title>
</head>

<body>
<?php

if (isset($_POST['busca'])) {
    $pesquisa = $_POST['busca'];
} else {
    $pesquisa = "";
}
include "conexaoo.php";

$sql = "SELECT * FROM carros WHERE modelo LIKE '%$pesquisa%'";
$dados = mysqli_query($conn, $sql);
?>

<?php include 'header.php';?>

<div id="div-text" class="container">
    <div class="row">
        <div class="col">
            <h1>Pesquisa</h1>
            <nav class="navbar navbar-light bg-light">
                <div class="container-fluid">
                    <form class="d-flex" action="consulta.php" method="POST">
                        <input class="form-control me-2" type="search" placeholder="Digite o modelo"
                               aria-label="Search" name="busca" autofocus>
                        <button class="btn btn-outline-success" type="submit">VRUNN!!</button>
                    </form>
                </div>
            </nav>

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Marca</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Disponivel</th>
                    <th scope="col">Funções</th>

                </tr>
                </thead>
                <tbody>
                <?php
                while ($linha = mysqli_fetch_assoc($dados)) {
                    $id = $linha['id'];
                    $marca = $linha['marca'];
                    $modelo = $linha['modelo'];
                    $tipo = $linha['tipo'];
                    $dispo = $linha['dispo'];

                    echo "<tr>
                            <th scope='row'>$marca</th>
                            <td>$modelo</td>
                            <td>$tipo</td>
                            <td>$dispo</td>
                            <td width=230px> 
                                <a href='alugar.php?id=$id' class='btn btn-primary btn-sm'>Alugar</a>
                                <a href='edit.php?id=$id' class='btn btn-success btn-sm'>Editar</a>
                                <a href='#' class='btn btn-danger btn-sm' data-bs-toggle='modal' data-bs-target='#confirma'
                                onclick=" . '"' . "get_data($id, '$marca')" . '"' . ">Excluir</a>
                            </td>
                            </tr>";
                }
                ?>

                </tbody>
            </table>

            <a href="index.php" class="btn btn-info">Voltar</a>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="confirma" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Deseja realmente exculir?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="acao" action="excluir_s.php" method="POST">
                    <p>Deseja realmente excluir</p>
                    <b id="marca">Marca</b>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
                <input type="hidden" name="id" id="id" value="">
                <input type="hidden" name="marca" id="marca_2" value="">
                <input type="submit" type="button" class="btn btn-danger" value="Sim">
                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function get_data(id, marca) {
        document.getElementById('marca').innerHTML = marca;
        document.getElementById('id').value = id;
        document.getElementById('marca_2').value = marca;
    }

</script>
</body>
<!----JS BOOTSTRAP----->
<script src="../js/bootstrap.bundle.min.js"></script>
 <!---FONT AWESOME----->
 <script src="https://kit.fontawesome.com/afc7c9c072.js" crossorigin="anonymous"></script>
</html>
