<?php
require_once 'config/config.php';
require_once 'modules/hg-api.php';

$hg = new HG_API;

$dolar = $hg->dolar_quotations();


?>

<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Cotação Dólar</title>
  </head>
  <style>
  .container-box{
    position:absolute;
	    left:50%;
	    top:50%;
	    transform: translate(-50%,-50%);
      background-color: silver;
	    border-radius:10px;
	    padding:10px 80px;
  }
  
  </style>
  <body>
    

    <div class="container-box">

    <h3>Cotação</h3><br>

    <form action="#">
    
      <p>Moeda:      <?php echo $dolar['name'] ?><br>
      <p>Variação:     <?php echo $dolar['variation'] ?><br>
      <p>Valor do dia: <?php echo $dolar['buy'] ?><br>
                    <?php echo date('d/m/y') ?>
      
      
    
    </form>

    </div>

 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

   
  </body>
  
</html>

