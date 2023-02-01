<?php

require_once 'assets/include/config.php';

$conexao = new conexao();
$con = $conexao->conecta();

?>
<!DOCTYPE html>
<html lang="pt-br" class="h-100">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Alsite DevTeam">

	<title>Espaço Nobre</title>
	<link rel="shortcut icon" href="assets/img/logo_imoveis.png">
	<link rel="stylesheet" type="text/css" href="//site-assets.fontawesome.com/releases/v6.1.2/css/all.css">


	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Michroma&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;500&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">



	<!-- build:css -->
	<link href="assets/css/app.css" rel="stylesheet">
	<!-- endbuild -->

	<!-- UIkit CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.15.8/dist/css/uikit.min.css" />

	<!-- UIkit JS -->
	<script src="https://cdn.jsdelivr.net/npm/uikit@3.15.8/dist/js/uikit.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/uikit@3.15.8/dist/js/uikit-icons.min.js"></script>

</head>

<style>
	@font-face {
		font-family: DCC;
		src: url("./assets/fonts/DCC - Ash.otf");
	}

	@font-face {
		font-family: Giane;
		src: url("./assets/fonts/GianeGothicsans Bold.otf");
	}

	@font-face {
		font-family: Sunny;
		src: url("./assets/fonts/Sunny Spells.ttf");
	}


	a {
		text-decoration: none !important;
	}

	@media screen and (max-width: 767px) {
		.banner {
			height: 720px !important;
		}

		.vedacao {
			left: 0px !important;
		}

		.titulo_banner {
			font-size: 41px !important;
		}

		.texto_empresa p {
			font-size: 12px !important;
			font-weight: 500;
		}

		.img_empresa {
			height: 290px !important;
			width: 357px !important;
		}


		.texto_meio {
			font-size: 11px !important;
		}

		.manutenção {
			display: none;
		}

		.recado_manutencao {
			height: 838px !important;
			display: flex !important;
			align-items: center;
			justify-content: center;
			flex-direction: column;
			background: #dddddd;

		}
	}

	.lugar h1 {
		font-size: 40px;
		font-weight: 600;
		margin: 0;
		max-height: 38px;
		font-family: 'Mulish', sans-serif !important;
	}

	.lugar {
		padding-bottom: 77px;
	}

	.button_quantidade {
		margin-right: 7px;
		display: flex;
		flex-direction: column;
		align-items: center;
		justify-content: center;
		width: 28px;
		border-radius: 50%;
		height: 28px;
		background: none;
		border: 1px solid #c5c5c5;
	}

	.button_quantidade p {
		margin: 0px !important;
		font-size: 11px;
	}

	.posicao {
		display: flex;
		flex-direction: column;
		align-items: center;
	}

	.imagem_site {
		height: 302px;
		width: 1084px;
		margin-bottom: 45px;
	}

	.recado_manutencao {
		display: none;
	}

	.campo_filtro input::placeholder {
		font-size: 13px;
	}

	.nome_descomplica h2 {
		/* font-family: 'Giane', serif !important; */
		font-family: 'Roboto', sans-serif !important;
		font-size: 96px;
		letter-spacing: 0px;
		color: #1c85bd;
		margin: 0px;
	}

	.nome_descomplica {
		border-bottom: solid 5px #f58d49;
		height: 100px;
		width: 100%;
	}

	.caixa {
		position: absolute;
		width: 570px;
		bottom: -106px;
		left: 31%;
		right: 69%;
	}

	.caixa img {
		width: 100%;
	}
</style>

<body class="d-flex flex-column h-100">

	<div role="main" class="flex-shrink-0">


		<div class="recado_manutencao">

			<div>
				<h2 style="font-family: 'Sunny' !important;">Mobile em Desenvolvimento</h2>
			</div>
			<div style="background: url(./assets/gif/manutencao_1.gif) !important; background-size: cover !important; background-position: center !important; display: flex; justify-content: center; align-items: flex-end; height: 174px; width: 274px;"></div>
		</div>
		<div class="manutenção">

			<section id="home">
				<?php include 'header.php'; ?>
				<div class="uk-inline" style="width: 100%;">

					<div class="banner" style="padding-bottom: 126px; display: flex; justify-content: center; align-items: center; flex-direction: column;">
						<div class="lugar">
							<h1>
								Encontre o seu lugar
							</h1>
						</div>
						<div class="imagem_site" style="background: url(./assets/img/teste5.png) !important; background-size: cover !important; background-position: center !important; display: flex; justify-content: center; align-items: flex-end; ">

						</div>
						<div style=" height: 480px; width: 1078px; margin-bottom: -150px; display: flex; flex-direction: column; justify-content: space-between; align-items: center;">
							<div style="height: 230px; width: 866px;">
								<div style="height: 310px; background: #fff; border-radius: 10px; border: 1px solid #9090904d; box-shadow: 0 6px 10px 1px rgb(0 0 0 / 15%);">
									<div class="opcao">
										<li class="opcao_negocio">
											<input type="radio" id="check_1" name="check_1" value="check_1" checked>
											<label for="check_1">Comprar</label>
										</li>
										<li class="opcao_negocio">
											<input type="radio" id="check_2" name="check_1" value="check_2">
											<label for="check_2">Alugar</label>
										</li>

									</div>
									<div style="display: flex; justify-content: space-around; align-items: center;height: 88px;">
										<form id="form_input" class="uk-search uk-search-large" style="display: flex; align-items: center; padding-left: 49px;">
											<img src="./assets/img/icon_lupa.png" alt="" style="width: 27px;">
											<input class="uk-search-input input_busca" type="search" placeholder="Busque pela região ou empreendimento" aria-label="Search">
										</form>
										<div id="div1" style="position:relative">
											<div id="div2" style="position: absolute; left: calc(10% + -181px); top: calc(50% + 30px); transform: translate(-50%, -50%); width: 667px; border-bottom: 1px solid #f2f2f2; transition: 0.3s;"></div>
										</div>
										<div class="uk-button-group">
											<button class="uk-button uk-button-default botao_busca">Buscar</button>
										</div>
									</div>
									<!-- <div style="display: flex; align-items: center; justify-content: flex-start; padding-left: 39px;">
										<div class="checkbox">
											<input type="checkbox" name="" id="">
											<p>Comprar na Planta</p>
										</div>
										<div class="checkbox">
											<input type="checkbox" name="" id="">
											<p>Comprar Pronto</p>
										</div>

									</div> -->


									<div style="display: flex; flex-direction: row; justify-content: center;">
										<div style="height: 150px;  width: 757px; display: flex; flex-direction: column; justify-content: flex-end;">
											<div class="row filtros">
												<div class="col-12 col-md-3 form-group">
													<div>
														<h3>Valor</h3>
													</div>
													<div style="display: flex; flex-direction: row;">
														<div class="campo_filtro">
															<p>R$</p><input type="text" class="form-control mask-	valor"  placeholder="Míni...">
														</div>
														<div class="campo_filtro">
															<p>R$</p><input type="text" class="form-control mask-valor" placeholder="Máxi...">
														</div>
													</div>
												</div>
												<div class="col-12 col-md-3 form-group">
													<div>
														<h3>Área do imóvel</h3>
													</div>
													<div style="display: flex; flex-direction: row;">
														<div class="campo_filtro">
															<p>m²</p><input type="text" class="form-control mask-valor" placeholder="Míni...">
														</div>
														<div class="campo_filtro">
															<p>m²</p><input type="text" class="form-control mask-valor" placeholder="Máxi...">
														</div>
													</div>
												</div>
												<div class="col-12 col-md-6 form-group" style="display: flex; flex-direction: row; justify-content: flex-start;">
													<div class="row" style="width: 100%;">
														<div class="col-12 col-md-6 form-group">
															<div>
																<h3>Dormitórios</h3>
															</div>
															<div style="display: flex; flex-direction: row;">
																<button class="button_quantidade">
																	<p>1</p>
																</button>
																<button class="button_quantidade">
																	<p>2</p>
																</button>
																<button class="button_quantidade">
																	<p>3</p>
																</button>
																<button class="button_quantidade">
																	<p>4+</p>
																</button>
															</div>
														</div>
														<div class="col-12 col-md-6 form-group">
															<div>
																<h3>Dormitórios</h3>
															</div>
															<div style="display: flex; flex-direction: row;">
																<button class="button_quantidade">
																	<p>1</p>
																</button>
																<button class="button_quantidade">
																	<p>2</p>
																</button>
																<button class="button_quantidade">
																	<p>3</p>
																</button>
																<button class="button_quantidade">
																	<p>4+</p>
																</button>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="limpar">
												<button>
													<p>Limpar Filtros</p>
												</button>
											</div>
										</div>
									</div>
								</div>


								<div class="checkbox2">
									<input type="checkbox" name="" id="">
									<p>Buscar pelo código do imóvel</p>
								</div>
							</div>
							<div style="height: 95px;">
								<img src="./assets/img/barra2.png" alt="">
							</div>
						</div>

					</div>

				</div>

			</section>

			<section id="imoveis" style=" height: 1910px; display: flex; flex-direction: column; justify-content: flex-start;;">

				<div style="display: flex; flex-direction: column; align-items: center; margin-top: 110px;">
					<div class="titulo_imoveis">
						<h2>Confira as oportunidades que separamos para você</h2>
					</div>
				</div>

				<div class="posicao">
					<div class="div_principal">

						<div class="lancamentos">
							<p>Aluguel</p>
						</div>

						<div class="div_imoveis">
							<div class="row">


								<div class="col-12 col-md-3 form-group " style="height: 390px;">
									<a href="imovel1.php">
										<div class="imoveis">
											<div style="background: url('./assets/img/imovel/imovel1.png') !important; background-size: cover !important; background-position: bottom  !important; display: flex; justify-content: center; align-items: flex-end; height: 215px; border-radius: 10px 10px 0px 0px;">
											</div>
											<div style="height: 196px; padding: 15px 18px;">
												<div style="height: 100%;">
													<div style="display: flex; justify-content: space-between;">
														<div style="width: 211px;">
															<div class="tipo_imoveis">
																<p>Apartamento</p>
															</div>
															<div class="endereco_imoveis">
																<p>ROC Panamby</p>
																<p>Rua Itatupa, 212</p>
																<p>Panamby, São Paulo</p>
															</div>
														</div>
														<div style="height: 40px;">
															<div class='div_heart'>
																<input class="coracao" type='checkbox' id='heart1'>
																<label class="label" for='heart1'>❤</label>
															</div>
														</div>
													</div>

													<div class="descricao_imoveis">
														<p>
															Localizado em um dos bairros mais procurados de São Paulo, o <strong>Panamby</strong> tem toda a infraest...
														</p>
													</div>
													<div class="icons_imoveis">
														<div class="detalhes_imoveis">
															<i class="fa-regular fa-ruler-horizontal"></i>
															<p>55 a 99m²</p>
														</div>
														<div class="detalhes_imoveis_bed">
															<i class="fa-regular fa-bed"></i>
															<p>3 a 4</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</a>
								</div>
								<div class="col-12 col-md-3 form-group " style="height: 390px;">
									<a href="imovel1.php">
										<div class="imoveis">
											<div style="background: url('./assets/img/imovel/imovel2.png') !important; background-size: cover !important; background-position: bottom  !important; display: flex; justify-content: center; align-items: flex-end; height: 215px; border-radius: 10px 10px 0px 0px;">
											</div>
											<div style="height: 196px; padding: 15px 18px;">
												<div style="height: 100%;">
													<div style="display: flex; justify-content: space-between;">
														<div style="width: 211px;">
															<div class="tipo_imoveis">
																<p>Apartamento</p>
															</div>
															<div class="endereco_imoveis">
																<p>Alter Alto De Pinheiros</p>
																<p>Avenida São Gualter, 108</p>
																<p>Alto De Pinheiros, São Paulo</p>
															</div>
														</div>
														<div style="height: 40px;">
															<div class='div_heart'>
																<input class="coracao" type='checkbox' id='heart2'>
																<label class="label" for='heart2'>❤</label>
															</div>
														</div>
													</div>

													<div class="descricao_imoveis">
														<p>
															Conheça o novo empreendimento <strong>ALTER – ALTO DE PINHEIROS</strong> , localizado no Alto de Pinheiros...
														</p>
													</div>
													<div class="icons_imoveis">
														<div class="detalhes_imoveis">
															<i class="fa-regular fa-ruler-horizontal"></i>
															<p>55 a 99m²</p>
														</div>
														<div class="detalhes_imoveis_bed">
															<i class="fa-regular fa-bed"></i>
															<p>3 a 4</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</a>
								</div>
								<div class="col-12 col-md-3 form-group " style="height: 390px;">
									<a href="imovel1.php">
										<div class="imoveis">
											<div style="background: url('./assets/img/imovel/imovel3.png') !important; background-size: cover !important; background-position: bottom  !important; display: flex; justify-content: center; align-items: flex-end; height: 215px; border-radius: 10px 10px 0px 0px;">
											</div>
											<div style="height: 196px; padding: 15px 18px;">
												<div style="height: 100%;">
													<div style="display: flex; justify-content: space-between;">
														<div style="width: 211px;">
															<div class="tipo_imoveis">
																<p>Apartamento</p>
															</div>
															<div class="endereco_imoveis">
																<p>Éden Park By Dror - Torre West</p>
																<p>Avenida Roque Petroni Júnior, 576</p>
																<p>Brooklin, São Paulo</p>
															</div>
														</div>
														<div style="height: 40px;">
															<div class='div_heart'>
																<input class="coracao" type='checkbox' id='heart3'>
																<label class="label" for='heart3'>❤</label>
															</div>
														</div>
													</div>

													<div class="descricao_imoveis">
														<p>
															Nasce um pulmão verde na melhor área do Brooklin!
														</p>
													</div>
													<div class="icons_imoveis">
														<div class="detalhes_imoveis">
															<i class="fa-regular fa-ruler-horizontal"></i>
															<p>55 a 99m²</p>
														</div>
														<div class="detalhes_imoveis_bed">
															<i class="fa-regular fa-bed"></i>
															<p>3 a 4</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</a>
								</div>
								<div class="col-12 col-md-3 form-group " style="height: 390px;">
									<a href="imovel1.php">
										<div class="imoveis">
											<div style="background: url('./assets/img/imovel/imovel4.png') !important; background-size: cover !important; background-position: bottom  !important; display: flex; justify-content: center; align-items: flex-end; height: 215px; border-radius: 10px 10px 0px 0px;">
											</div>
											<div style="height: 196px; padding: 15px 18px;">
												<div style="height: 100%;">
													<div style="display: flex; justify-content: space-between;">
														<div style="width: 211px;">
															<div class="tipo_imoveis">
																<p>Apartamento</p>
															</div>
															<div class="endereco_imoveis">
																<p>Bem Moema</p>
																<p>Avenida Bem-te-vi, 221</p>
																<p>Moema, São Paulo</p>
															</div>
														</div>
														<div style="height: 40px;">
															<div class='div_heart'>
																<input class="coracao" type='checkbox' id='heart4'>
																<label class="label" for='heart4'>❤</label>
															</div>
														</div>
													</div>

													<div class="descricao_imoveis">
														<p>
															Consulte um de nossos corretores e confira!
														</p>
													</div>
													<div class="icons_imoveis">
														<div class="detalhes_imoveis">
															<i class="fa-regular fa-ruler-horizontal"></i>
															<p>55 a 99m²</p>
														</div>
														<div class="detalhes_imoveis_bed">
															<i class="fa-regular fa-bed"></i>
															<p>3 a 4</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</a>
								</div>
							</div>
						</div>

					</div>

					<div class="div_principal2">

						<div class="lancamentos">
							<p>Venda</p>
						</div>

						<div class="div_imoveis">
							<div class="row">
								<div class="col-12 col-md-3 form-group " style="height: 390px;">
									<a href="imovel1.php">
										<div class="imoveis">
											<div style="background: url('./assets/img/imovel/imovel1.png') !important; background-size: cover !important; background-position: bottom  !important; display: flex; justify-content: center; align-items: flex-end; height: 215px; border-radius: 10px 10px 0px 0px;">
											</div>
											<div style="height: 196px; padding: 15px 18px;">
												<div style="height: 100%;">
													<div style="display: flex; justify-content: space-between;">
														<div style="width: 211px;">
															<div class="tipo_imoveis">
																<p>Apartamento</p>
															</div>
															<div class="endereco_imoveis">
																<p>ROC Panamby</p>
																<p>Rua Itatupa, 212</p>
																<p>Panamby, São Paulo</p>
															</div>
														</div>
														<div style="height: 40px;">
															<div class='div_heart'>
																<input class="coracao" type='checkbox' id='heart5'>
																<label class="label" for='heart5'>❤</label>
															</div>
														</div>
													</div>

													<div class="descricao_imoveis">
														<p>
															Localizado em um dos bairros mais procurados de São Paulo, o <strong>Panamby</strong> tem toda a infraest...
														</p>
													</div>
													<div class="icons_imoveis">
														<div class="detalhes_imoveis">
															<i class="fa-regular fa-ruler-horizontal"></i>
															<p>55 a 99m²</p>
														</div>
														<div class="detalhes_imoveis_bed">
															<i class="fa-regular fa-bed"></i>
															<p>3 a 4</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</a>
								</div>
								<div class="col-12 col-md-3 form-group " style="height: 390px;">
									<a href="imovel1.php">
										<div class="imoveis">
											<div style="background: url('./assets/img/imovel/imovel2.png') !important; background-size: cover !important; background-position: bottom  !important; display: flex; justify-content: center; align-items: flex-end; height: 215px; border-radius: 10px 10px 0px 0px;">
											</div>
											<div style="height: 196px; padding: 15px 18px;">
												<div style="height: 100%;">
													<div style="display: flex; justify-content: space-between;">
														<div style="width: 211px;">
															<div class="tipo_imoveis">
																<p>Apartamento</p>
															</div>
															<div class="endereco_imoveis">
																<p>Alter Alto De Pinheiros</p>
																<p>Avenida São Gualter, 108</p>
																<p>Alto De Pinheiros, São Paulo</p>
															</div>
														</div>
														<div style="height: 40px;">
															<div class='div_heart'>
																<input class="coracao" type='checkbox' id='heart6'>
																<label class="label" for='heart6'>❤</label>
															</div>
														</div>
													</div>

													<div class="descricao_imoveis">
														<p>
															Conheça o novo empreendimento <strong>ALTER – ALTO DE PINHEIROS</strong> , localizado no Alto de Pinheiros...
														</p>
													</div>
													<div class="icons_imoveis">
														<div class="detalhes_imoveis">
															<i class="fa-regular fa-ruler-horizontal"></i>
															<p>55 a 99m²</p>
														</div>
														<div class="detalhes_imoveis_bed">
															<i class="fa-regular fa-bed"></i>
															<p>3 a 4</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</a>
								</div>
								<div class="col-12 col-md-3 form-group " style="height: 390px;">
									<a href="imovel1.php">
										<div class="imoveis">
											<div style="background: url('./assets/img/imovel/imovel3.png') !important; background-size: cover !important; background-position: bottom  !important; display: flex; justify-content: center; align-items: flex-end; height: 215px; border-radius: 10px 10px 0px 0px;">
											</div>
											<div style="height: 196px; padding: 15px 18px;">
												<div style="height: 100%;">
													<div style="display: flex; justify-content: space-between;">
														<div style="width: 211px;">
															<div class="tipo_imoveis">
																<p>Apartamento</p>
															</div>
															<div class="endereco_imoveis">
																<p>Éden Park By Dror - Torre West</p>
																<p>Avenida Roque Petroni Júnior, 576</p>
																<p>Brooklin, São Paulo</p>
															</div>
														</div>
														<div style="height: 40px;">
															<div class='div_heart'>
																<input class="coracao" type='checkbox' id='heart7'>
																<label class="label" for='heart7'>❤</label>
															</div>
														</div>
													</div>

													<div class="descricao_imoveis">
														<p>
															Nasce um pulmão verde na melhor área do Brooklin!
														</p>
													</div>
													<div class="icons_imoveis">
														<div class="detalhes_imoveis">
															<i class="fa-regular fa-ruler-horizontal"></i>
															<p>55 a 99m²</p>
														</div>
														<div class="detalhes_imoveis_bed">
															<i class="fa-regular fa-bed"></i>
															<p>3 a 4</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</a>
								</div>
								<div class="col-12 col-md-3 form-group " style="height: 390px;">
									<a href="imovel1.php">
										<div class="imoveis">
											<div style="background: url('./assets/img/imovel/imovel4.png') !important; background-size: cover !important; background-position: bottom  !important; display: flex; justify-content: center; align-items: flex-end; height: 215px; border-radius: 10px 10px 0px 0px;">
											</div>
											<div style="height: 196px; padding: 15px 18px;">
												<div style="height: 100%;">
													<div style="display: flex; justify-content: space-between;">
														<div style="width: 211px;">
															<div class="tipo_imoveis">
																<p>Apartamento</p>
															</div>
															<div class="endereco_imoveis">
																<p>Bem Moema</p>
																<p>Avenida Bem-te-vi, 221</p>
																<p>Moema, São Paulo</p>
															</div>
														</div>
														<div style="height: 40px;">
															<div class='div_heart'>
																<input class="coracao" type='checkbox' id='heart8'>
																<label class="label" for='heart8'>❤</label>
															</div>
														</div>
													</div>

													<div class="descricao_imoveis">
														<p>
															Consulte um de nossos corretores e confira!
														</p>
													</div>
													<div class="icons_imoveis">
														<div class="detalhes_imoveis">
															<i class="fa-regular fa-ruler-horizontal"></i>
															<p>55 a 99m²</p>
														</div>
														<div class="detalhes_imoveis_bed">
															<i class="fa-regular fa-bed"></i>
															<p>3 a 4</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</a>
								</div>
							</div>
						</div>

					</div>

					<div class="div_principal2">

						<div class="lancamentos">
							<p>Novidades</p>
						</div>

						<div class="div_imoveis">
							<div class="row">
								<div class="col-12 col-md-3 form-group " style="height: 390px;">
									<a href="imovel1.php">
										<div class="imoveis">
											<div style="background: url('./assets/img/imovel/imovel1.png') !important; background-size: cover !important; background-position: bottom  !important; display: flex; justify-content: center; align-items: flex-end; height: 215px; border-radius: 10px 10px 0px 0px;">
											</div>
											<div style="height: 196px; padding: 15px 18px;">
												<div style="height: 100%;">
													<div style="display: flex; justify-content: space-between;">
														<div style="width: 211px;">
															<div class="tipo_imoveis">
																<p>Apartamento</p>
															</div>
															<div class="endereco_imoveis">
																<p>ROC Panamby</p>
																<p>Rua Itatupa, 212</p>
																<p>Panamby, São Paulo</p>
															</div>
														</div>
														<div style="height: 40px;">
															<div class='div_heart'>
																<input class="coracao" type='checkbox' id='heart9'>
																<label class="label" for='heart9'>❤</label>
															</div>
														</div>
													</div>

													<div class="descricao_imoveis">
														<p>
															Localizado em um dos bairros mais procurados de São Paulo, o <strong>Panamby</strong> tem toda a infraest...
														</p>
													</div>
													<div class="icons_imoveis">
														<div class="detalhes_imoveis">
															<i class="fa-regular fa-ruler-horizontal"></i>
															<p>55 a 99m²</p>
														</div>
														<div class="detalhes_imoveis_bed">
															<i class="fa-regular fa-bed"></i>
															<p>3 a 4</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</a>
								</div>
								<div class="col-12 col-md-3 form-group " style="height: 390px;">
									<a href="imovel1.php">
										<div class="imoveis">
											<div style="background: url('./assets/img/imovel/imovel2.png') !important; background-size: cover !important; background-position: bottom  !important; display: flex; justify-content: center; align-items: flex-end; height: 215px; border-radius: 10px 10px 0px 0px;">
											</div>
											<div style="height: 196px; padding: 15px 18px;">
												<div style="height: 100%;">
													<div style="display: flex; justify-content: space-between;">
														<div style="width: 211px;">
															<div class="tipo_imoveis">
																<p>Apartamento</p>
															</div>
															<div class="endereco_imoveis">
																<p>Alter Alto De Pinheiros</p>
																<p>Avenida São Gualter, 108</p>
																<p>Alto De Pinheiros, São Paulo</p>
															</div>
														</div>
														<div style="height: 40px;">
															<div class='div_heart'>
																<input class="coracao" type='checkbox' id='heart10'>
																<label class="label" for='heart10'>❤</label>
															</div>
														</div>
													</div>

													<div class="descricao_imoveis">
														<p>
															Conheça o novo empreendimento <strong>ALTER – ALTO DE PINHEIROS</strong> , localizado no Alto de Pinheiros...
														</p>
													</div>
													<div class="icons_imoveis">
														<div class="detalhes_imoveis">
															<i class="fa-regular fa-ruler-horizontal"></i>
															<p>55 a 99m²</p>
														</div>
														<div class="detalhes_imoveis_bed">
															<i class="fa-regular fa-bed"></i>
															<p>3 a 4</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</a>
								</div>
								<div class="col-12 col-md-3 form-group " style="height: 390px;">
									<a href="imovel1.php">
										<div class="imoveis">
											<div style="background: url('./assets/img/imovel/imovel3.png') !important; background-size: cover !important; background-position: bottom  !important; display: flex; justify-content: center; align-items: flex-end; height: 215px; border-radius: 10px 10px 0px 0px;">
											</div>
											<div style="height: 196px; padding: 15px 18px;">
												<div style="height: 100%;">
													<div style="display: flex; justify-content: space-between;">
														<div style="width: 211px;">
															<div class="tipo_imoveis">
																<p>Apartamento</p>
															</div>
															<div class="endereco_imoveis">
																<p>Éden Park By Dror - Torre West</p>
																<p>Avenida Roque Petroni Júnior, 576</p>
																<p>Brooklin, São Paulo</p>
															</div>
														</div>
														<div style="height: 40px;">
															<div class='div_heart'>
																<input class="coracao" type='checkbox' id='heart11'>
																<label class="label" for='heart11'>❤</label>
															</div>
														</div>
													</div>

													<div class="descricao_imoveis">
														<p>
															Nasce um pulmão verde na melhor área do Brooklin!
														</p>
													</div>
													<div class="icons_imoveis">
														<div class="detalhes_imoveis">
															<i class="fa-regular fa-ruler-horizontal"></i>
															<p>55 a 99m²</p>
														</div>
														<div class="detalhes_imoveis_bed">
															<i class="fa-regular fa-bed"></i>
															<p>3 a 4</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</a>
								</div>
								<div class="col-12 col-md-3 form-group " style="height: 390px;">
									<a href="imovel1.php">
										<div class="imoveis">
											<div style="background: url('./assets/img/imovel/imovel4.png') !important; background-size: cover !important; background-position: bottom  !important; display: flex; justify-content: center; align-items: flex-end; height: 215px; border-radius: 10px 10px 0px 0px;">
											</div>
											<div style="height: 196px; padding: 15px 18px;">
												<div style="height: 100%;">
													<div style="display: flex; justify-content: space-between;">
														<div style="width: 211px;">
															<div class="tipo_imoveis">
																<p>Apartamento</p>
															</div>
															<div class="endereco_imoveis">
																<p>Bem Moema</p>
																<p>Avenida Bem-te-vi, 221</p>
																<p>Moema, São Paulo</p>
															</div>
														</div>
														<div style="height: 40px;">
															<div class='div_heart'>
																<input class="coracao" type='checkbox' id='heart12'>
																<label class="label" for='heart13'>❤</label>
															</div>
														</div>
													</div>

													<div class="descricao_imoveis">
														<p>
															Consulte um de nossos corretores e confira!
														</p>
													</div>
													<div class="icons_imoveis">
														<div class="detalhes_imoveis">
															<i class="fa-regular fa-ruler-horizontal"></i>
															<p>55 a 99m²</p>
														</div>
														<div class="detalhes_imoveis_bed">
															<i class="fa-regular fa-bed"></i>
															<p>3 a 4</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>




				<div class="div_detalhes">
					<a href="">
						<div class="mais_detalhes">
							<p>Ver mais destaques</p>
						</div>
					</a>
				</div>

			</section>

			<section id="descomplique" style="height: 680px;">
				<div class="div_descomplique">
					<div class="fundo_descomplique">
						<div class="div_1">
							<div style="display: flex; flex-direction: column; align-items: center;">
								<div class="nome_descomplica">
									<h2>ALUGUEL?</h2>
								</div>
								<div class="titulo_descomplica">
									<p>CHAVES EM 24H</p>
								</div>
								<!-- <div class=texto_descomplique>
									<p>Válido para locação. Após a documentação aprovada, mudança em 24h.</p>
								</div> -->
							</div>

							<div class="div_2">
								<img src="./assets/img/imagem_nobre.png" alt="">
							</div>
						</div>
						<!-- <div class="caixa">
							<img src="./assets/img/image.png" alt="">
						</div> -->
					</div>
				</div>
			</section>


			<section id="detalhes" style="height: 844px; background: #f9f9f9; display: flex; flex-direction: column; align-items: center;">
				<div style="width: 92%; padding-top: 32px;">
					<div class="titulo_descricao">
						<p>São milhares de imóveis em Franca</p>
					</div>
					<div class="row" style="margin-top: 32px; height: 308px;">
						<div class="col-12 col-md-3 form-group nome_cidades">
							<h3>Lorem ipsum dolor sit amet</h3>
							<div class="detalhes_cidades">
								<p>Lorem ipsum dolor sit amet et velit</p>
								<p>Lorem ipsum dolor sit amet et velit</p>
								<p>Lorem ipsum dolor sit amet et velit</p>
								<p>Lorem ipsum dolor sit amet et velit</p>
								<p>Lorem ipsum dolor sit amet et velit</p>
								<p>Lorem ipsum dolor sit amet et velit</p>
							</div>
						</div>
						<div class="col-12 col-md-3 form-group nome_cidades">
							<h3>Lorem ipsum dolor sit amet</h3>
							<div class="detalhes_cidades">
								<p>Lorem ipsum dolor sit amet et velit</p>
								<p>Lorem ipsum dolor sit amet et velit</p>
								<p>Lorem ipsum dolor sit amet et velit</p>
								<p>Lorem ipsum dolor sit amet et velit</p>
								<p>Lorem ipsum dolor sit amet et velit</p>
								<p>Lorem ipsum dolor sit amet et velit</p>
							</div>
						</div>
						<div class="col-12 col-md-3 form-group nome_cidades">
							<h3>Lorem ipsum dolor sit amet</h3>
							<div class="detalhes_cidades">
								<p>Lorem ipsum dolor sit amet et velit</p>
								<p>Lorem ipsum dolor sit amet et velit</p>
								<p>Lorem ipsum dolor sit amet et velit</p>
								<p>Lorem ipsum dolor sit amet et velit</p>
								<p>Lorem ipsum dolor sit amet et velit</p>
								<p>Lorem ipsum dolor sit amet et velit</p>
							</div>
						</div>
						<div class="col-12 col-md-3 form-group nome_cidades">
							<h3>Lorem ipsum dolor sit amet</h3>
							<div class="detalhes_cidades">
								<p>Lorem ipsum dolor sit amet et velit</p>
								<p>Lorem ipsum dolor sit amet et velit</p>
								<p>Lorem ipsum dolor sit amet et velit</p>
								<p>Lorem ipsum dolor sit amet et velit</p>
								<p>Lorem ipsum dolor sit amet et velit</p>
								<p>Lorem ipsum dolor sit amet et velit</p>
							</div>
						</div>
					</div>
				</div>
				<div style="width: 92%; padding-top: 32px;">
					<div class="titulo_solucao">
						<p>Encontre a solução para você</p>
					</div>
					<div class="descricao_solucao">
						<p>com nossos serviços.</p>
					</div>
					<div class="row" style="margin-top: 11px; height: 198px;">
						<div class="col-12 col-md-3 form-group nome_cidades">
							<div class="div_servico">
								<div style="margin-bottom: 29px;"><i class="fa-light fa-house"></i></div>
								<div class="div_texto_servico">
									<h1>Cadastre seu Imóvel</h1>
									<p>Conte com a força da maior rede imobiliária do Brasil.</p>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-3 form-group nome_cidades">
							<div class="div_servico">
								<div style="margin-bottom: 29px;"><i class="fa-regular fa-circle-dollar"></i></div>
								<div class="div_texto_servico">
									<h1>2ª Via de Boleto</h1>
									<p>Conquiste seu lugar com as melhores taxas do mercado.</p>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-3 form-group nome_cidades">
							<div class="div_servico">
								<div style="margin-bottom: 29px;"><i class="fa-regular fa-hand-holding-heart"></i></div>
								<div class="div_texto_servico">
									<h1>Encomende seu Imóvel</h1>
									<p>Conquiste mais espaço no mercado trabalhando em rede.</p>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-3 form-group nome_cidades">
							<div class="div_servico">
								<div style="margin-bottom: 29px;"><i class="fa-regular fa-house-building"></i></div>
								<div class="div_texto_servico">
									<h1>Extrato do Propietário</h1>
									<p>Uma forma mais inteligente de comprar o seu imóvel.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<div style="height: 44px; width: 100%; background: #5058ff;">
			</div>

			<?php include 'footer.php'; ?>

		</div>



	</div>

	<!-- build:js -->
	<script src="assets/js/app.js"></script>
    <script src="./assets/js/vendor/jquery.mask.min.js"></script>
	<!-- endbuild -->
	<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

	<!-- Initialize Swiper -->
	<script>
		var swiper = new Swiper(".mySwiper", {
			slidesPerView: 3,
			spaceBetween: 30,
			slidesPerGroup: 3,
			loop: true,
			loopFillGroupWithBlank: true,
			pagination: {
				el: ".swiper-pagination",
				clickable: true,
			},
			navigation: {
				nextEl: ".swiper-button-next",
				prevEl: ".swiper-button-prev",
			},
		});
	</script>
	<script>
		// When the user scrolls the page, execute myFunction
		window.onscroll = function() {
			myFunction()
		};

		// Get the navbar
		var navbar = document.getElementById("wrap_menu");

		// Get the offset position of the navbar
		var sticky = wrap_menu.offsetTop;

		// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
		function myFunction() {
			if (window.pageYOffset >= sticky) {
				wrap_menu.classList.add("sticky")
			} else {
				wrap_menu.classList.remove("sticky");
			}
		}
	</script>


</body>

</html>