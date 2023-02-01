<!DOCTYPE html>
<html lang="pt-br" class="h-100">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Alsite DevTeam">

	<title>TITULO DO SITE</title>
	<link rel="shortcut icon" href="favicon.ico">

	<!-- build:css -->
	<link href="assets/css/app.css" rel="stylesheet">
	<!-- endbuild -->
	<style type="text/css">
		.py-3 {
			padding-top: 1rem !important;
			padding-bottom: 1rem !important;
		}

		footer {
			background-color: #e2e2e2;
			color: #393778;
		}

		.bag-whatsapp-alert {
			z-index: 1020;
			position: fixed;
			bottom: 120px;
			padding: 5px 7px;
			right: 156px;
			background: #616161;
			display: none;
			color: #fff;
			border-radius: 5px;
			font-size: 15px;
			width: auto;
		}

		.bag-whatsapp-alert-arrow {
			position: fixed;
			bottom: 128px;
			padding: 4px 7px;
			right: 150px;
			background: #616161;
			display: none;
			width: 15px;
			height: 15px;
			-webkit-transform: rotate(45deg);
			transform: rotate(45deg);
			z-index: 31;
		}

		.bloco-wthats .link-whats,
		.titulo {
			overflow: hidden;
			background-repeat: no-repeat;
		}

		.bloco-wthats {
			position: fixed;
			right: 46px;
			bottom: 89px;
			z-index: 100;
			width: 100px;
			height: 100px;
		}

		.bloco-wthats .aura,
		.bloco-wthats .link-whats {
			position: absolute;
			display: block;
			top: 50%;
			width: 70px;
			height: 70px;
			border-radius: 50%;
			-khtml-transform: translate(-50%, -50%);
			left: 50%;
		}

		.bloco-wthats .link-whats {
			z-index: 1;
			background-color: #44bb6e;
			background-image: url(./assets/img/whatsapp.png) !important;
			background-size: 55px !important;
			background-position: 50% 50%;
			background-size: 30px;
			-webkit-box-shadow: 6px 6px 25px 0 rgba(0, 0, 0, 0.3);
			box-shadow: 6px 6px 25px 0 rgba(0, 0, 0, 0.3);
			-webkit-transform: translate(-50%, -50%);
			transform: translate(-50%, -50%);
			-webkit-transition: all 0.3s ease;
			transition: all 0.3s ease;
		}

		.bloco-wthats .link-whats:hover {
			background-color: #16b84f;
		}

		.bloco-wthats .aura {
			background-color: #44bb6e;
			filter: alpha(opacity=100);
			-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
			-webkit-opacity: 1;
			-khtml-opacity: 1;
			-moz-opacity: 1;
			-ms-opacity: 1;
			-o-opacity: 1;
			opacity: 1;
			-webkit-transform: translate(-50%, -50%);
			transform: translate(-50%, -50%);
			-webkit-transition: width 1.5s, height 1.5s, opacity 2.5s;
			transition: width 1.5s, height 1.5s, opacity 2.5s;
			-webkit-animation-name: aura;
			animation-name: aura;
			-webkit-animation-duration: 2s;
			animation-duration: 2s;
			-webkit-animation-iteration-count: infinite;
			animation-iteration-count: infinite;
		}

		@-webkit-keyframes aura {
			0% {
				filter: alpha(opacity=100);
				-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
				-webkit-opacity: 1;
				-khtml-opacity: 1;
				-moz-opacity: 1;
				-ms-opacity: 1;
				-o-opacity: 1;
				opacity: 1;
				width: 70px;
				height: 70px;
			}

			100% {
				filter: alpha(opacity=0);
				-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
				-webkit-opacity: 0;
				-khtml-opacity: 0;
				-moz-opacity: 0;
				-ms-opacity: 0;
				-o-opacity: 0;
				opacity: 0;
				width: 150px;
				height: 150px;
			}
		}

		@keyframes aura {
			0% {
				filter: alpha(opacity=100);
				-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
				-webkit-opacity: 1;
				-khtml-opacity: 1;
				-moz-opacity: 1;
				-ms-opacity: 1;
				-o-opacity: 1;
				opacity: 1;
				width: 70px;
				height: 70px;
			}

			100% {
				filter: alpha(opacity=0);
				-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
				-webkit-opacity: 0;
				-khtml-opacity: 0;
				-moz-opacity: 0;
				-ms-opacity: 0;
				-o-opacity: 0;
				opacity: 0;
				width: 150px;
				height: 150px;
			}
		}

		@media (max-width: 766px) {
			.endereço_footer {
				width: 271px;
			}

			.imagem_footer {
				display: flex;
				justify-content: center;
			}

			.div_imagem {
				display: flex;
				justify-content: center;
			}

			.uk-open>.uk-modal-dialog {
				width: 100%;
			}

			.div_info {
				display: flex;
				flex-direction: column;
				align-items: center;
			}

			.bloco-wthats {
				bottom: 66px !important;
				right: 16px !important;
			}

			.bag-whatsapp-alert-arrow {
				bottom: 106px;
				right: 123px;
			}

			.bag-whatsapp-alert {
				bottom: 98px;
				right: 129px;
			}

			.footer {
				height: 397px !important;
				background: #1b1f23;
			}

			.div_footer {
				height: 363px !important;
			}

			.logo {
				margin-left: 0px !important;
			}
		}

		.info_footer {
			display: flex;
			align-items: center;
			padding: 2px;
		}

		.info_telefone {
			display: flex;
			align-items: baseline;
			margin-top: 7px;
		}

		.detales p {
			display: flex;
			flex-direction: column;
			align-items: center;
			font-size: 8px;
			font-family: 'Michroma', sans-serif;
			color: #f7b64a;
			letter-spacing: 2px;
		}

		.div_footer {
			height: 390px;
			background: #fff;
		}

		.footer {
			height: 390px;
			background: #fff;
		}

		.logo {
			margin-bottom: 12px;
			width: 264px;
		}

		.nobre p {
			font-style: normal;
			font-weight: 700;
			font-size: 14px;
			line-height: 20px;
			color: #6f6f6f;
			padding-bottom: 16px;
			font-family: 'Mulish', sans-serif !important;
			margin-bottom: 0px
		}

		.detalhes_nobre {
			padding-top: 38px;
			display: flex;
			flex-direction: row;
			justify-content: space-between;
		}

		.web_nobre {
			padding: 38px 76px;
			display: flex;
			flex-direction: row;
			justify-content: space-between;
		}

		.descricao_nobre p {
			margin-bottom: 16px;
			line-height: 18px;
			font-family: 'Mulish', sans-serif !important;
			font-weight: lighter;
			font-size: 15px;
			color: #1b1f23;
		}

		.icon_nobre p {
			margin-bottom: 16px;
			line-height: 18px;
			font-family: 'Mulish', sans-serif !important;
			font-weight: lighter;
			font-size: 15px;
			padding-left: 10px;
		}

		.icon_nobre i {
			color: #6f6f6f;
		}

		.div_footer2 {
			margin-top: 55px;
			margin-left: 110px;
			display: flex;
			flex-direction: row;
			justify-content: flex-start;
		}
	</style>
</head>
<footer class="footer">
	<div class="container div_footer">
		<div class="row vertical-align div_footer2">
			<div class="col-12 col-md-4 form-group imagem_footer">
				<a href="index.php"><img class="logo" src="assets/img/logo_imoveis.png" alt=""></a>
			</div>
			<div class="col-12 col-md-4 form-group detalhes_nobre">
				<div>
					<div class="nobre">
						<p>Espaço Nobre</p>
					</div>
					<div class="descricao_nobre">
						<a href="">
							<p>Entre em Contato</p>
						</a>
						<a href="">
							<p>Trabalhe Conosco</p>
						</a>
						<a href="">
							<p>Onde Estamos</p>
						</a>
					</div>
				</div>
				<div>
					<div class="nobre">
						<p>Serviços</p>
					</div>
					<div class="descricao_nobre">
						<a href="">
							<p>Cadastros e Serviços</p>
						</a>
						<a href="">
							<p>Encomende seu Imóvel</p>
						</a>
						<a href="">
							<p>Cadastre seu Imóvel</p>
						</a>
						<a href="">
							<p>2ª Via de Boleto</p>
						</a>
						<a href="">
							<p>Extrato do Propietário</p>
						</a>
					</div>
				</div>

			</div>
			<div class="col-12 col-md-2 form-group web_nobre">
				<div>
					<div class="nobre">
						<p>Redes Sociais</p>
					</div>
					<div class="icon_nobre">
						<div style="display: flex;"><i class="fa-brands fa-square-facebook"></i>
							<p>Facebook</p>
						</div>
						<div style="display: flex;"><i class="fa-brands fa-twitter"></i>
							<p>Twitter</p>
						</div>
						<div style="display: flex;"><i class="fa-brands fa-instagram"></i>
							<p>Instagram</p>
						</div>
						<div style="display: flex;"><i class="fa-brands fa-youtube"></i>
							<p>YouTube</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div>

		<div class="whatsapp">
			<span class="bag-whatsapp-alert" style="display: block;">Podemos Ajudar?</span>
			<span class="bag-whatsapp-alert-arrow" style="display: block;"></span>
			<div class="bloco-wthats" id="whatsappbtn">
				<a href="https://api.whatsapp.com/send?phone=5516999997917&text=&source=&data=" target="_blank" data-toggle-visibility="box_whatsapp" data-show-shadow="false" class="link-whats"></a>
				<div class="aura" data-ix="new-interaction"></div>
			</div>
			<audio hidden="hidden" id="whatsapp-song">
				<source src="assets/img/WhatsApp.mp3" type="audio/mp3" />
			</audio>
		</div>
</footer>

</html>