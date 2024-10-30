<nav>
    <ul class='sub-nav'>
        <?php
        foreach ($subPages as $subpage) {
                echo "<li><a href='?page={$subpage->id}'>{$subpage->menu}</a></li>";
        }
        ?>
    </ul>
</nav>