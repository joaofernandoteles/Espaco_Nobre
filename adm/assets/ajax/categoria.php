<?php

require_once '../include/config.php';

$conexao = new conexao();
$con = $conexao->conecta();

if ($_GET['option'] == 'select') {
	$query = $con->prepare('CALL Proc_S_U_Categoria (:IDCategoria)');
	$query->bindValue(':IDCategoria', $_POST['IDCategoria']);
	$query->execute();
	$res = $query->fetch(PDO::FETCH_OBJ);
	echo json_encode($res);
}

if ($_GET['option'] == 'insert') {


	$extensao1 = explode('.', $_FILES['Imagem']['name']);
	$novo_nome1 =  Md5(date('Y-m-d H:i:s') . rand()) . '.' . $extensao1[count($extensao1) - 1];
	$destino1 = '../img/categoria/capa/' . $novo_nome1;

	$extensao2 = explode('.', $_FILES['Banner']['name']);
	$novo_nome2 =  Md5(date('Y-m-d H:i:s') . rand()) . '.' . $extensao2[count($extensao2) - 1];
	$destino2 = '../img/categoria/banner/' . $novo_nome2;

	move_uploaded_file($_FILES['Imagem']['tmp_name'], $destino1);
	move_uploaded_file($_FILES['Banner']['tmp_name'], $destino2);

	//SALVA NO BANCO
	$query = $con->prepare('CALL Proc_I_Categoria (:Nome, :Imagem, :Banner)');
	$query->bindValue(':Nome', $_POST['Nome']);
	$query->bindValue(':Imagem', $novo_nome1);
	$query->bindValue(':Banner', $novo_nome2);
	$query->execute();
	$query->closeCursor();
}

if ($_GET['option'] == 'update') {


	$query = $con->prepare('CALL Proc_S_U_Categoria (:IDCategoria)');
	$query->bindValue(':IDCategoria', $_POST['IDCategoria']);
	$query->execute();
	$res = $query->fetch(PDO::FETCH_OBJ);
	$novo_nome1 = $res->Imagem;
	$novo_nome2 = $res->Banner;
	$unlink1 = '../img/categoria/capa/' . $res->Imagem;
	$unlink2 = '../img/categoria/banner/' . $res->Banner;

	$query->closeCursor();


	if (isset($_FILES['Banner']['name']) && !empty($_FILES['Banner']['name'])) {
		unlink($unlink2);
		$extensao2 = explode('.', $_FILES['Banner']['name']);
		$novo_nome2 =  Md5(date('Y-m-d H:i:s') . rand()) . '.' . $extensao2[count($extensao2) - 1];
		$destino2 = '../img/categoria/banner/' . $novo_nome2;
		move_uploaded_file($_FILES['Banner']['tmp_name'], $destino2);
	}

	if (isset($_FILES['Imagem']['name']) && !empty($_FILES['Imagem']['name'])) {
		unlink($unlink1);
		$extensao1 = explode('.', $_FILES['Imagem']['name']);
		$novo_nome1 =  Md5(date('Y-m-d H:i:s') . rand()) . '.' . $extensao1[count($extensao1) - 1];
		$destino1 = '../img/categoria/capa/' . $novo_nome1;
		move_uploaded_file($_FILES['Imagem']['tmp_name'], $destino1);
	}

	$query = $con->prepare('CALL Proc_U_Categoria (:IDCategoria, :Nome, :Imagem, :Banner)');
	$query->bindValue(':IDCategoria', $_POST['IDCategoria']);
	$query->bindValue(':Nome', $_POST['Nome']);
	$query->bindValue(':Imagem', $novo_nome1);
	$query->bindValue(':Banner', $novo_nome2);
	$query->execute();
}

if ($_GET['option'] == 'delete') {

	$query = $con->prepare('CALL Proc_S_U_Categoria (:IDCategoria)');
	$query->bindValue(':IDCategoria', $_POST['IDCategoria']);
	$query->execute();
	$res = $query->fetch(PDO::FETCH_OBJ);
	$novo_nome1 = $res->Imagem;
	$novo_nome2 = $res->Banner;
	$unlink1 = '../img/categoria/capa/' . $res->Imagem;
	$unlink2 = '../img/categoria/banner/' . $res->Banner;

	unlink($unlink1);
	unlink($unlink2);
	$query = $con->prepare('CALL Proc_D_Categoria (:IDCategoria)');
	$query->bindValue(':IDCategoria', $_POST['IDCategoria']);
	$query->execute();
	$query->closeCursor();
}
