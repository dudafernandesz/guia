<?php
    echo $this->layout("_theme");
?>

<div class="profile">
        <div class="profile-header">
            <img src="themes/web/assets/imgs/me.jpg" alt="Profile Picture" class="profile-picture">
            <div class="profile-info">
                <h1 class="username">Eduarda Fernandes Lanzarini</h1>
                <p class="bio">17 anos, Grifinória, ENFP</p>
                <ul class="stats">
                    <li><strong>1000</strong> posts</li>
                    <li><strong>10k</strong> seguidores</li>
                    <li><strong>500</strong> seguindo</li>
                </ul>
            </div>
        </div>
        <br>
        <div id="options">
            <select id="changer" onchange="filterBooks()">
                <option value="todos">Todos</option>
                <option value="lidos">Lidos</option>
                <option value="lendo">Lendo</option>
                <option value="queroler">Quero ler</option>
            </select>
            <p>Selecione o status para ver</p>
        </div>
    <br>

    <div class="app-button">
            <a class="btn-app" href="<?= url("app"); ?>">App</a>
    </div>
    
    <div class="adm-button">
            <a class="btn-adm" href="<?= url("adm"); ?>">Administrador</a>
    </div>

        <div class="container">
           
            <aside>
                <h4 class="title-list">Minha Lista:</h4>
                <ul id="my-list">
                    <!-- Aqui serão mostrados os livros filtrados -->
                </ul>
            </aside>
        </div>
    </div>