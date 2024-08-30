<?php
    echo $this->layout("_theme");
    //var_dump(url("localizacao"));
?>


<main class="content">
    <section class="home">
    <div class="cta">
        <h1 class="title">A leitura abre a mente, impulsiona sonhos e alimenta a alma.</h1>

        <p class="description">Seja bem-vindo ao inovador Guia de Leitura! <br>Este site proporciona uma jornada literária única, simplificando a busca por novos livros.</p>

        <div class="cta-button">
            <a class="btn-default" href="<?= url("/login"); ?>">Entrar</a>
        </div>
    </div>

    <div class="banner">
    <img src="themes/web/assets/imgs/leitura.png">
    </div>
    </section>
</main>