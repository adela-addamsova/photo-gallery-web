<header>
        <div class="header-logo">
            <a href="index.php">
                <img src="<?php echo $camIcon->getSrc(); ?>" alt="logo">
            </a>
        </div>

        <div class="header-menu">
            <?php require "./components/menu-header.php"; ?>
        </div>

        <div class="burger-menu">
            <?php require "./components/menu-header.php"; ?>
        </div>

        <div class="header-social">
            <a href="#" target="_blank">
                <i class="<?php echo $igIcon->getSrc(); ?>"></i>
            </a>
            <div class="burger-menu-btn" style="background-image: <?php echo $burgerIcon->getSrc(); ?>"></div>
        </div>
    </header>