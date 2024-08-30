<?php
    echo $this->layout("_theme");
?>

<link rel="stylesheet" href="themes/web/assets/css/login.css">

<h2>Entre usando seu e-mail</h2>
<form class="form-login" action="#" method="post">

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="senha">Senha:</label><br>
        <input type="password" id="senha" name="senha" required minlength="6"><br><br>
        
        <div class="cta-button">
            <a class="btn-default" href="<?= url("/livros"); ?>">Entrar</a>
        </div>

        <div class="login-button">
           <p class="cont">Não tem uma conta ainda? </p> <a class="register-btn" href="<?= url("/entrar"); ?>">Cadastra-se</a>
        </div>
        
    </form>