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
	$query->closeCursor();
}

if ($_GET['option'] == 'insert') {


	$extensao1 = explode('.', $_FILES['Imagem']['name']);
	$novo_nome =  Md5(date('Y-m-d H:i:s') . rand()) . '.' . $extensao1[count($extensao1) - 1];
	$destino1 = '../img/produtos/' . $novo_nome;

	move_uploaded_file($_FILES['Imagem']['tmp_name'], $destino1);

	//SALVA NO BANCO
	$query = $con->prepare('CALL Proc_I_Produtos (:Nome, :Descricao, :Imagem, :IDCategoria)');
	$query->bindValue(':Nome', $_POST['Nome']);
	$query->bindValue(':Descricao', $_POST['Descricao']);
	$query->bindValue(':Imagem', $novo_nome);
	$query->bindValue(':IDCategoria', $_POST['IDCategoria']);
	$query->execute();
	$query->closeCursor();

}

if ($_GET['option'] == 'update') {

	$query = $con->prepare('CALL Proc_S_U_Produtos (:IDProduto)');
	$query->bindValue(':IDProduto', $_POST['IDProduto']);
	$query->execute();
	$res = $query->fetch(PDO::FETCH_OBJ);
	$novo_nome = $res->Imagem;
	$unlink1 = '../img/produtos/' . $res->Imagem;
	$query->closeCursor();



	if (isset($_FILES['Imagem']['name']) && !empty($_FILES['Imagem']['name'])) {
		unlink($unlink1);
		$extensao1 = explode('.', $_FILES['Imagem']['name']);
		$novo_nome =  Md5(date('Y-m-d H:i:s') . rand()) . '.' . $extensao1[count($extensao1) - 1];
		$destino1 = '../img/produtos/' . $novo_nome;
		move_uploaded_file($_FILES['Imagem']['tmp_name'], $destino1);
	}
	
	
	$query = $con->prepare('CALL Proc_U_Produtos (:IDProduto, :Nome, :Descricao, :Imagem, :IDCategoria)');
	$query->bindValue(':IDProduto', $_POST['IDProduto']);
	$query->bindValue(':Nome', $_POST['Nome']);
	$query->bindValue(':Descricao', $_POST['Descricao']);
	$query->bindValue(':Imagem', $novo_nome);
	$query->bindValue(':IDCategoria', $_POST['IDCategoria']);
	$query->execute();
}

if ($_GET['option'] == 'delete') {
	$query = $con->prepare('CALL Proc_D_Produtos (:IDProduto)');
	$query->bindValue(':IDProduto', $_POST['IDProduto']);
	$query->execute();
	$query->closeCursor();
}
