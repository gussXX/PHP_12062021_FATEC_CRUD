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
        ?>
        <script>
        function verifica(){

            var senha = document.querySelector("[name='senha']").value;
            var veri = document.querySelector("[name='check']").value;
            //alert('senha: '+ senha +' <-- -->'+ veri +'');

            if(veri == senha) {
                document.getElementById('xxx').submit();
                alert("iguais");
            } else {
                alert("diferentes");
            }
        }
        </script>

        <div class="position-absolute top-50 start-50 translate-middle">
            <div class="global-container">
                <div class="card login-form">
                    <div class="card-body">
                        <center><h1 class="card-title">Cadastrar Novo usuario</h1></center>

                        <form nome="inicio" action="dados/registrar.php" method="post" id="xxx">
                            <div class="form-group">
                                <label for="exempleInputEmail">Digite seu Login</label>
                                <input type="text" name="login" id="1"
                                class="form-control form form-control-sm">
                            </div>

                            </br>

                            <div class="form-group">
                                <label for="exempleInputPassword">Digite sua Senha:</label>
                                <input type="password" name="senha" id="2"
                                class="form-control form form-control-sm">
                            </div>

                            <div class="form-group">
                                <label for="exempleInputPassword">Repita sua Senha:</label>
                                <input type="password" name="check" id="3"
                                class="form-control form form-control-sm">
                            </div>
                            <button type="button" class="btn btn-danger" onclick="verifica()">Registrar- se</button>
                            <div class="signup">Já tem uma conta ?  <a href="login.php">Entrar Agora !</a></div>

                        </form>
                    </div>
                </div>
              </div>
        </div>
    </body>  

</html>
