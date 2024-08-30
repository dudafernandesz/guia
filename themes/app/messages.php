<?php

    echo $this->layout("_theme");
?>

<link rel="stylesheet" href="<?=url("themes/app/assets/css/messages.css");?>">

<body>
    <div class="container">
        <header>
            <h1>Página de Notificações</h1>
        </header>
        <main>
            <section class="notification-settings">
                <h2>Configurações de Notificação</h2>
                <form id="settingsForm">
                    <label>
                        <input type="checkbox" id="notifyReviews" checked>
                        Notificações de Novas Resenhas
                    </label>
                    <label>
                        <input type="checkbox" id="notifyComments" checked>
                        Notificações de Comentários
                    </label>
                    <label>
                        <input type="checkbox" id="notifyUpdates" checked>
                        Notificações de Atualizações de Livros
                    </label>
                    <button type="submit">Salvar Configurações</button>
                </form>
            </section>
            <section class="notifications">
                <h2>Notificações Recentes</h2>
                <ul id="notificationList">
                    <!-- Notificações serão inseridas aqui via JavaScript -->
                </ul>
            </section>
        </main>
    <script src="<?= url("themes/adm/assets/js/messages.js") ?>"></script>
</body>
