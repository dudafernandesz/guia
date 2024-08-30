<?php
   echo $this->layout("_theme");
   ?>

        <div class="container">
        <header>
            <h1>Adicionar Novo Livro</h1>
        </header>
        <form id="book-form">
            <div class="form-group">
                <label for="title">Título:</label>
                <input type="text" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="author">Autor:</label>
                <input type="text" id="author" name="author" required>
            </div>
            <div class="form-group">
                <label for="genre">Gênero:</label>
                <input type="text" id="genre" name="genre">
            </div>
            <div class="form-group">
                <label for="year">Ano de Publicação:</label>
                <input type="number" id="year" name="year">
            </div>
            <button type="submit">Adicionar Livro</button>
        </form>
        <div id="book-list">
            <h2 class="title-booklist">Livros Adicionados</h2>
            <ul id="books">
                <!-- Lista de livros será inserida aqui -->
            </ul>
        </div>
    </div>
   <script src="<?=url("themes/adm/assets/js/script.js");?>">