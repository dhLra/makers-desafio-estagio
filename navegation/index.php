<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carros Velozes!</title>

    <!-- BOOTSTRAP CSS-->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/customm.css">
</head>
<body>
  <?php include 'header.php';?>
<section>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="3000">
      <img src="../img/slider_1.png" class="d-block w-100" alt="marquinhos na praia">
      <div class="carousel-caption d-none d-md-block">
        <h1>Bom na praia</h1>
        <p>Um carrão sem igual.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="3000">
      <img src="../img/slider_2.png" class="d-block w-100" alt="marquinhos no racha">
      <div class="carousel-caption d-none d-md-block">
        <h1>Pega racha!</h1>
        <p>Com a gasolina a quase 7 reais, e ainda gasta com isso.</p>
      </div>
    </div>
    <div class="carousel-item"data-bs-interval="3000">
      <img src="../img/slider_3.png" class="d-block w-100" alt="marquinhos fazendo drift">
      <div class="carousel-caption d-none d-md-block">
        <h1>Faz drift</h1>
        <p>I wonder if you know
            How they live in Tokyo
            If you see me then you mean it
            Then you know you have to go.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="btn_div">
    <ul>
        <li>
        <a class="btn btn-primary" href="cadastro.php" role="button"><i class="fas fa-car "></i></a>
        <p>Cadastrar</p>
        </li>
        <li>
        <a class="btn btn-primary" href="consulta.php" role="button"><i class="fas fa-search"></i></a>
        <p>Consultar</p>
        </li>
    </ul>
</div>
</section>
<footer>
  <div class="footer">
  <p>Powered By Dhiego Lira</p>
  <p>CRUD para vaga de estagio</p>  
  </div>
</footer>
</body>
<!----JS BOOTSTRAP----->
 <script src="../js/bootstrap.bundle.min.js"></script>

 <!---FONT AWESOME----->
 <script src="https://kit.fontawesome.com/afc7c9c072.js" crossorigin="anonymous"></script>

</script>
 </html>