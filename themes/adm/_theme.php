<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guia de Leitura</title>
    <link rel="stylesheet" href="<?=url("themes/adm/assets/css/style.css");?>">
    <script type="text/javascript" src="themes/adm/assets/js/scripts.js" async></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>  
<nav class="menu-lateral"> 
        <div class="btn-expandir">
        <i class="fa-solid fa-bars"></i>
    </div>

    <ul class="ul-menu">
        <li class="item-menu">
            <a href="<?= url(); ?>">
                <span class="icon"><i class="fa-solid fa-house"></i></span>
                <span class="txt-link">Home</span>
            </a>
        </li>
        <li class="item-menu">
            <a href="<?= url("adm/livros"); ?>">
                <span class="icon"><i class="fa-solid fa-book"></i></i></span>
                <span class="txt-link">Livros</span>
            </a>
        </li>

        <li class="item-menu">
            <a href="<?= url("adm/dash"); ?>">
                <span class="icon"><i class="fa-solid fa-circle-info"></i></span>
                <span class="txt-link">Dashboard</span>
            </a>
        </li>

        <li class="item-menu">
            <a href="<?= url("adm/login"); ?>">
                <span class="icon"><i class="fa-solid fa-user"></i></span>
                <span class="txt-link">Login</span>
            </a>
        </li>
</nav>

<div id="content">
    <!-- Your content goes here -->
    <?php
        echo $this->section("content");
    ?>
</div>

<footer>
    <div class="footer-content">
        <i class="fa-solid fa-book-open"></i>
        <br>
        <h3 class="footer-p">Guia de Leitura</h3>
    </div>
</footer>
</body>
</html>