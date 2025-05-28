<?php
include_once "helpers/url.php";
include_once "data/posts.php";
include_once "data/categories.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="<?= $BASE_URL?>css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>

 <header>

    <a href="<?=$BASE_URL?>" id="logo">
        <img src="<?=$BASE_URL?>/img/logo_bitsecafe.svg" alt="logo">
    </a>

    <nav>
        <ul id="navbar">
            <li><a class="nav-link" href="<?=$BASE_URL?>">Home</a></li>
            <li><a class="nav-link" href="#">Categorias</a></li>
            <li><a class="nav-link" href="#">Sobre</a></li>
            <li><a class="nav-link" href="<?=$BASE_URL?>contato.php">Contato</a></li>
        </ul>
    </nav>

</header>
