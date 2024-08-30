<?php
    echo $this->layout("_theme");
?>

<link rel="stylesheet" href="<?=url("themes/app/assets/css/profile.css");?>">

<div class="container">
        <h1>Alterar Perfil</h1>
        <form id="profileForm">
            <div class="form-group">
                <label for="name">Nome:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Senha:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="profilePic">Foto de Perfil:</label>
                <input type="file" id="profilePic" name="profilePic" accept="image/*">
                <div id="preview" class="preview">
                    <img id="previewImg" src="" alt="Pré-visualização" style="display: none;">
                </div>
            </div>
            <button type="submit">Salvar</button>
        </form>
    </div>