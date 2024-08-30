<?php
    echo $this->layout("_theme");
?>

<link rel="stylesheet" href="themes/web/assets/css/contact.css">
<div class="contact-container">
        <div class="contact-info">
            <h1 class="contact-title" >Informações de Contato</h1>
            <p><strong>Endereço:</strong> Núcleo C-78, 944 - Charqueadas, RS</p>
            <p><strong>Telefone:</strong> (51) 997232249</p>
            <p><strong>Email:</strong> guiadeleitura@gmail.com</p>
            <p><strong>Localização:</strong> <a href="https://www.google.com/maps">Veja no mapa</a></p>
        </div>
        <div class="contact-form">
            <h1 class="form-title">Envie uma Mensagem</h1>
            <form action="#" method="post">
                <label for="name">Nome:</label>
                <input type="text" id="name" name="name" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="message">Mensagem:</label>
                <textarea id="message" name="message" rows="4" required></textarea>
                <button type="submit">Enviar</button>
            </form>
        </div>
    </div>