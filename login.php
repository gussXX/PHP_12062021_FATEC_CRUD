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
        </script>

        <div class="position-absolute top-50 start-50 translate-middle">
            <div class="global-container">
                <div class="card login-form">
                    <div class="card-body">
                        <center><h1 class="card-title">Entrar</h1></center>

                        <form nome="inicio" action="dados/logar.php" method="post">
                            <div class="form-group">
                                <label for="exempleInputEmail">Digite seu Login</label>
                                <input type="text" name="login" id="1"
                                class="form-control form form-control-sm">
                            </div>

                            </br>

                            <div class="form-group">
                                <label for="exempleInputPassword">Digite sua Senha:</label>
                                <a href="#" style="float: right; font-size: 12px;">Esqueceu a Senha ?</a>
                                <input type="password" name="senha" id="2"
                                class="form-control form form-control-sm">
                            </div>

                            </br>

                            <input type="submit" class="btn btn-primary btn-block" onclick="">Entrar em sua Conta</input>

                            <div class="signup">Não tem uma conta ?  <a href="registro.php">Cadastre Agora !</a></div>

                        </form>
                    </div>
                </div>
              </div>
        </div>
    </body>  
<!-- ASSIM QUEM SE FAZ A CONEXAO COM UM ARQUIVO .CSS SEMPRE TEM QUE SER NO FINAL  DO ARQUIVO -->
</html>
