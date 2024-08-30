<?php
    echo $this->layout("_theme");
?>

<link rel="stylesheet" href="themes/web/assets/css/login.css">

<h2>Cadastra-se</h2>
<form class="form-login" action="#" method="post">

        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="senha">Senha:</label><br>
        <input type="password" id="senha" name="senha" required minlength="6"><br><br>
        
        <input type="submit" value="Cadastrar">
    </form>
