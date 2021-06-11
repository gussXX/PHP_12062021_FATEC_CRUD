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
        <?Php 

            $servername = "localhost";
            $username = "root";
            $password = "";
            $datalocal = "projeto";
            $table = "users";
            //CONEXÃO
            $connect = new mysqli($servername, $username, $password, $datalocal);

            //TESTA CONEXÃO
            if ($connect->connect_error) {
                die("Conexão mal sucedida:" . $conect->connect_error);
            }
                echo ("Conexão Realiza </br>");

            $login = $_POST['login'];
            $senha = $_POST['senha'];

            if($login == "" || $login == null){

                echo"<script language='javascript' type='text/javascript'>
                alert('O campo login deve ser preenchido');
                </script>";

                header('Location:../login.php');
            } else {

                $query_select = mysqli_query($connect, "SELECT nome FROM $table WHERE nome = '$login'");

                    if(mysqli_num_rows($query_select)<=0){

                        echo"<script language='javascript' type='text/javascript'>
                        alert('Login e/ou senha incorretos');window.location
                        .href='../login.php';</script>";
                    } else {
                        echo"<script language='javascript' type='text/javascript'>
                        alert('ok');window.location
                        .href='../menu.php';</script>";
                    }

                $sqliuse = "use $datalocal";

                $sqliselect = "SELECT * FROM users WHERE nome ='$login' AND 
                                        senha = '$senha' ";
    
                if (mysqli_query($connect, $sqliselect)) {
                    echo "Bem sucedido";
                } else {
                    echo "Error: " . $sqliselect . "<br>" . mysqli_error($connect);
                }
               
                mysqli_close($connect);
            }

        ?>
            <p><?php echo($sqliselect) ?></p>
            <p><?php echo($login) ?></p>
            <p><?php echo($senha) ?></p>
             
    </body>  
</html>
