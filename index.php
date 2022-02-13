<?php
session_start(); //Inicializar a sessão com PHP

//Incluir a conexão com o banco de dados
include_once("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
		<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
		<link rel="stylesheet" type="text/css" href="styles.css" media="screen" />
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<title>Importar TXT</title>
	</head>
	<body>
		<!--Titulo do Formulário-->
		<h1 class="titulo">Importar dados do arquivo TXT</h1>
		<?php
		//Imprimir a mensagem de sucesso no upload de dados do arquivo txt para o banco de dados com mysqli
		if(isset($_SESSION['msg'])){
			//Imprimir o valor da sessão
			echo $_SESSION['msg'];
			//Destruir a sessão com PHP
			unset($_SESSION['msg']);
		}
		?>
		<!--Formulário com PHP para fazer upload de arquivo com PHP-->
		<form method="POST" action="processa.php" enctype="multipart/form-data" class="form">
			<label>Arquivo</label>
			<!--Campo para fazer o upload do arquivo com PHP-->
			<input type="file" name="arquivo" class="arquivo-btn"><br><br>			
			<input type="submit" value="Importar">
		</form>

		<!-- tabela -->
		<table class="table">
			<thead>
				<tr>
				<th scope="col">COMPRADOR</th>
				<th scope="col">DESCRIÇÃO</th>
				<th scope="col">PREÇO</th>
				<th scope="col">QUANTIDADE</th>
				<th scope="col">ENDEREÇO</th>
				<th scope="col">FORNECEDOR</th>
				</tr>
			</thead>
			<tbody>
				<tr>
				<?php
				//Criar a QUERY para pesquisar os produtos no banco de dados
				$result_usuario = "SELECT * FROM vendas";
				//Executar a QUERY para pesquisar os produtos no banco de dados com o MySQLi
				$resultado_usuario = mysqli_query($conn, $result_usuario);
				
				//Usar o while para percorrer os dados trazidos do banco de dados
				while($row_vendas = mysqli_fetch_assoc($resultado_usuario)){
				?>
				<td><?php echo $row_vendas['comprador']; ?></td>
				<td><?php echo $row_vendas['descricao']; ?></td>
				<td><?php echo $row_vendas['preco']; ?></td>
				<td><?php echo $row_vendas['quantidade']; ?></td>
				<td><?php echo $row_vendas['endereco']; ?></td>
				<td><?php echo $row_vendas['fornecedor']; ?></td>
				<?php
				  }
				?>
				</tr>
			</tbody>
       </table>
	</body>
</html>