<?php
   echo $this->layout("_theme");
?>

<script src="<?= url("themes/app/assets/js/home.js") ?>"></script>
<link rel="stylesheet" href="<?=url("themes/app/assets/css/home.css");?>">

<body>
    <div class="reading-lists">
        <h1 class="title-read">Listas de Leitura Curadas</h1>
        <div class="list-container">
            <div class="reading-list" data-list="romances">
                <h2>Melhores Romances de 2024</h2>
                <p>Descubra os romances mais emocionantes do ano.</p>
                <button class="view-list">Ver Lista</button>
                <button class="save-list">Salvar</button>
            </div>
            <div class="reading-list" data-list="classicos">
                <h2>Clássicos Indispensáveis</h2>
                <p>Obras que todo amante de livros deveria conhecer.</p>
                <button class="view-list">Ver Lista</button>
                <button class="save-list">Salvar</button>
            </div>
            <div class="reading-list" data-list="novos-autores">
                <h2>Novos Autores para Ficar de Olho</h2>
                <p>Explore as novas vozes da literatura contemporânea.</p>
                <button class="view-list">Ver Lista</button>
                <button class="save-list">Salvar</button>
            </div>
        </div>
    </div>
</body>