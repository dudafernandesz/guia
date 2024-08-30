<?php
   echo $this->layout("_theme");
?>

<link rel="stylesheet" href="<?=url("themes/adm/assets/css/login.css");?>">

<body>
    <div class="wrapper">
        <div class="container">
            <h1>Logue sua conta ADM</h1>
            <form id="form-login" novalidate>
                <input name="email" type="email" placeholder="Email" required> 
                <input name="password" type="password" placeholder="Senha" required>
                <input type="submit" value="Enviar">
            </form>
            <div class="sla">
                &nbsp &nbsp Não tem uma conta? <a href="<?= url('registro') ?>">clique aqui</a>
            </div>
            <div class="col-12" id="message">
                <!-- Aqui aparece a mensagem, caso ocorra erro! -->
            </div>
        </div>
    </div>

    <script type="text/javascript" async>
        const form = document.querySelector("#form-login");
        const message = document.querySelector("#message");
        form.addEventListener("submit", async (e) => {
            e.preventDefault();
            const dataadmin = new FormData(form);
            const data = await fetch("<?= url('admin/login'); ?>", {
                method: "POST",
                body: dataadmin,
            });
            const admin = await data.json();
            console.log(admin);
            if(admin) {
                message.innerHTML = admin.message;
                message.classList.add("message");
                message.classList.remove("success", "warning", "error");
                message.classList.add(`${admin.type}`);
                console.log(admin.type);
                window.location.href = "<?= url('admin/home'); ?>";
            }
        });
    </script>
</body>
