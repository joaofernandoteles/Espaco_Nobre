<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-white" id="sidenav-main" data-color="dark">
    <div style="background: #1B1F23;">
        <a class="navbar-brand m-0 text-center" href="index.php">
            <img src="assets/img/logo.png" width="175" class="navbar-brand-img" alt="main_logo">
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse w-auto h-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="banner_list.php" class="nav-link <?= $pagina == 'Banners' ? 'active' : '' ?>">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa fa-camera-retro iconeHeader" aria-hidden="true"></i>
                    </div>
                    <span class="nav-link-text ms-1">Banner Home</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="categoria_list.php" class="nav-link <?= $pagina == 'Categorias' ? 'active' : '' ?>">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa fa-list iconeHeader" aria-hidden="true"></i>
                    </div>
                    <span class="nav-link-text ms-1">Categoria</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="produto_list.php" class="nav-link <?= $pagina == 'Produtos' ? 'active' : '' ?>">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa fa-plus-square iconeHeader" aria-hidden="true"></i>
                    </div>
                    <span class="nav-link-text ms-1">Produto</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="login.php" class="nav-link <?= $pagina == 'Sub Materiais' ? 'active' : '' ?>">

                    <span class="nav-link-text ms-1">TELA DE LOGIN</span>
                </a>
            </li>
        </ul>
    </div>
</aside>