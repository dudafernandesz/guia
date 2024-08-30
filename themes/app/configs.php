<?php
    echo $this->layout("_theme");
?>

<link rel="stylesheet" href="<?=url("themes/app/assets/css/configs.css");?>">
    <main>
        <section id="notifications">
            <h2>Preferências de Notificação</h2>
            <form id="notifications-form">
                Notificações por Email: <input type="checkbox" id="email-notifications"><br>
                Notificações no App: <input type="checkbox" id="app-notifications"><br>
                <button type="submit">Salvar Preferências</button>
            </form>
        </section>

        <section id="theme-layout">
            <h2>Tema e Layout</h2>
            <form id="theme-form">
                Tema: <select id="theme">
                    <option value="light">Claro</option>
                    <option value="dark">Escuro</option>
                </select>
                <br>
                Layout: <select id="layout">
                    <option value="default">Padrão</option>
                    <option value="compact">Compacto</option>
                </select>
                <br>
                <button type="submit">Aplicar Tema</button>
            </form>
        </section>

        <section id="account-management">
            <h2>Gerenciar Conta</h2>
            <button id="deactivate-account">Desativar Conta</button>
            <button id="delete-account">Excluir Conta</button>
        </section>
    </main>

    <script src="<?= url("themes/app/assets/js/configs.js") ?>"></script>
</body>
