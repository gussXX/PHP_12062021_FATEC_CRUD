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
    <body class="one">
        <script>
        </script>
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
                $busca = $_POST['produto'];
                echo("ERRA PRA ESTAR AQUI: " .$busca."");
                $sqliselect = "DELETE FROM  produtos WHERE produto='$busca'";

                if (mysqli_query($connect, $sqliselect)) {
                
                } else {
                    echo "Error: " . $sqlinsert . "</br>" . mysqli_error($connect);
                }

                $result = mysqli_query($connect, $sqliselect);


                mysqli_close($connect);
                header('Location: ../exclusao.php');
            ?>         
    </body>  
    
</html>
