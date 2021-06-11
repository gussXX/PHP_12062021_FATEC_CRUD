<?php
class BancodeDados {
    // Nas linhas abaixo voc� poder� colocar as informa��es do Banco de Dados.
    private $host = "localhost"; 	// Nome ou IP do Servidor
    private $user = "root"; 		// Usu�rio do Servidor MySQL
    private $senha = ""; 		// Senha do Usu�rio MySQL
    private $banco = "projeto"; 		// Nome do seu Banco de Dados
    public $con;
	
	// m�todo respons�vel para conex�o a base de dados
	function conecta(){
        $this->con = @mysqli_connect($this->host,$this->user,$this->senha, $this->banco);
	    // Conecta ao Banco de Dados
        if(!$this->con){
      		// Caso ocorra um erro, exibe uma mensagem com o erro
			die ("Problemas com a conexao");
        }
    }
	
	// m�todo respons�vel para fechar a conex�o
	function fechar(){
		mysqli_close($this->con);
		return;
	}
	// fun��o para executar o SELECT (consultar.php, verexclusao.php, veralteracao.php)
	function sqlquery($string,$caminho){
		// executando instru��o SQL
		$resultado = @mysqli_query($this->con, $string);
		if (!$resultado) {
			echo '<input type="button" onclick="window.location='."'index.php'".';" value="Voltar"><br><br>';
			die('<b>Query Invalida:</b>' . @mysqli_error($this->con)); 
		} else {
			$num = @mysqli_num_rows($resultado);
			if ($num==0){
			echo "<b>Codigo: </b>nao localizado !!!!<br><br>";
			echo '<input type="button" onclick="window.location='."'$caminho'".';" value="Voltar"><br><br>';
			exit;		
			}else{
				$dados=mysqli_fetch_array($resultado);
			}
		} 
		$this->fechar();
		return $dados;
	}
	
	// fun��o para executar o INSERT, UPDATE e DELETE (incluir.php, alterar.php, excluir.php)
	function sqlstring($string,$texto){
		$resultado = @mysqli_query($this->con, $string);
		if (!$resultado) {
			echo '<input type="button" onclick="window.location='."'index.php'".';" value="Voltar"><br><br>';
			die('<b>Query Invalida:</b>' . @mysqli_error($mysql->con)); 
		} else {
			echo "<b>$texto </b> - Realizada com  Sucesso";
		}
		$this->fechar();
		return;
	}
	
}


?>