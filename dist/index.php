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

	<title>K2 Solados</title>
	<link rel="shortcut icon" href="assets/img/logo_k2.png">
	<link rel="stylesheet" type="text/css" href="//site-assets.fontawesome.com/releases/v6.1.2/css/all.css">

	<link rel="stylesheet" href="assets/css/app.f0fb815f86f37f6c8fbae2bd92b120c1.css">


	<!-- UIkit CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.15.8/dist/css/uikit.min.css" />

	<!-- UIkit JS -->
	<script src="https://cdn.jsdelivr.net/npm/uikit@3.15.8/dist/js/uikit.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/uikit@3.15.8/dist/js/uikit-icons.min.js"></script>

</head>
<style>
	/* The sticky class is added to the navbar with JS when it reaches its scroll position */
	.sticky {
		position: fixed;
		top: 0;
		width: 100%;
		z-index: 10;
	}

	/* Add some top padding to the page content to prevent sudden quick movement (as the navigation bar gets a new position at the top of the page (position:fixed and top:0) */
	.sticky+.content {
		padding-top: 60px;
	}

	.swiper {
		width: 100%;
		height: 100%;
	}

	.swiper-slide {
		text-align: center;
		font-size: 18px;
		background: #fff;

		/* Center slide text vertically */
		display: -webkit-box;
		display: -ms-flexbox;
		display: -webkit-flex;
		display: flex;
		-webkit-box-pack: center;
		-ms-flex-pack: center;
		-webkit-justify-content: center;
		justify-content: center;
		-webkit-box-align: center;
		-ms-flex-align: center;
		-webkit-align-items: center;
		align-items: center;
	}

	.swiper-slide img {
		display: block;
		width: 100%;
		height: 100%;
		object-fit: cover;
	}

	.icon_produtos {
		color: black !important;
	}

	.uk-open>.uk-modal-dialog {
		background: #f3f3f3;
		width: 50%;
		border-radius: 10px;
	}

	.ref_box {
		height: 140px;
		display: flex;
		flex-direction: column;
		justify-content: space-evenly;
		align-items: flex-start;
	}

	.uk-modal-body>:last-child,
	.uk-modal-footer>:last-child,
	.uk-modal-header>:last-child {
		font-size: 19px;
	}

	[data-uk-cover],
	[uk-cover] {
		width: 435px !important;
		height: 435px !important;
	}

	.imagem_box {
		position: absolute;
		left: 50%;
		width: 60%;
		top: 50%;
		--uk-position-translate-x: -50%;
		--uk-position-translate-y: -50%;
		transform: translate(var(--uk-position-translate-x), var(--uk-position-translate-y));
	}

	.empresa {
		height: 671px;
		background-color: #dcdcdc29;
		display: flex;
		flex-direction: column;
		justify-content: flex-start;
	}

	@media (max-width: 992px) {
		.empresa {
			height: 732px;
		}
	}

	@media (max-width: 766px) {
		.empresa {
			height: 1202px;
		}

		.icon_empresa {
			display: flex;
			justify-content: center;
			padding: 20px;
		}
	}

	@media (max-width: 766px) {
		.empresa {
			height: 1202px;
		}

		.icon_empresa {
			display: flex;
			justify-content: center;
			padding: 20px;
		}
	}

	.p_rodape {
		color: #ffffff;
		font-family: verdana;
		margin-top: 7px
	}

	.icon_empresa {
		display: flex;
		justify-content: center;
		padding: 20px;
	}

	.div-produto {
		width: 24% !important;
	}

	@media (max-width: 1199px) {
		.div-produto {
			width: 31% !important;
		}
	}

	@media (max-width: 991px) {
		.div-produto {
			width: 48% !important;
		}
	}

	@media (max-width: 766px) {
		.div-produto {
			width: 70% !important;
		}

		.uk-open>.uk-modal-dialog {
			width: 100%;
		}

		.p_rodape {
			font-size: 14px;
		}

		.imagem_box {
			max-width: 69% !important;
		}
	}
</style>

<body class="d-flex flex-column h-100">

	<div role="main" class="flex-shrink-0">

		<div class="wrapped" style="background-color: #ee8b01; height: 34px;">

			<div class="container">

				<div class="row" id="topo_verde">

					<div class="col-xs-12 col-md-6" id="telefone1" style="display: flex; justify-content: center;">

						<p class="p_rodape">Atendimento: <i class="fa-brands fa-whatsapp"></i> (16) 99172-0939 | <i class="fa-light fa-phone"></i> (16) 3724-6677 </p>

					</div>

					<div class="col-xs-12 col-md-6 text-center" id="social">

						<a href="https://www.facebook.com/k2solados" target="_blank"><i class="fa-brands fa-facebook" style="color:#ffffff ; font-size: 18px; padding: 10px 10px;"></i></a>
						<a href="https://www.instagram.com/k2solados/" target="_blank"><i class="fa-brands fa-instagram" style="color:#ffffff ; font-size: 18px; padding: 10px 10px;"></i></a>

					</div>

				</div>


			</div>

		</div>
		<section id="home">

			<?php include 'header.php'; ?>

			<?php include 'banner.php'; ?>
		</section>
		<section class="empresa" id="empresa">
			<div class="container text-center">
				<div class="container text-center" style="margin-top: 50px; height: 131px; display: flex; flex-direction: column; justify-content: center;">
					<div>
						<h3 style="font-weight: bold; font-size: 35px;">Empresa</h3>
					</div>
					<p style="margin-bottom: 0rem; font-size: 18px;">Conheça mais Sobre nós</p>
					<div style="position:relative">
						<div style="position: absolute;left: calc(50% + -5px);top: calc(50% + 20px);transform: translate(-50%, -50%);width:50px;border-bottom: 2px solid red;"></div>
						<div style="position: absolute;left: calc(50% + 5px);top: calc(50% + 9px);transform: translate(-50%, -50%);width:50px;border-bottom: 2px solid red;"></div>
					</div>
				</div>
				<br>
				<br>
				<br>
				<div class="container text-center" style="width: 80%;">
					<p style="text-align: left; font-size: 20px; color: #666666;">Trabalhamos com o sistema de parcerias com várias empresas de Franca e de outras cidades</p>
					<p style="text-align: left; font-size: 20px; color: #666666;">Desenvolvemos produtos exclusivos aplicando os valores de nossa empresa, para que o produto de um cliente não comfronte com o de outro.</p>
					<p style="text-align: left; font-size: 20px; color: #666666;">A empresa <b style=" color: black;">K2 SOLADOS</b> oferece todo o suporte necessário para o desenvolvimento dos produtos junto ao cliente; contando com profissionais altamente capacitados nas áreas de desenho, maquetaria, matriz-aria, entre outros</p>
				</div>
			</div>
			<div class="container text-center" style="margin-top:70px; margin-bottom: 4%;">
				<div class="row" style="display: flex; align-items: center; ">
					<div class="icon_empresa col-12 col-md-4 form-group">
						<div>
							<i style="font-size: 40px; color: red;" class="fa-light fa-crop"></i>
							<p style="font-size: 19px;">Diferencial em Design</p>
						</div>
					</div>
					<div class="icon_empresa col-12 col-md-4 form-group">
						<div>
							<i style="font-size: 40px;" class="fa-light fa-money-bill-1"></i>
							<p style="font-size: 19px;">Melhores Preços do Mercado</p>
						</div>
					</div>
					<div class="icon_empresa col-12 col-md-4 form-group">
						<a href="https://wa.me/5516991720939" target="_blank" style="text-decoration:none">
							<div>
								<img src="./assets/img/icons8-whatsapp-48.png" style="width:47px" alt="">
								<p style="color:black; font-size: 19px;">Entre Agora em Contato</p>
							</div>
						</a>
					</div>
				</div>
			</div>
		</section>
		<section id="produtos" style=" height: max-content; display: flex; flex-direction: column; justify-content: flex-start;;">
			<div class="container text-center">
				<div class="container text-center" style="margin-top: 50px; height: 131px; display: flex; flex-direction: column; justify-content: center">
					<div>
						<h3 style="font-weight: bold; font-size: 35px;">Produtos</h3>
					</div>
					<p style="margin-bottom: 0rem; font-size: 18px;">Confira as Nossas Novidades</p>
					<div style="position:relative">
						<div style="position: absolute;left: calc(50% + -5px);top: calc(50% + 20px);transform: translate(-50%, -50%);width:50px;border-bottom: 2px solid red;"></div>
						<div style="position: absolute;left: calc(50% + 5px);top: calc(50% + 9px);transform: translate(-50%, -50%);width:50px;border-bottom: 2px solid red;"></div>
					</div>
				</div>
			</div>
			<div class="container text-center" style="margin-top:25px; margin-bottom: 4%;">
				<div class="row" style="display: flex; justify-content: space-evenly;">
					<?php
					$query = $con->prepare('CALL Proc_S_Produtos');
					$query->execute();
					$res = $query->fetchAll(PDO::FETCH_OBJ);
					$query->closeCursor();
					foreach ($res as $res) {
					?>
						<?php $nome_produto = $res->NomeProduto ?>
						<div class="col-12 col-md-4 mt-5 form-group animate__animated animate__fadeInLeftBig div-produto">
							<form id="formCadastro<?= $res->IDProduto ?>">
								<div class="card card-produto uk-position-relativ" style="border-radius: 12px; height: 384px; border: 2px solid rgb(212 211 211);">
									<a class="uk-button uk-button-default" href="#modal-teste<?= $res->IDProduto ?>" uk-toggle>
										<div class="uk-child-width-1-1 uk-child-width-1-1@s uk-grid-match uk-grid-small" uk-grid>
											<div class="uk-text-center">
												<div class="uk-inline-clip uk-transition-toggle uk-light" tabindex="0">
													<div class="card-header" style="height:222px; background-color: rgb(255 255 255 / 3%); border-bottom: 2px solid rgbrgb(212 211 211); display: flex; flex-direction: column; justify-content: center;">
														<div class="div-img">
															<img style="width:82%;" src="adm\assets\img\produtos\Grande\<?= $res->NomeImagem ?>" alt="">
														</div>
													</div>
													<div class="uk-position-center">
														<span class="uk-transition-fade icon_produtos" uk-icon="icon: search; ratio: 2"></span>
													</div>
												</div>
											</div>
										</div>
									</a>

									<div class="card-body " style="height:140px; display: flex; flex-direction: column; justify-content: space-evenly;">
										<div class="presente text-center">
											<p class="align-middle texto" style="margin-bottom: -10px;">Ref: <?= $res->NomeProduto ?></p>
										</div>
										<div class="presente text-center">
											<p class="align-middle texto" style="margin-bottom: -10px;">Númeração: <?= $res->Numeracao ?></p>
										</div>
										<div class="presente text-center">
											<p class="align-middle texto" style="margin-bottom: -10px;">Material: <?= $res->NomeMaterial ?></p>
										</div>
									</div>

									<div id="modal-teste<?= $res->IDProduto ?>" class="uk-flex-top div_box" uk-modal style="overflow-y: scroll;">
										<div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">

											<button class="uk-modal-close-default" type="button" uk-close></button>

											<script>
												var largura = window.screen.width;
												console.log(largura);
											</script>
											<?php
											$i = 0;

											$query1 = $con->prepare('CALL Proc_S_ImagemProdutos (:NomeProduto)');
											$query1->bindValue(':NomeProduto', $res->NomeProduto);
											$query1->execute();
											$res1 = $query1->fetchAll(PDO::FETCH_OBJ);
											$query1->closeCursor();
											foreach ($res1 as $res1)
												$i++; {
												$largura = '<script> document.write(largura) </script>';

												if ($largura <= "766px") {

													$estilo = $i == 1 ? "auto" : "277px";
												} else {
													$estilo = $i == 1 ? "auto" : "565px";
												}
											?>
												<div class="uk-position-relative div_imagem_box" style="height: <?= $estilo ?>;" uk-slideshow="animation: fade">
												<?php } ?>

												<ul class="uk-slideshow-items">
													<?php
													$query1 = $con->prepare('CALL Proc_S_ImagemProdutos (:NomeProduto)');
													$query1->bindValue(':NomeProduto', $res->NomeProduto);
													$query1->execute();
													$res1 = $query1->fetchAll(PDO::FETCH_OBJ);
													$query1->closeCursor();
													foreach ($res1 as $res1) {
													?>
														<li>
															<img class="imagem_box" src="adm\assets\img\produtos\Grande\<?= $res1->NomeImagem ?>" alt="">
														</li>
													<?php } ?>

												</ul>

												<div class="uk-position-bottom-center uk-position-small">
													<ul class="uk-thumbnav">
														<div>
															<?php

															$query2 = $con->prepare('CALL Proc_S_ImagemProdutos (:NomeProduto)');
															$query2->bindValue(':NomeProduto', $res->NomeProduto);
															$query2->execute();
															$res2 = $query2->fetchAll(PDO::FETCH_OBJ);
															$query2->closeCursor();
															$i = 0;
															foreach ($res2 as $res2) {

															?>
																<li uk-slideshow-item="<?= $i ?>"><a href="#"><img src="adm\assets\img\produtos\Pequena\<?= $res2->NomeImagem ?>" width="100" height="67" alt=""></a></li>
															<?php
																$i++;
															}
															?>

														</div>
													</ul>
												</div>

												</div>
												<div class="card-body ref_box">
													<div class="presente text-center">
														<p class="align-middle texto" style="margin-bottom: -10px;">Ref: <?= $res->NomeProduto ?></p>
													</div>
													<div class="presente text-center">
														<p class="align-middle texto" style="margin-bottom: -10px;">Númeração: <?= $res->Numeracao ?></p>
													</div>
													<div class="presente text-center">
														<p class="align-middle texto" style="margin-bottom: -10px;">Material: <?= $res->NomeMaterial ?></p>
													</div>
												</div>

										</div>
									</div>
								</div>
							</form>
						</div>
					<?php } ?>
				</div>
				<div id="elbutton" class="align-middle col-12 col-md-2 form-group col-button text-center botao animate__animated animate__fadeInRightBig" style="margin-top: 80px; width: 100%; display: flex; justify-content: center;">
					<a href="produtos.php" style="color: #fff; text-decoration: none; height: 55px; background-color: #ff9600; border: #ffffff solid 1px; border-radius: 20px; width: 217px;display: flex; align-items: center; justify-content: center;">
						<p class="voltar" style="margin-top: 14px; font-size: 22px;">Ver Todos</p>
					</a>
				</div>
			</div>
		</section>
		<section id="parceiros" style="height: 414px; background-color:#dcdcdc29;display: flex;flex-direction: column;/* justify-content: center; */">
			<div class="container text-center">
				<div class="container text-center" style="margin-top: 6px; height: 131px; display: flex; flex-direction: column; justify-content: center">
					<div>
						<h3 style="font-weight: bold; font-size: 35px;">Parceiros</h3>
					</div>
					<div style="position:relative">
						<div style="position: absolute;left: calc(50% + -5px);top: calc(50% + 20px);transform: translate(-50%, -50%);width:50px;border-bottom: 2px solid red;"></div>
						<div style="position: absolute;left: calc(50% + 5px);top: calc(50% + 9px);transform: translate(-50%, -50%);width:50px;border-bottom: 2px solid red;"></div>
					</div>
				</div>
			</div>
			<div class="container">
				<div style="position:relative">
					<div style="position: absolute;left: calc(50% + 10px);top: calc(50% + -56px);transform: translate(-50%, -50%);width: 100%; border-bottom: 1px solid #bfbfbf61;"></div>
					<div class="row justify-content-center" style="height: 180px;display: flex;align-content: center;">
						<div class="clientes multiple-items responsive" style="margin-top: -117px; height: 150px; position: relative;">
							<div class="uk-position-relative uk-visible-toggle uk-light" autoplay="true" autoplay-interval="3000" tabindex="-1" uk-slider>

								<ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m">
									<?php
									$query = $con->prepare('CALL Proc_S_Parceiros');
									$query->execute();
									$res = $query->fetchAll(PDO::FETCH_OBJ);
									$query->closeCursor();
									foreach ($res as $res) {
									?>
										<li>
											<a href="<?= $res->Link ?>" target="_blank">
												<div style="display: flex; justify-content: center; height: 308px; align-items: center;">
													<img src="./adm/assets/img/parceiros/<?= $res->Imagem ?>" style="margin: auto; display: block; position: absolute; width: 80px; height: auto;" max-width="85px" height="85px" , width="85px" , object-fit="cover">
												</div>
											</a>
										</li>
									<?php } ?>

								</ul>

								<a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
								<a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

							</div>
						</div>
					</div>
					<div style="position: absolute;left: calc(50% + 10px);top: calc(50% + 102px);transform: translate(-50%, -50%);width: 100%; border-bottom: 1px solid #bfbfbf61;"></div>
				</div>

			</div>
		</section>
		<section id="localizacao" style="height: 792px;">
			<div class="container text-center" style="height: 184px; display: flex; flex-direction: column; justify-content: center;">
				<div class="container text-center" style="height: 131px; display: flex; flex-direction: column; justify-content: center;">
					<div>
						<h3 style="font-weight: bold; font-size: 35px;">Localização</h3>
					</div>
					<div style="position:relative">
						<div style="position: absolute;left: calc(50% + -5px);top: calc(50% + 20px);transform: translate(-50%, -50%);width:50px;border-bottom: 2px solid red;"></div>
						<div style="position: absolute;left: calc(50% + 5px);top: calc(50% + 9px);transform: translate(-50%, -50%);width:50px;border-bottom: 2px solid red;"></div>
					</div>
				</div>
			</div>
			<div class="container text-center">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3736.0345899713334!2d-47.43169389848161!3d-20.545765590305457!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94b0a7e86ace2233%3A0xac6ab9bb2ebc573d!2sAv.%20Wilson%20S%C3%A1bio%20de%20Mello%2C%202080%20-%20S%C3%A3o%20Joaquim%2C%20Franca%20-%20SP%2C%2014406-052!5e0!3m2!1spt-BR!2sbr!4v1661879035303!5m2!1spt-BR!2sbr" width="1100" height="500" style=" width: 90%; border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
		</section>
	</div>

	<?php include 'footer.php'; ?>


	<script src="assets/js/app.f0fb815f86f37f6c8fbae2bd92b120c1.js"></script>

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