<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("conexao.php");

if(isset($_POST['Submit'])) {	
	$autor = mysqli_real_escape_string($mysqli, $_POST['autor']);
	$titulo = mysqli_real_escape_string($mysqli, $_POST['titulo']);
	$categoria = mysqli_real_escape_string($mysqli, $_POST['categoria']);
	$editora = mysqli_real_escape_string($mysqli, $_POST['editora']);
	$edicao = mysqli_real_escape_string($mysqli, $_POST['edicao']);
	// $data_publicacao = mysqli_real_escape_string($mysqli, $_POST['data_publicacao']);
	$quantidade = mysqli_real_escape_string($mysqli, $_POST['quantidade']);
	$preco = mysqli_real_escape_string($mysqli, $_POST['preco']);
	$foto = mysqli_real_escape_string($mysqli, $_POST['foto']);
		
	// verificando Campos Vazios
	if(empty($autor) || empty($titulo) || empty($categoria) ||empty($editora) ||empty($edicao) ||
		empty($data_publicacao)||	empty($quantidade)	||	empty($preco) ||empty($foto)) {
				
		if(empty($autor)) {
			echo "<font color='red'>Preencha o campo nome.</font><br/>";
		}
		
		if(empty($titulo)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		if(empty($categoria)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}

		if(empty($editora)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}

		if(empty($edicao)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}

		if(empty($data_publicacao)) {
			echo "<font color='red'>data vazia</font><br/>";
		}

		if(empty($quantidade)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}

		

		if(empty($preco)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO livro(autor,titulo,categoria,editora,edicao,data_publicacao,preco,quantidade,foto) VALUES('$autor','$titulo','$categoria','$editora','$edicao','$data_publicacao','$preco','$quantidade','$foto')");
		
		//display success message
		echo "<font color='green'>Cadastrado com Sucesso!.";
		echo "<br/><a href='index.php'>View Result</a>";
	}
}
?>
</body>
</html>