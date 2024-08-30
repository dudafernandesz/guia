<?php
   echo $this->layout("_theme");
   ?>

<link rel="stylesheet" href="<?=url("themes/adm/assets/css/dash.css");?>">
    <div class="container">
        <header class="dash-header">
            <h1>Dashboard</h1>
        </header>
        <main class="main-desh">
            <section class="stats">
                <div class="card">
                    <h2>Total de Livros</h2>
                    <p id="totalBooks">0</p>
                </div>
                <div class="card">
                    <h2>Total de Resenhas</h2>
                    <p id="totalReviews">0</p>
                </div>
                <div class="card">
                    <h2>Novos Usuários</h2>
                    <p id="newUsers">0</p>
                </div>
            </section>
            <section class="charts">
                <div class="chart-container">
                    <h2>Livros por Categoria</h2>
                    <canvas id="booksByCategoryChart"></canvas>
                </div>
                <div class="chart-container">
                    <h2>Atividades Recentes</h2>
                    <canvas id="recentActivitiesChart"></canvas>
                </div>
            </section>
            <section class="alerts">
                <h2>Alertas e Notificações</h2>
                <ul id="alertsList">
                    <!-- Alertas serão inseridos aqui -->
                </ul>
            </section>
        </main>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="<?= url("themes/adm/assets/js/dash.js") ?>"></script>
    </div>
