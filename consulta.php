<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="visual.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    
    <!--TITULO DA PAGINA -->
    <title>Projeto Linguagem de Programação III</title>


</head>
    <body class="one">
        <?Php 
           // include ("dados/login.php"); 
        ?>
        <script>
            function verifica(){

                document.getElementById('yyy').submit();
                
            }

            function verifica1() {

                document.getElementById('www').submit();
            
            }
        </script>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Tenth navbar example">
        <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08" 
              aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation" onclick="changed()">
  
        <span class="navbar-toggler-icon"></span>
        
      </button>

      <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
        <ul class="navbar-nav">

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="menu.php">MENU INICIAL</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" href="cadastro.php">Cadastrar</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" href="#consulta.php" tabindex="-1" aria-disabled="true">Consultar</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" href="exclusao.php" tabindex="2" aria-disabled="true">Excluir</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" href="login.php" tabindex="2" aria-disabled="true">Sair</a>
          </li>

            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

        <div class="position-absolute top-50 start-50 translate-middle">
            <div class="global-container">
                <div class="card login-form">
                    <div class="card-body">
                        <center><h1 class="card-title">CONSULTAR LISTA</h1></center>

                        <form nome="inicio" action="dados/consultar.php" method="post" id="yyy">
                            <div class="form-group" id="">
                            </div>
                            <button type="button" class="btn btn-success" onclick="verifica()">Imprimir Lista Completa</button>
                        </form>

                        <form nome="inicio" action="dados/consultar_unica.php" method="post" id="www">
                            <div class="form-group" id="">
                                <center><label for="text">Nome do produto</label></center>
                                <input type="text" name="produto" id="1"
                                class="form-control form form-control-sm">
                            </div>

                            <button type="button" class="btn btn-danger" onclick="verifica1()">Buscar produto</button>
                        </form>
                    </div>
                </div>
              </div>
        </div>
    </body>  
</html>
