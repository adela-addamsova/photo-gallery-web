<?php require("./components/head.php"); ?>

<body>
    <!-- Header -->
    <?php require_once("./components/header.php"); ?>

    <!-- Content -->
    <section>
        <?php
        if (isset($pages[$pageId])) {
            require("./content/{$pageId}.php");
        } else if (isset($subPages[$pageId])) {
            require("./content/gallery-page.php");
        }
        ?>
    </section>

    <!-- Footer -->
   <?php require_once ("./components/footer.php"); ?>

    <script src="js/burger-menu.js"></script>
</body>

</html>