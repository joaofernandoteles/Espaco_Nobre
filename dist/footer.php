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

	<link rel="stylesheet" href="assets/css/app.f0fb815f86f37f6c8fbae2bd92b120c1.css">

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
				width: 362px
			}

			.imagem_footer {
				margin-left: -70px;
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
		}

		.info_footer {
			display: flex;
			align-items: center;
			padding: 2px;
		}
	</style>
</head>
<footer class="mt-auto py-3">
	<div class="container" style="background-color: #e2e2e2;display: flex;flex-direction: column;align-items: center;">
		<div class="row vertical-align div_imagem">
			<div class="col-md-6 text-center imagem_footer" style=" width: auto;">
				<a href="index.php"><img src="assets/img/logo_k2.png" style="width: 109px; margin-left: 47px;" alt=""></a>
			</div>
			<div class="col-md-6 endereco" style=" width: auto;display: flex;flex-direction: column;align-items: center;">
				<div class="endereço_footer" style=" display: flex; align-items: baseline;">
					<i style="font-size: 19px;margin-top: 7px; padding: 1px 10px;" class="fa-light fa-house"></i>
					<p style=" font-size: 14px; margin-bottom: -5px;"> Av. Wilson Sábio de Mello, n° 2080 | Distrito Industrial | Franca-SP | Cep: 14406-052 </p>
				</div>
				<div style=" display: flex;" class="div_info">
					<div class="info_footer" style="margin-top: 10px; height: 30px;">
						<i style="font-size: 19px;margin-top: -6px;" class="fa-light fa-envelope"></i>
						<p style="margin-left: 11px; margin-top: 16px;;font-size: 14px;">contato@k2solados.com.br |</p>
					</div>
					<div class="info_footer">
						<i class="fa-light fa-phone" style="padding: 10px 3px; font-size: 14px;"></i>
						<p style=" font-size: 14px; margin-bottom: -5px;"> Telefone: (16) 3724-6677 | </p>
					</div>
					<div class="info_footer">
						<a href="https://wa.me/5516991720939" target="_blank" style="padding: 1px 10px 0px 1px;" class="btn btn-social-icon btn-whatsapp">
							<img src="./assets/img/icons8-whatsapp-48.png" style="width:23px" alt="">
						</a>
						<span style="margin-left: -12px;" class="whatsapp">
							<p style=" font-size: 14px; margin-bottom: -5px;"> (16) 99172-0939</p>
						</span>
					</div>


				</div>
				<div class="col-md-6 text-right telefones" style=" text-align: center; width: 100%;">
					Desenvolvido por <a href="http://alsite.com.br/" target="_blank"> <img src="./assets/img/alsite.png" alt=""></a>
				</div>
			</div>

		</div>
	</div>
	<div class="whatsapp">
		<span class="bag-whatsapp-alert" style="display: block;">Podemos Ajudar?</span>
		<span class="bag-whatsapp-alert-arrow" style="display: block;"></span>
		<div class="bloco-wthats" id="whatsappbtn">
			<a href="https://api.whatsapp.com/send?phone=5516991720939&text=&source=&data=" target="_blank" data-toggle-visibility="box_whatsapp" data-show-shadow="false" class="link-whats"></a>
			<div class="aura" data-ix="new-interaction"></div>
		</div>
		<audio hidden="hidden" id="whatsapp-song">
			<source src="assets/img/WhatsApp.mp3" type="audio/mp3" />
		</audio>
	</div>
</footer>

</html>