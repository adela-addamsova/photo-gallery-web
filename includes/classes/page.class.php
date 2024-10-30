<?php

class Page
{
    public $id;
    public $title;
    public $menu;
    public $picture;
    public $text;

    function __construct($argId, $argTitle, $argMenu, $argPicture, $argText)
    {
        $this->id = $argId;
        $this->title = $argTitle;
        $this->menu = $argMenu;
        $this->picture = $argPicture;
        $this->text = $argText;
    }
} // endPage

// Submenu
$subPages = array(
    "macro" => new Page(
        "macro", 
        "Macro", 
        "Macro", 
        "macro-background", 
        "Lorem ipsum dolor sit amet, <br>
                consectetuer adipiscing elit. <br>
                Etiam commodo dui eget wisi. <br>
                In enim a arcu imperdiet malesuada. <br>
                Nulla turpis magna, cursus sit amet."),
    "landscape" => new Page(
        "landscape",
        "Landscape",
        "Landscape",
        "landscape-background",
        "Photography of the landscape<br>
                I make particularly on my travels. <br>
                So far I visited Italy, Austria, <br>
                Hungary, Ireland, and Scandinavia. <br>
                Most of the photos are still from<br>
                my native country Czech republic."
    ),
    "animals" => new Page(
        "animals",
        "Animals",
        "Animals",
        "animals-background",
        "Lorem ipsum dolor sit amet, <br>
                consectetuer adipiscing elit. <br>
                Etiam commodo dui eget wisi. <br>
                In enim a arcu imperdiet malesuada. <br>
                Nulla turpis magna, cursus sit amet."
    ),
    "technology" => new Page(
        "technology",
        "Technology",
        "Technology",
        "technology-background",
        "Lorem ipsum dolor sit amet, <br>
                consectetuer adipiscing elit. <br>
                Etiam commodo dui eget wisi. <br>
                In enim a arcu imperdiet malesuada. <br>
                Nulla turpis magna, cursus sit amet."
    ),
    "architecture" => new Page(
        "architecture",
        "Architecture",
        "Architecture",
        "architecture-background",
        "Lorem ipsum dolor sit amet, <br>
                consectetuer adipiscing elit. <br>
                Etiam commodo dui eget wisi. <br>
                In enim a arcu imperdiet malesuada. <br>
                Nulla turpis magna, cursus sit amet."
    )
);

// Main menu
$pages = array(
    "home" => new Page("home", "Photo by Jackie", "Home", "./images/background/home-background.jpg", ""),
    "gallery" => $subPages,
    "about" => new Page("about", "About", "About", "", ""),
    "404" => new Page("404", "Page doesn't exist", "404", "", "")
);
