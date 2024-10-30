<?php

class SliderItem
{
    public $id;
    public $picture;

    function __construct($argId, $argPicture)
    {
        $this->id = $argId;
        $this->picture = $argPicture;
    }

    function getImgUrl()
    {
        return $this->picture;
    }
} // endSlider

$sliderItems = array(
    $macroSlider = new SliderItem("macro", "macro-background.jpg"),
    $landscapeSlider = new SliderItem("landscape", "landscape-background.jpg"),
    $animalsSlider = new SliderItem("animals", "animals-background.jpg"),
    $technologyeSlider = new SliderItem("technology", "technology-background.jpg"),
    $architectureSlider = new SliderItem("architecture", "architecture-background.jpg")
);
