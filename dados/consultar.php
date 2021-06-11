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
    <script src="mysql.php" type="text/javascript"></script>
    
    <!--TITULO DA PAGINA -->
    <title>Projeto Linguagem de Programação III</title>


</head>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Tenth navbar example">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08" 
              aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation" onclick="changed()">
  
        <span class="navbar-toggler-icon"></span>
        
      </button>

      <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
        <ul class="navbar-nav">

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../menu.php">MENU INICIAL</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" href="../cadastro.php">Cadastrar</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" href="../consulta.php" tabindex="-1" aria-disabled="true">Consultar</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" href="../exclusao.php" tabindex="2" aria-disabled="true">Excluir</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" href="../login.php" tabindex="2" aria-disabled="true">Sair</a>
          </li>

            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
    <body class="one">
    <div class="global-container" id="bk">
    <div class="container-fluid">
        <center><p class="display-1">Lista de Produtos</p></center>
        <table class="table">

        <tr>
        <th>ID</th>
        <th>Produto</th>
        <th>quantidade</th>
        <th>valor</th>
        <th>Total</th>
        </tr>

            <?Php 

                $servername = "localhost";
                $username = "root";
                $password = "";
                $datalocal = "projeto";
                $table = "produtos";
                //CONEXÃO
                $connect = new mysqli($servername, $username, $password, $datalocal);

                //TESTA CONEXÃO
                if ($connect->connect_error) {
                    die("Conexão mal sucedida:" . $connect->connect_error);
                }
            
                $sqliuse = "use $datalocal";

                $sqliselect = "SELECT * FROM  $table";

                if (mysqli_query($connect, $sqliselect)) {
                
                } else {
                    echo "Error: " . $sqlinsert . "<br>" . mysqli_error($connect);
                }

                $result = mysqli_query($connect, $sqliselect);


                if (mysqli_num_rows($result) > 0){

                    while ( $row = $result-> fetch_assoc()){            
        
                        echo '<tr>';
                        echo '<td>'. $row['id'] .           '</td>';
                        echo '<td>'. $row['produto'] .      '</td>';
                        echo '<td>'. $row['quantidade'] .   '</td>';
                        echo '<td>'. $row['valor'].         '</td>';
                        echo '<td>'. $row['total'] .        '</td>';
                        echo '</tr>';
                    }
                }
                
                $total_valores = "SELECT SUM(total) AS num FROM produtos";
                $soma_total = 0;

                $result = mysqli_query($connect, $total_valores);
                $row = mysqli_fetch_assoc($result);
                $convert = implode(",", $row);

                mysqli_close($connect);
            ?>
        </div>
    </div>

        <tr>
        <th>-</th>
        <th>-</th>
        <th>-</th>
        <th>Valor Total:</th>
        <th><?php echo($convert) ?></th>
        </tr>

        </table>

        <form>
            <center>
                <button type="button" class="btn btn-info btn btn-primary btn-lg" 
                        onClick="window.print()" >Imprimir</button>
            </center>
        </form>    
    </body>  
    
</html>
