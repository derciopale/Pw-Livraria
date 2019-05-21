<?php
//including the database connection file
include_once("conexao.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC"); // using mysqli_query instead
?>

<html>
<head>	
	<title>Homepage</title>
</head>

<body>
<a href="add.html">Adicionar novo Livro</a><br/><br/>

	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>Autor</td>
		<td>Titulo</td>
		<td>Categoria</td>
		<td>Editora</td>
		<td>Edicao</td>
		<td>Data</td>
		<td>Quantidade</td>
		<td>Preco</td>
		<td>Foto</td>

	</tr>
	<!-- <?php 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['autor']."</td>";
		echo "<td>".$res['titulo']."</td>";
		echo "<td>".$res['categoria']."</td>";
		echo "<td>".$res['editora']."</td>";
		echo "<td>".$res['edicao']."</td>";
		echo "<td>".$res['data-publicacao']."</td>";
		echo "<td>".$res['quantidade']."</td>";
		echo "<td>".$res['preco']."</td>";
		echo "<td>".$res['foto']."</td>";	
		// echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Tem certeza que deseja apagar?')\">Delete</a></td>";		
	}
	?> -->
	</table>
</body>
</html>
