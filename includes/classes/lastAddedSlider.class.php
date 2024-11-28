<?php

/**
 * Class SliderItem
 * Handles operation of slider for the latest added images
 * Extends the ImageCategories class to use inherited methods and properties
 */
class SliderItem extends ImageCategories
{
    /**
     * Fetches the latest image path for the specified category from the database
     * @return string The path to the latest image 
     */
    public function getLatestImgPath(): string
    {
        $query = $this->connect()->prepare("SELECT image_categories.image_path, image_name FROM images
        JOIN image_categories ON image_categories.category_id = images.category_id
        WHERE image_categories.category_name=? ORDER BY image_id desc LIMIT 1;");
        $query->execute(array($this->category_name));
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        $imagePath = $result[0]["image_path"] . $result[0]["image_name"];
        return $imagePath;
    }

    /**
     * Displays the slider item with the latest image
     *  @param SliderItem $item The slider item object
     */
    public function showSliderItem($item)
    {
        $path = $item->getLatestImgPath();
        echo "<div class='item' style='
                    background-image: url($path.webp);
                    background-repeat: no-repeat;
                    background-size: cover;
                    background-position: center;'>
                    </div>";
    }
} // endSlider

$sliderItems = [];
