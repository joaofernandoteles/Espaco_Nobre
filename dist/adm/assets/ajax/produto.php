<?php

require_once '../include/config.php';

$conexao = new conexao();
$con = $conexao->conecta();

if ($_GET['option'] == 'select') {
	$query = $con->prepare('CALL Proc_S_U_Produtos (:IDProduto)');
	$query->bindValue(':IDProduto', $_POST['IDProduto']);
	$query->execute();
	$res = $query->fetch(PDO::FETCH_OBJ);
	echo json_encode($res);
}

if ($_GET['option'] == 'insert') {

	$extensao1 = explode('.', $_FILES['NomeImagem']['name']);
	$novo_nome =  md5(date('Y-m-d H:i:s')) . '.' . $extensao1[count($extensao1) - 1];
	$destino1 = '../img/produtos/' . $novo_nome;
	move_uploaded_file($_FILES['NomeImagem']['tmp_name'], $destino1);

	$query = $con->prepare('CALL Proc_I_Produtos (:NomeImagem, :NomeProduto, :Numeracao, :NomeMaterial, :NomePalmilha, :IDCategoria)');
	$query->bindValue(':NomeImagem', $novo_nome);
	$query->bindValue(':NomeProduto', $_POST['NomeProduto']);
	$query->bindValue(':Numeracao', $_POST['Numeracao']);
	$query->bindValue(':NomeMaterial', $_POST['NomeMaterial']);
	$query->bindValue(':NomePalmilha', $_POST['NomePalmilha']);
	$query->bindValue(':IDCategoria', $_POST['IDCategoria']);
	$query->execute();
}

if ($_GET['option'] == 'update') {

	$query = $con->prepare('CALL Proc_S_ImagemProduto (:IDProduto)');
	$query->bindValue(':IDProduto', $_POST['IDProduto']);
	$query->execute();
	$res = $query->fetch(PDO::FETCH_OBJ);
	$novo_nome = $res->NomeImagem;
	$unlink = '../img/produtos/' . $res->NomeImagem;
	$query->closeCursor();


	if (isset($_FILES['NomeImagem']['name']) && !empty($_FILES['NomeImagem']['name'])) {
		unlink($unlink);
		$extensao1 = explode('.', $_FILES['NomeImagem']['name']);
		$novo_nome =  md5(date('Y-m-d H:i:s')) . '.' . $extensao1[count($extensao1) - 1];
		$destino1 = '../img/produtos/' . $novo_nome;
		move_uploaded_file($_FILES['NomeImagem']['tmp_name'], $destino1);
	}

	$query = $con->prepare('CALL Proc_U_Produtos (:IDProduto, :NomeImagem, :NomeProduto, :Numeracao, :NomeMaterial, :NomePalmilha, :IDCategoria)');
	$query->bindValue(':IDProduto', $_POST['IDProduto']);
	$query->bindValue(':NomeImagem', $novo_nome);
	$query->bindValue(':NomeProduto', $_POST['NomeProduto']);
	$query->bindValue(':Numeracao', $_POST['Numeracao']);
	$query->bindValue(':NomeMaterial', $_POST['NomeMaterial']);
	$query->bindValue(':NomePalmilha', $_POST['NomePalmilha']);
	$query->bindValue(':IDCategoria', $_POST['IDCategoria']);
	$query->execute();
}

if ($_GET['option'] == 'delete') {
	$query = $con->prepare('CALL Proc_D_Produtos (:IDProduto)');
	$query->bindValue(':IDProduto', $_POST['IDProduto']);
	$query->execute();
	$query->closeCursor();
}
