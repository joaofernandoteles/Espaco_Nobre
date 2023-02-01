<?php

require_once '../include/config.php';

$conexao = new conexao();
$con = $conexao->conecta();

if ($_GET['option'] == 'select') {
	$query = $con->prepare('CALL Proc_S_U_BannerHome (:IDBannerHome)');
	$query->bindValue(':IDBannerHome', $_POST['IDBannerHome']);
	$query->execute();
	$res = $query->fetch(PDO::FETCH_OBJ);
	echo json_encode($res);
}

if ($_GET['option'] == 'insert') {


	$extensao1 = explode('.', $_FILES['Imagem']['name']);
	$novo_nome1 =  Md5(date('Y-m-d H:i:s') . rand()) . '.' . $extensao1[count($extensao1) - 1];
	$destino1 = '../img/banners/' . $novo_nome1;

	move_uploaded_file($_FILES['Imagem']['tmp_name'], $destino1);

	//SALVA NO BANCO
	$query = $con->prepare('CALL Proc_I_BannesHome (:Imagem)');
	$query->bindValue(':Imagem', $novo_nome1);
	$query->execute();
	$query->closeCursor();
}

if ($_GET['option'] == 'update') {


	$query = $con->prepare('CALL Proc_S_U_BannerHome (:IDBannerHome)');
	$query->bindValue(':IDBannerHome', $_POST['IDBannerHome']);
	$query->execute();
	$res = $query->fetch(PDO::FETCH_OBJ);
	$novo_nome1 = $res->Imagem;
	$unlink1 = '../img/banners/' . $res->Imagem;

	$query->closeCursor();

	if (isset($_FILES['Imagem']['name']) && !empty($_FILES['Imagem']['name'])) {
		unlink($unlink1);
		$extensao1 = explode('.', $_FILES['Imagem']['name']);
		$novo_nome1 =  Md5(date('Y-m-d H:i:s') . rand()) . '.' . $extensao1[count($extensao1) - 1];
		$destino1 = '../img/banners/' . $novo_nome1;
		move_uploaded_file($_FILES['Imagem']['tmp_name'], $destino1);
	}

	$query = $con->prepare('CALL Proc_U_BannerHome (:IDBannerHome, :Imagem)');
	$query->bindValue(':IDBannerHome', $_POST['IDBannerHome']);
	$query->bindValue(':Imagem', $novo_nome1);
	$query->execute();
}

if ($_GET['option'] == 'delete') {

	$query = $con->prepare('CALL Proc_S_U_BannerHome (:IDBannerHome)');
	$query->bindValue(':IDBannerHome', $_POST['IDBannerHome']);
	$query->execute();
	$res = $query->fetch(PDO::FETCH_OBJ);
	$novo_nome1 = $res->Imagem;
	$unlink1 = '../img/banners/' . $res->Imagem;

	unlink($unlink1);
	$query = $con->prepare('CALL Proc_D_BannerHome (:IDBannerHome)');
	$query->bindValue(':IDBannerHome', $_POST['IDBannerHome']);
	$query->execute();
	$query->closeCursor();
}
