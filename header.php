<!DOCTYPE html>
<html lang="pt-br" class="h-100" style="overflow-x: hidden;">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Alsite DevTeam">

	<title>TITULO DO SITE</title>
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" type="text/css" href="//site-assets.fontawesome.com/releases/v6.1.2/css/all.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

	<!-- build:css -->
	<link href="assets/css/app.css" rel="stylesheet">
	<!-- endbuild -->

</head>

<style>
	#main-menu ul.menu>li:hover,
	#main-menu ul.menu>li.active {
		color: #fff !important;
		background-color: #ff9600 !important;
		border-radius: 10px !important;
		display: flex;
		height: 35px;
		flex-direction: column;
		justify-content: center;
	}

	#main-menu ul.menu>li:hover,
	#main-menu ul.menu>li.active {
		color: #fff !important;
		background-color: #ff9600 !important;
		border-radius: 10px !important;
		display: flex;
		height: 35px;
		flex-direction: column;
		justify-content: center;
	}

	.header {
		color: black !important;
		font-size: 21px !important;
		text-transform: capitalize !important;
	}

	.div-1_header {
		background-color: #fff;
		height: 52px;
		max-width: 100% !important;
	}

	.div-2_header {
		height: 52px;
		display: flex;
		align-items: flex-end;
		max-width: 100% !important;
	}

	.ul-header {
		padding: 0 170px !important;
		display: flex;
		justify-content: center;
	}

	.li-header {
		display: flex;
		height: 35px;
		flex-direction: column;
		justify-content: center;
	}

	@media (max-width: 680px) {
		.header {
			font-size: 16px !important;
		}

		/* .header_araxa {
			justify-content: flex-start !important;
		} */

		.texto_header {
			display: none !important;
		}

		.logo_header {
			padding-right: 180px !important;
		}

		.menu_big {
			display: flex !important;
			align-items: center !important;
		}
	}

	@media (max-width: 520px) {
		.header {
			font-size: 14px !important;
			text-decoration: none;
		}

		.li-header {
			font-size: 14px !important;
			width: 87px;
		}

		.wrap_menu {
			height: 48px;
		}

		#main-menu {
			display: flex;
		}
	}

	.container,
	.container-fluid,
	.container-sm,
	.container-md,
	.container-lg,
	.container-xl,
	.container-xxl {
		width: 100%;
		padding-right: 0 !important;
		padding-left: 0 !important;
		margin-right: auto;
		margin-left: auto;
	}

	header .wrap_menu {
		background-color: #ffffff !important;
	}

	.wrap_menu {
		height: 60px;
		display: flex;
		align-items: flex-end;
	}

	@media (min-width: 520px) {
		#main-menu {
			display: none;
		}
	}



	.header_araxa {
		position: fixed !important;
		top: 0px !important;
		width: 100% !important;
		display: flex !important;
		height: 68px !important;
		align-items: center !important;
		background: #ffffff !important;
		padding: 0px !important;
		justify-content: space-between;
		border: 1px solid #9090904d;
	}




	.link_header {
		color: #000000 !important;
		font-size: 14px !important;
		line-height: 19px;
		font-family: 'Mulish', sans-serif;
	}

	.li_header {
		display: flex;
		align-items: center;
		padding: 11px;
	}


	.infos {
		max-width: 1902px;
		top: 55px !important;
		left: -576px !important;
		width: 1289px;
	}

	.infos_2 {
		max-width: 1902px;
		top: 55px !important;
		left: -652px !important;
		width: 1289px;
	}

	.infos_receitas {
		top: 55px !important;
		left: -1040% !important;
		width: 1606%;
	}


	.menu_big {
		display: none
	}

	.texto_header {
		margin-left: 43px;
	}

	.icon_header {
		padding-right: 63px;
		display: flex;
		flex-direction: row;
		align-items: center;
	}

	#fale_conosco {
		margin-bottom: 0px;
		color: #5058ff;
		padding-left: 10px;
	}

	.link_header:hover{
		color: #5058ff !important;
	}
</style>


<header style="overflow-x: hidden !important;">

	<div style="height: 65px; ">
		<div class="">

			<nav id="main-menu" style="background-color: #f3c349bf; height:43px" class="">
				<img class="pull-nav" src="assets/img/menu_imagem.png" alt="menu-icon" style="width: 13px;">
			</nav>


			<div>
				<nav>
					<div>
						<div style=" display: flex; flex-direction: row; justify-content: space-between; align-items: center; border-bottom: 1px solid #d6d6d659">
							<ul style=" margin-bottom: 0px; margin-left: 34px; display: flex; align-items: center; flex-direction: row;">
								<div class="logo_header" style="display: flex; align-items: center;">
									<a href="index.php"><img src="./assets/img/logo_imoveis.png" alt="" style="width: 113px;"></a>
								</div>
								<div class="menu_big">
									<img class="pull-nav" src="assets/img/menu-icon.png" alt="menu-icon" style="width: 20px;">
								</div>
								<div class="texto_header" style="display: flex; flex-direction: row;">
									<li class="li_header">
										<div>
											<div class="uk-inline">
												<a href="#empresa" class="link_header" style="text-decoration:none"> Alugar</a>
											</div>
										</div>
									</li>
									<li class="li_header">
										<div>
											<div class="uk-inline">
												<a href="#empresa" class="link_header" style="text-decoration:none">Comprar</a>
											</div>
										</div>
									</li>
									<li class="li_header">
										<div>
											<div class="uk-inline">
												<a href="#produtos" class="link_header" style="text-decoration:none">Quem Somos </a>
											</div>
										</div>
									</li>
									<li class="li_header">
										<div>
											<div class="uk-inline">
												<a href="https://api.whatsapp.com/send?phone=5516999997917&text=&source=&data=" target="_blank" data-toggle-visibility="box_whatsapp" data-show-shadow="false" class="link_header" style="text-decoration:none">Contato</a>
											</div>
										</div>
									</li>
								</div>
							</ul>

							<div class="icon_header">
								<a href="">
									<div style="display: flex; flex-direction: row; align-items: center; padding-right: 34px;">
										<img style="width: 23px;" src="./assets/img/addada.png" alt="">
										<p id="fale_conosco">Fale conosco</p>
									</div>
								</a>
								<div style="padding-right: 34px;">
									<img style="width: 23px;" src="./assets/img/icon_coracao.png" alt="">
								</div>
								<div>
									<img style="width: 23px;" src="./assets/img/icon_perfil.png" alt="">
								</div>
							</div>

						</div>
					</div>
				</nav>

			</div>

		</div>


	</div>




</header>

<div class="mobile-menu-cover"></div>
<!-- MOBILE MENU -->
<nav class="mobile-menu" style="background: #1b1f23!important;">

	<a href="index.php">
		<img src="assets/img/logo.png" alt="logo" class="img-fluid" style="max-width: 60% !important;">
	</a>

	<svg class="svg-plus pull-nav">
		<use xlink:href="#svg-plus"></use>
	</svg>

	<!-- MENU LIST -->
	<ul class="menu">
		<li class="menu-item li-header"><a href="#home" class="header">Home</a></li>
		<li class="menu-item li-header"><a href="#empresa" class="header">Empresa</a></li>
		<li class="menu-item li-header"><a href="#produtos" class="header">Produtos</a></li>
		<li class="menu-item li-header"><a href="#localizacao" class="header">Localiza????o</a></li>
		<li class="menu-item li-header"><a href="https://api.whatsapp.com/send?phone=5516999887483&text=&source=&data=" class="header" target="_blank">Contato</a></li>
	</ul>

	<svg style="display: none;">
		<symbol id="svg-arrow" viewBox="0 0 3.923 6.64014" preserveAspectRatio="xMinYMin meet">
			<path d="M3.711,2.92L0.994,0.202c-0.215-0.213-0.562-0.213-0.776,0c-0.215,0.215-0.215,0.562,0,0.777l2.329,2.329
			L0.217,5.638c-0.215,0.215-0.214,0.562,0,0.776c0.214,0.214,0.562,0.215,0.776,0l2.717-2.718C3.925,3.482,3.925,3.135,3.711,2.92z" />
		</symbol>
	</svg>

	<svg style="display: none;">
		<symbol id="svg-plus" viewBox="0 0 13 13" preserveAspectRatio="xMinYMin meet">
			<rect x="5" width="3" height="13" />
			<rect y="5" width="13" height="3" />
		</symbol>
	</svg>

</nav>

</html>