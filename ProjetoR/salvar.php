<?php
	include("conectarBD.php");
	//Aqui vai buscar a ação através do Request
	switch ($_REQUEST["acao"]) {
		case 'cadastrar':
			$sql = "INSERT INTO produtos 
						(proNome, proQtd, proValor)
					VALUES
						('".$_POST["proNome"]."','".$_POST["proQtd"]."','".$_POST["proValor"]."')";

			$resultado = $conexao->query($sql) or die($conexao->error);

			if($resultado==true)
			{
				print "<script>alert('Cliente Cadastrado com sucesso !!!!');</script>";
				print "<script>location.href='produtos.php';</script>";
			}
			else
			{
				print "<script>alert('Não foi possível cadastrar o cliente !!!!');</script>";
				print "<script>location.href='produtos.php';</script>";
			}
		break;
		
		case 'editar':
			$sql = "UPDATE produtos SET
						proNome='".$_POST["proNome"]."',
						proQtd='".$_POST["proQtd"]."',
						proValor='".$_POST["proValor"]."'
					WHERE
						proId=".$_POST["proId"];

			$resultado = $conexao->query($sql) or die($conexao->error);

			if($resultado==true)
			{
				print "<script>alert('Cliente editado com Sucesso !!!!');</script>";
				print "<script>location.href='produtos.php';</script>";
			}
			else
			{
				print "<script>alert('Não foi possível editar o cliente !!!!');</script>";
				print "<script>location.href='produtos.php';</script>";
			}
		break;

		case 'excluir':
			$sql = "DELETE FROM produtos WHERE proId=".$_REQUEST["proId"];

			$resultado = $conexao->query($sql) or die($conexao->error);

			if($resultado==true)
			{
				print "<script>alert('Cliente Excluido com sucesso !!!!');</script>";
				print "<script>location.href='produtos.php';</script>";
			}
			else
			{
				print "<script>alert('Não foi possível excluir o cliente !!!!');</script>";
				print "<script>location.href='produtos.php';</script>";
			}
		break;
	}
?>

