<?php
require "./includes/classes/dbh.class.php";
require "./includes/classes/page.class.php";
require "./includes/classes/icon.class.php";
require "./includes/classes/sliderItem.class.php";

$pageId = "home";

if (array_key_exists("page", $_GET)) {
    if (array_key_exists($_GET["page"], $pages)) {
        $pageId = $_GET["page"];
    } else if (array_key_exists($_GET["page"], $subPages)) {
        $pageId = $_GET["page"];
    } else {
        $pageId = "404";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href=<?php echo $favIcon->getSrc(); ?> type="image/x-icon">

    <title>
        <?php
        if (isset($pages[$pageId])) {
            echo $pages[$pageId]->title;
        } else if (isset($subPages[$pageId])) {
            echo $subPages[$pageId]->title;
        }
        ?>
    </title>

    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/page.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>