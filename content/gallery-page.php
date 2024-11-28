<div class="intro"
    style="background-image: linear-gradient(rgba(239, 243, 240, 0), rgba(255, 255, 255, 0.3)), 
    url('./images/background/<?php echo $subPages[$pageId]->picture; ?>.webp')">

    <h1><?php echo $subPages[$pageId]->title; ?></h1>

    <div class="comment">
        <p><?php echo $subPages[$pageId]->text; ?></p>
    </div>
</div>

<div class="img-gallery">
    <?php
    $imageCategory = new ImageCategories( $subPages[$pageId]->title);
    $images = $imageCategory->getCategoryImages($imageCategory->category_name);

    foreach ($images as $image) {
        $path = $imageCategory->image_path . $image['image_name'];
        echo "<img id='imgs' src='$path.webp'>";
    }

    ?>
</div>

<script src="js/gallery.js"></script>
