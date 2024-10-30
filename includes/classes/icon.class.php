<?php

class Icon
{
    public $src;

    function __construct($argSrc)
    {
        $this->src = $argSrc;
    }

    function getSrc()
    {
        return $this->src;
    }
} // endIcons

$icons = array(
    $favIcon = new Icon("./images/icons/fav_fox.png"),
    $igIcon = new Icon("fa-brands fa-instagram"),
    $camIcon = new Icon("./images/icons/camera_icon.png"),
    $prevIcon = new Icon("images/icons/back.png"),
    $nextIcon = new Icon("images/icons/next.png"),
    $burgerIcon = new Icon("url(./images/icons/menu-burger.png), url(./images/icons/cross.png)")
);
