<ul class="navbar-nav  ms-auto mb-2 mb-lg-0 align-items-center">
       <?php if(isset($_SESSION['nome'])) { ?>
            <li class="nav-item">
                <a class=" nav-link small text-dark menu" aria-current="page" href="<?= SITE ?>/" id="home">Início</a>
            </li>
            <li class="nav-item">
                <a class=" nav-link small text-dark menu " href="<?= SITE ?>/criar.php" id="create">Criar pedido</a>
            </li>
            <li class="nav-item">
                <a class="  nav-link small text-dark menu" href="<?= SITE ?>/criacoes.php" id="created">Minhas criações</a>
            </li>
            <li class="nav-item">
                <a class=" nav-link small text-dark menu" href="<?= SITE ?>/conta.php" id="account">Conta</a>
            </li>
        <?php }?>


        <?php if(!isset($_SESSION['nome'])) { ?>
            
        <li class="nav-item">
            <a class=" nav-link small text-dark menu" href="<?= SITE ?>/usuario_formulario.php" id="cadastrar">Cadastrar</a>
        </li>


        <li class="nav-item">
            <a class=" nav-link small text-dark menu" href="<?= SITE ?>/login_formulario.php" id="entrar">Entrar</a>
        </li>

        <?php } ?>

        <?php if((isset($_SESSION['login']))
                && ($_SESSION['login']['usuario']['adm'] ===1)) : ?>
            <li class="nav-item">
                <a class="nav-link" href="usuarios.php">Usuários</a>
            </li>
        <?php endif; ?>
        
        <?php if(isset($_SESSION["nome"])) { ?>
            <div>
           <span>Olá <?= $_SESSION['nome']?>!</span>
            <a href="core/usuario_repositorio.php?acao=logout"
                class="btn btn-link btn-sm" role="button">Sair</a>
            </div>
       <?php } ?>
    </ul>

    
