<?php

/** 
 * Class ImageCategories 
 * Handles operations related to image categories in the database
 * Extends the DatabaseConnection class to use the database connection method 
 */
class ImageCategories extends DatabaseConnection
{
    public $category_id;
    public $category_name;
    public $image_path;

    /**
     * ImageCategories constructor
     * Initializes the category name
     * @param string $categoryName 
     */
    public function __construct($categoryName)
    {
        $this->category_name = $categoryName;
    }

    /**
     * Fetches images for the specified category name from the database
     * @param string $categoryName
     * @return array An array of images in the category 
     */
    public function getCategoryImages($categoryName): array
    {
        $query = $this->connect()->prepare("SELECT * FROM image_categories WHERE category_name = ?");
        $query->execute([$categoryName]);
        $category = $query->fetch(PDO::FETCH_ASSOC);

        if ($category) {
            $this->category_id = $category['category_id'];
            $this->image_path = $category['image_path'];

            $imagesQuery = $this->connect()->prepare("SELECT image_name FROM images WHERE category_id = ? ORDER BY image_id DESC");
            $imagesQuery->execute([$this->category_id]);
            $images = $imagesQuery->fetchAll(PDO::FETCH_ASSOC);

            return $images;
        } else {
            return [];
        }
    }
}
