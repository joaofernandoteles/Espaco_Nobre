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




    <!-- build:css -->
    <link href="assets/css/app.css" rel="stylesheet">
    <!-- endbuild -->


    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.15.18/dist/css/uikit.min.css" />

    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.15.18/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.15.18/dist/js/uikit-icons.min.js"></script>
</head>

<style>
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

    .opcoes {
        height: 115px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .barra_opcoes {
        width: 92%;
        height: 84px;
        border-bottom: 1px solid #0000003d;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
    }

    .button {
        margin-left: 32px;
        display: flex;
        flex-direction: row;
        align-items: center;
    }

    .button p {
        margin: 0px;
        font-weight: 700;
        font-family: 'Mulish', sans-serif !important;
        padding-left: 10px;
        font-size: 13px;
        color: #000000;
    }

    .button i {
        color: #272727c7;
    }

    .button li {
        width: 164px;
        margin-right: 10px;
        height: 43px;
        border-radius: 5px;
        background: none;
        border: 1px solid #6f6f6f47;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
    }

    .button a {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        text-decoration: none;
    }

    .favoritar {
        display: flex;
        flex-direction: row;
        justify-content: flex-start;
        align-items: center;
        width: 81px;
    }

    .favoritar i {
        color: #5058ff;
        font-size: 12px;
    }

    .favoritar p {
        color: #5058ff;
        font-family: 'Mulish', sans-serif !important;
        margin: 0px !important;
        padding-left: 10px;
        font-size: 12px;
        text-transform: none;
    }


    .favoritado {
        display: flex;
        flex-direction: row;
        justify-content: flex-start;
        align-items: center;
        width: 81px;
    }

    .favoritado i {
        color: #5058ff;
        font-size: 12px;

    }

    .favoritado p {
        color: #5058ff;
        font-family: 'Mulish', sans-serif !important;
        margin: 0px !important;
        padding-left: 10px;
        font-size: 12px;
        text-transform: none;
    }

    .compartilhar i {
        color: #5058ff;
        font-size: 12px;
    }

    .compartilhar p {
        color: #5058ff;
        font-family: 'Mulish', sans-serif !important;
        margin: 0px !important;
        padding-left: 10px;
        font-size: 12px;
        text-transform: none;
    }

    .compartilhar {
        display: flex;
        align-items: center;
        flex-direction: row;
    }

    .navejacao {
        height: 40px !important;
        width: 825px;
    }

    .navejacao p {
        font-family: 'Mulish', sans-serif !important;
        font-style: normal !important;
        line-height: 160% !important;
        color: #2a2a2a !important;
        text-overflow: ellipsis !important;
        height: auto !important;
        overflow: hidden !important;
        line-break: auto !important;
        margin-bottom: 0px !important;
        font-size: 21px !important;
    }

    .div_principal_imovel {
        margin-top: 30px !important;
        margin-bottom: 26px !important;
        display: flex !important;
        flex-direction: column;
        align-items: flex-start;
        width: 92%;
    }

    .mais_detalhes_imovel {
        height: 44px !important;
        width: 120px !important;
        border-radius: 5px !important;
        border: 1px solid #5058ff !important;
        display: flex !important;
        justify-content: center !important;
        align-items: center !important;
    }

    .mais_detalhes_imovel p {
        color: #5058ff !important;
        font-family: 'Mulish', sans-serif !important;
        margin-bottom: 0px !important;
        font-size: 14px !important;
        font-weight: 900;
    }

    .nome1 h1 {
        font-family: 'Mulish', sans-serif !important;
        font-weight: 600;
        font-size: 18px;
    }

    .endereco_imovel p {
        font-size: 14px;
        font-family: 'Mulish', sans-serif !important;
        font-weight: lighter;
    }

    .texto_caracteristica p {
        font-family: 'Mulish', sans-serif !important;
        font-size: 14px;
        font-weight: unset;

    }

    .texto_caracteristica {
        padding-left: 13px;
    }

    .caracteristica {
        display: flex;
        flex-direction: row;
        width: 168px;
    }

    .caracteristica i {
        color: #5058ff;
    }

    .sobre_imovel h2 {
        font-family: 'Mulish', sans-serif !important;
        font-weight: 700;
        font-size: 18px;
        line-height: 19px;
    }

    .texto_sobre p {
        font-size: 14px;
        font-family: 'Mulish', sans-serif !important;
        color: #565656;
    }

    .texto_sobre strong {
        font-size: 14px;
        font-family: 'Mulish', sans-serif !important;
        color: #000;
    }

    .servicos i {
        color: #5058ff;
    }

    .servicos {
        margin-right: 120px;
    }

    .servicos p {
        color: #5058ff;
        font-size: 14px;
        font-family: 'Mulish', sans-serif !important;
        color: #565656;
        margin-bottom: 0px;
    }

    .org_servico {
        display: flex;
        flex-direction: row;
        align-items: center;
        margin: 15px 0px;
    }

    .org_servico p {
        margin-left: 10px;
        font-family: 'Mulish', sans-serif !important;

    }

    .tipo_proximidades i {
        color: #5058ff;
    }

    .tipo_proximidades h3 {
        color: #242f2d;
        font-size: 15px;
        font-weight: 600;
        margin: 0;
        display: inline;
        font-family: 'Mulish', sans-serif !important;
    }

    .descricao_proximidade p {
        color: #797676;
        font-weight: 400;
        font-size: 14px;
        margin-bottom: 0px;
        font-family: 'Mulish', sans-serif !important;

    }

    .descricao_proximidade {
        display: flex;
        justify-content: space-between;
        align-items: center;

    }

    .div_proximidade {
        padding: 25px 108px 25px 14px !important;
    }

    .tipo_ap p {
        font-weight: 300;
        font-size: 24px;
        line-height: 33px;
        font-family: 'Mulish', sans-serif !important;
    }

    .todos_detalhes {
        display: flex;
        flex-direction: row;
    }

    .quantidade {
        display: flex;
        align-items: baseline;
        flex-direction: row;
    }

    .quantidade p {
        padding-left: 10px;
        font-family: 'Mulish', sans-serif !important;

    }

    .quantidade i {
        color: #5058ff;
    }

    .detalhes_ap {
        display: flex;
        flex-direction: column;
        width: 115px;
    }

    .detalhes_ap p {
        margin-bottom: 6px;
        font-family: 'Mulish', sans-serif !important;

    }

    .tipo_ap p {
        font-family: 'Mulish', sans-serif !important;
    }

    .descricao_imovel {
        padding: 0px 32px !important;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .row_ap {
        margin-bottom: 13px;
        height: 160px;
        border: 1px solid #0000003d;
        border-radius: 5px;
    }

    .planta {
        display: flex;
        align-items: center;
        justify-content: center;
        border-right: 1px solid #0000003d;
    }

    .imoveis_navegacao {
        width: 100%;
        padding-bottom: 42px;
    }

    .imoveis_navegacao h2 {
        font-family: 'Mulish', sans-serif !important;
        font-weight: 700;
        font-size: 18px;
        line-height: 19px;
    }

    .div_dados {
        height: 506px;
        border: 1px solid rgb(80, 88, 255);
        border-radius: 7px;
        box-shadow: 0 5px 15px rgb(0 0 0 / 8%);
        padding: 18px 16px;
    }

    .texto_dados h1 {
        font-family: 'Mulish', sans-serif !important;
        font-size: 20px;
        font-weight: 700;
        margin-bottom: 15px;
        text-align: left;
    }

    .texto_dados p {
        font-family: 'Mulish', sans-serif !important;
        font-size: 12px;
        line-height: 20px;
        margin-bottom: 0;
        text-align: left;
    }

    .div_contato {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .distribuicao_info {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        padding: 16px 0px !important;
    }

    .distribuicao_info input {
        width: 100%;
        height: 40px;
        border-radius: 5px;
        border: 1px solid #acacac;
    }

    .distribuicao_info select {
        width: 100%;
        height: 40px;
        border-radius: 5px;
        border: 1px solid #acacac;
        padding: 0px 12px;
        color: #00000094;
        font-family: 'Mulish', sans-serif !important;

    }

    .distribuicao_info label {
        font-family: 'Mulish', sans-serif !important;
        font-size: 13px;
        line-height: 20px;
        margin-bottom: 0;
        text-align: left;
    }

    .row_div {
        width: 100%;
    }

    .div_contato button {
        height: 55px;
        width: 100%;
        margin-top: 20px;
        border-radius: 7px;
        border: none;
        background: #dfdfdf;
        color: #acacac;
        transition: 0.5s !important;
    }

    .div_contato button:hover{
        background: #5058ff;
        color: #fff;
        transition: 0.5s !important;
    }

    .ambiente_seguro p {
        font-weight: 700;
        margin: 0px;
        padding-left: 7px;
        font-family: 'Mulish', sans-serif !important;
        font-size: 11px;
        color: #343434;
    }

    .texto_seguro p {
        margin: 0px;
        font-family: 'Mulish', sans-serif !important;
        font-size: 11px;
        text-align: center;
        color: #464646;
        width: 232px;
    }

    .texto_seguro {
        display: flex;
        justify-content: center;
        margin-top: -8px;
    }

    .ambiente_seguro i {
        font-size: 11px;
    }

    .ambiente_seguro {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        padding: 10px 0px;
    }

    .saiba_mais_seguro p {
        margin: 0px;
        font-weight: 600;
        font-family: 'Mulish', sans-serif !important;
        font-size: 11px;
        text-align: center;
        color: #5058ff;
        width: 232px;
    }

    .saiba_mais_seguro {
        display: flex;
        justify-content: center;

    }

    .codigo_imovel p {
        margin: 0px;
        font-family: 'Mulish', sans-serif !important;
        font-size: 12px;
        text-align: center;
    }

    .codigo_imovel {
        display: flex;
        justify-content: center;
        margin-top: 1px;
    }

    .seta_direita {
        background: #ffffff75;
        width: 50px !important;
        margin-right: 0px !important;
        height: 60px !important;
        display: flex;
        border-radius: 7px 0px 0px 7px;
        justify-content: center;
        flex-direction: column;
        align-items: center;
    }

    .seta_esquerda {
        background: #ffffff75;
        width: 50px !important;
        margin-left: 0px;
        height: 60px !important;
        display: flex;
        border-radius: 0px 7px 7px 0px;
        justify-content: center;
        flex-direction: column;
        align-items: center;
    }

    .bottton_option {
        border: none;
        background: none;
        display: flex;
    }

    #activado {
        background: #5058ff;
    }

    #icon_1 {
        color: #fff !important;
    }

    #p_1 {
        color: #fff !important;
    }

    #fale_conosco {
        margin-bottom: 0px;
        color: #5058ff;
        padding-left: 10px;
    }

    .distribuicao_info input::placeholder {
        font-size: 13px;
        font-family: 'Mulish', sans-serif !important;
    }

    .distribuicao_info input {
        padding-left: 10px;
        font-size: 13px;
        font-family: 'Mulish', sans-serif !important;
    }

    .link_header:hover {
        color: #5058ff !important;
    }
</style>

<body class="d-flex flex-column h-100">

    <div role="main" class="flex-shrink-0">

        <header style="overflow-x: hidden !important;">

            <div style="height: 65px; ">
                <div class="">

                    <nav id="main-menu" style="background-color: #f3c349bf; height:43px" class="">
                        <img class="pull-nav" src="assets/img/menu_imagem.png" alt="menu-icon" style="width: 13px;">
                    </nav>


                    <div>
                        <nav>
                            <div>
                                <div style=" display: flex; flex-direction: row; justify-content: space-between; align-items: center;">
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
                                                        <a href="#empresa" class="link_header" style="text-decoration:none">Alugar</a>
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
                <li class="menu-item li-header"><a href="#localizacao" class="header">Localização</a></li>
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


        <div id="home" style="height: 380px; display: flex; flex-direction: column; justify-content: flex-end;">

            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider style="height: 380px;">

                <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@m uk-grid" style="height: 380px;">
                    <li style="background: url(./assets/img/20.jpg) !important; background-size: cover !important; background-position: center !important;     margin: 0px 2px;">
                    </li>
                    <li style="background: url(./assets/img/40.jpg) !important; background-size: cover !important; background-position: center !important;     margin: 0px 2px;">
                    </li>
                    <li style="background: url(./assets/img/43.jpg) !important; background-size: cover !important; background-position: center !important;     margin: 0px 2px;">
                    </li>
                    <li style="background: url(./assets/img/44.jpg) !important; background-size: cover !important; background-position: center !important;     margin: 0px 2px;">
                    </li>
                </ul>

                <a class="uk-position-center-left uk-position-small uk-hidden-hover seta_esquerda" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                <a class="uk-position-center-right uk-position-small uk-hidden-hover seta_direita" href="#" uk-slidenav-next uk-slider-item="next"></a>

            </div>

        </div>

        <div class="opcoes">
            <div class="barra_opcoes">
                <div class="button">

                    <li id="activado">
                        <a href="" class="bottton_option" onclick="option_foto()">
                            <i class="fa-solid fa-image" id="icon_1"></i>
                            <p id="p_1">Ver fotos</p>
                        </a>
                    </li>
                    <li>
                        <a href="" class="bottton_option" onclick="option_video()">
                            <i class="fa-sharp fa-solid fa-film" id="icon_2"></i>
                            <p id="p_2">Ver video</p>
                        </a>
                    </li>
                    <li>
                        <a href="" class="bottton_option" onclick="option_mapa()">
                            <i class="fa-solid fa-map-location-dot" id="icon_3"></i>
                            <p id="p_3">Ver mapa</p>
                        </a>
                    </li>
                    <li>
                        <a href="" class="bottton_option" onclick="option_view()">
                            <i class="fa-solid fa-user" id="icon_3"></i>
                            <p id="p_4">Street view</p>
                        </a>
                    </li>
                    <li>
                        <a href="" class="bottton_option" onclick="option_planta()">
                            <i class="fa-regular fa-crop-simple" id="icon_4"></i>
                            <p id="p_5">Ver plantas</p>
                        </a>
                    </li>
                </div>
                <div style="display: flex; align-items: center; flex-direction: row; margin-right: 39px;">
                    <button class="uk-button uk-button-default" type="button" uk-toggle="target: .toggle" style="border: none;">
                        <div class="toggle favoritar">
                            <i class="fa-light fa-heart"></i>
                            <p>Favoritar</p>
                        </div>
                        <div class="toggle favoritado" hidden>
                            <i class="fa-solid fa-heart"></i>
                            <p>Desfazer</p>
                        </div>
                    </button>
                    <div class="compartilhar">
                        <i class="fa-light fa-arrow-up-from-square"></i>
                        <p>Compartilhar</p>
                    </div>
                </div>
            </div>
        </div>

        <div style="display: flex; flex-direction: column; align-items: center; height: 2250px;">
            <div class="row" style="width: 1300px !important; display: flex; flex-direction: row; justify-content: center ">
                <div class="col-12 col-md-8 form-group ">
                    <div>

                        <div style="display: flex; flex-direction: column; align-items: center;">

                            <div style="width: 92%;">
                                <div class="nome1">
                                    <h1>Alter Alto De Pinheiros</h1>
                                </div>
                                <div class="nome1">
                                    <h1>Alto De Pinheiros - SP</h1>
                                </div>
                                <div class="endereco_imovel">
                                    <p>Avenida São Gualter, 108 - Alto De Pinheiros - São Paulo/SP</p>
                                </div>
                            </div>
                            <div style="width: 92%; border-bottom: 1px solid #0000003d;">
                                <div style="display: flex; flex-wrap: wrap; margin-top: 34px;">
                                    <div class="caracteristica">
                                        <i class="fa-regular fa-ruler-horizontal"></i>
                                        <div class="texto_caracteristica">
                                            <p style="font-style: normal; font-weight: 700; font-size: 14px; line-height: 19px; margin-bottom: 8px;">Área</p>
                                            <p style="font-size: 14px; font-weight: unset;">205 a 401m²</p>
                                        </div>
                                    </div>
                                    <div class="caracteristica">
                                        <i class="fa-regular fa-apartment"></i>
                                        <div class="texto_caracteristica">
                                            <p style="font-style: normal; font-weight: 700; font-size: 14px; line-height: 19px; margin-bottom: 8px;">Estágio</p>
                                            <p style="font-size: 14px; font-weight: unset;">Não iniciada</p>
                                        </div>
                                    </div>
                                    <div class="caracteristica">
                                        <i class="fa-solid fa-bed"></i>
                                        <div class="texto_caracteristica">
                                            <p style="font-style: normal; font-weight: 700; font-size: 14px; line-height: 19px; margin-bottom: 8px;">Dormitórios</p>
                                            <p style="font-size: 14px; font-weight: unset;">3 a 4</p>
                                        </div>
                                    </div>
                                    <div class="caracteristica">
                                        <i class="fa-solid fa-bath"></i>
                                        <div class="texto_caracteristica">
                                            <p style="font-style: normal; font-weight: 700; font-size: 14px; line-height: 19px; margin-bottom: 8px;">Suítes</p>
                                            <p style="font-size: 14px; font-weight: unset;">3 a 4</p>
                                        </div>
                                    </div>
                                    <div class="caracteristica">
                                        <i class="fa-solid fa-shower-down"></i>
                                        <div class="texto_caracteristica">
                                            <p style="font-style: normal; font-weight: 700; font-size: 14px; line-height: 19px; margin-bottom: 8px;">Banheiros</p>
                                            <p style="font-size: 14px; font-weight: unset;">4 a 5</p>
                                        </div>
                                    </div>
                                    <div class="caracteristica">
                                        <i class="fa-solid fa-car"></i>
                                        <div class="texto_caracteristica">
                                            <p style="font-style: normal; font-weight: 700; font-size: 14px; line-height: 19px; margin-bottom: 8px;">Vagas</p>
                                            <p style="font-size: 14px; font-weight: unset;">3 a 4</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div style="margin-top: 27px;     width: 92%;">
                                <div class="sobre_imovel">
                                    <h2>Sobre o imóvel</h2>
                                </div>
                                <div class="texto_sobre">
                                    <p>Conheça o novo empreendimento <strong>ALTER – ALTO DE PINHEIROS</strong>, localizado no Alto de Pinheiros um bairro nobre da zona Oeste da cidade de São Paulo, que é bastante arborizado, calmo, seguro e repleto de espaços públicos verdes que...</p>
                                </div>
                            </div>

                            <div style="margin-top: 80px; border-bottom: 1px solid #0000003d; padding-bottom: 33px;     width: 92%;">
                                <div class="sobre_imovel">
                                    <h2>Instalações do condomínio</h2>
                                </div>

                                <div style="display: flex; justify-content: flex-start;">

                                    <div class="servicos">
                                        <div class="org_servico">
                                            <i class="fa-duotone fa-puzzle-piece"></i>
                                            <p>Brinquedoteca</p>
                                        </div>
                                        <div class="org_servico">
                                            <i class="fa-solid fa-heart"></i>
                                            <p>Lobby</p>
                                        </div>
                                        <div class="org_servico">
                                            <i class="fa-sharp fa-solid fa-person-swimming"></i>
                                            <p>Piscina descoberta</p>
                                        </div>
                                    </div>
                                    <div class="servicos">
                                        <div class="org_servico">
                                            <i class="fa-solid fa-grill-hot"></i>
                                            <p>Churrasqueira</p>
                                        </div>
                                        <div class="org_servico">
                                            <i class="fa-duotone fa-dog-leashed"></i>
                                            <p>Pet Place</p>
                                        </div>
                                        <div class="org_servico">
                                            <i class="fa-solid fa-teddy-bear"></i>
                                            <p>Playground</p>
                                        </div>
                                    </div>
                                    <div class="servicos">
                                        <div class="org_servico">
                                            <i class="fa-sharp fa-solid fa-dumbbell"></i>
                                            <p>Fitness</p>
                                        </div>
                                        <div class="org_servico">
                                            <i class="fa-solid fa-water-ladder"></i>
                                            <p>Piscina coberta</p>
                                        </div>
                                        <div class="org_servico">
                                            <i class="fa-solid fa-tree-city"></i>
                                            <p>Quadra gramada</p>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div style="margin-top: 45px; border-bottom: 1px solid #0000003d; padding-bottom: 33px;     width: 92%;">

                                <div class="sobre_imovel">
                                    <h2>Nas proximidades do imóvel</h2>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-6 form-group div_proximidade">
                                        <div class="tipo_proximidades">
                                            <i class="fa-solid fa-fork-knife"></i>
                                            <h3>Gastronomia</h3>
                                        </div>
                                        <div style="padding-top: 13px;">
                                            <div class="descricao_proximidade">
                                                <p>Pizzaria E Restaurante Cerro</p>
                                                <p>124m</p>
                                            </div>
                                            <div class="descricao_proximidade">
                                                <p>Restaurante Oriental Ting</p>
                                                <p>167m</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 form-group div_proximidade">
                                        <div class="tipo_proximidades">
                                            <i class="fa-solid fa-user-graduate"></i>
                                            <h3>Educação</h3>
                                        </div>
                                        <div style="padding-top: 13px;">
                                            <div class="descricao_proximidade">
                                                <p>Escola Portal Criança</p>
                                                <p>350m</p>
                                            </div>
                                            <div class="descricao_proximidade">
                                                <p>Escola De Educação Infantil Arte E Vida</p>
                                                <p>364m</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-6 form-group div_proximidade">
                                        <div class="tipo_proximidades">
                                            <i class="fa-solid fa-house-medical"></i>
                                            <h3>Saúde e Bem-estar</h3>
                                        </div>
                                        <div style="padding-top: 13px;">
                                            <div class="descricao_proximidade">
                                                <p>Academia Ginástica Biocerro</p>
                                                <p>94m</p>
                                            </div>
                                            <div class="descricao_proximidade">
                                                <p>Academia Bioritm</p>
                                                <p>98m</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div id="imoveis" style="height: 1200px; display: flex; flex-direction: column; justify-content: flex-start; align-items: center;">
                            <div class="div_principal_imovel">

                                <div class="imoveis_navegacao">
                                    <h2>Imóveis baseados na sua navegação:</h2>
                                </div>

                                <div style="width: 100%;">
                                    <div class="row">

                                        <div class="col-12 col-md-6 form-group " style="height: 390px;">
                                            <a href="">
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
                                                                <div class="detalhes_imoveis">
                                                                    <i class="fa-regular fa-apartment"></i>
                                                                    <p>Não iniciada</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-12 col-md-6 form-group " style="height: 390px;">
                                            <a href="">
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
                                                                <div class="detalhes_imoveis">
                                                                    <i class="fa-regular fa-apartment"></i>
                                                                    <p>Não iniciada</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top: 70px;">
                                        <div class="col-12 col-md-6 form-group " style="height: 390px;">
                                            <a href="">
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
                                                                <div class="detalhes_imoveis">
                                                                    <i class="fa-regular fa-apartment"></i>
                                                                    <p>Não iniciada</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-12 col-md-6 form-group " style="height: 390px;">
                                            <a href="">
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
                                                                <div class="detalhes_imoveis">
                                                                    <i class="fa-regular fa-apartment"></i>
                                                                    <p>Não iniciada</p>
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


                            <div class="div_detalhes">
                                <a href="">
                                    <div class="mais_detalhes_imovel">
                                        <p>Ver mais</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-12 col-md-4 form-group">
                    <div class="uk-background-muted uk-height-large" style="height: 2210px; background-color: #ffffff; display: flex; flex-direction: column; align-items: flex-start;">
                        <div style="width: 370px;">
                            <div class="uk-card uk-card-default uk-card-body uk-text-center uk-position-z-index" uk-sticky="end: !.uk-height-large; offset: 30" style="height: 610px; padding: 0px; box-shadow: none;">

                                <div class="div_dados">
                                    <div class="texto_dados">
                                        <div>
                                            <h1>Alter Alto De Pinheiros</h1>
                                        </div>
                                        <div>
                                            <p>Preencha os campos abaixo com seus dados e um de nossos corretores entrará em contato.</p>
                                        </div>
                                    </div>

                                    <div class="div_contato">
                                        <div class="row row_div">
                                            <div class="col-12 col-md-12 form-group distribuicao_info">
                                                <label> Seu nome:</label>
                                                <input type="text" placeholder="Digite seu nome" required>
                                            </div>
                                        </div>

                                        <div class="row row_div">
                                            <div class="col-12 col-md-6 form-group distribuicao_info" style="padding: 16px 12px 16px 0px !important;">
                                                <label> E-mail:</label>
                                                <input type="email" placeholder="Digite seu e-mail" required>
                                            </div>
                                            <div class="col-12 col-md-6 form-group distribuicao_info" style="padding: 16px 0px 16px 12px !important;">
                                                <label> Celular:</label>
                                                <input type="text" class="form-control mask-telefone" placeholder="( XX ) XXXXX-XXXX" required>
                                            </div>
                                        </div>

                                        <div class="row row_div">
                                            <div class="col-12 col-md-12 form-group distribuicao_info">
                                                <label for="cars">Forma de contato:</label>
                                                <select id="contato">
                                                    <option value="whatsapp">Whatsapp</option>
                                                    <option value="telefone">Telefone</option>
                                                    <option value="email">Email</option>
                                                    <option value="chat">Chat</option>
                                                </select>
                                            </div>
                                        </div>
                                        <button> Enviar dados </button>
                                    </div>
                                </div>

                                <div>
                                    <div class="ambiente_seguro">
                                        <i class="fa-solid fa-lock-keyhole"></i>
                                        <p> Este é um ambiente seguro!</p>
                                    </div>

                                    <div class="texto_seguro">
                                        <p>Trabalhamos constantemente para proteger sua segurança e privacidade.</p>
                                    </div>

                                    <div class="saiba_mais_seguro">
                                        <a href="">
                                            <p>Saiba mais</p>
                                        </a>
                                    </div>
                                    <div class="codigo_imovel">
                                        <p>Código do imóvel: REM20763</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>



    <div id="detalhes" style="height: 430px; display: flex; flex-direction: column; align-items: center;">
        <div style="width: 1240px; padding-top: 32px; border-top:1px solid #dfdfdf; width: 92%;">
            <div class="titulo_descricao">
                <p>Continue procurando</p>
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
    </div>

    <div>
        <div style="height: 44px; width: 100%; background: #5058ff;">
        </div>
    </div>



    <?php include 'footer.php'; ?>


    <!-- build:js -->
    <script src="assets/js/app.js"></script>
    <script src="assets/js/vendor/jquery.mask.min.js"></script>
    <!-- endbuild -->
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


        const icon = document.querySelector(".icon");
        const name = document.querySelector(".name");
    </script>


</body>

</html>