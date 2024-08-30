<?php
    echo $this->layout("_theme");
?>

<?php $this->start("specific-script"); ?>
  <script src="themes/web/assets/js/faqs.js" async></script>
<?php $this->end(); ?>

<link rel="stylesheet" href="themes/web/assets/css/faqs.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />

    <h1>Perguntas Frequentes</h1>
    <div class="faq-container">
      <div class="faq active">
        <h3 class="faq-title">
        Quais são os diferentes tipos de livros que a biblioteca oferece??
        </h3>

        <p class="faq-text">
        Infinitas possibilidades de livros!
        </p>

        <button class="faq-toggle">
          <i class="fas fa-chevron-down"></i>
          <i class="fas fa-times"></i>
        </button>
      </div>

      <div class="faq">
        <h3 class="faq-title">
        Como faço para registrar um livro que acabei de ler?
        </h3>
        <p class="faq-text">
          Basta clicar no botão adicionar, que vai aparecer uma nova tela perguntando seu status de leitura, que são: Já li, Lendo e Quero ler.
        </p>
        <button class="faq-toggle">
          <i class="fas fa-chevron-down"></i>
          <i class="fas fa-times"></i>
        </button>
      </div>
      
      <div class="faq">
        <h3 class="faq-title">
        Como posso encontrar recomendações de livros com base nos meus interesses e leituras anteriores?
        </h3>
        <p class="faq-text">
          Basta você selecionar a categoria que você deseja.
        </p>
        <button class="faq-toggle">
          <i class="fas fa-chevron-down"></i>
          <i class="fas fa-times"></i>
        </button>
      </div>
      
      <div class="faq">
        <h3 class="faq-title">
        Existe um limite para o número de livros que posso registrar?
        </h3>
        <p class="faq-text">
          Não!
        </p>
        <button class="faq-toggle">
          <i class="fas fa-chevron-down"></i>
          <i class="fas fa-times"></i>
        </button>
      </div>
      
      <div class="faq">
        <h3 class="faq-title">
        Quem posso contatar se tiver problemas técnicos ou dúvidas sobre a comunidade?
        </h3>
        <p class="faq-text">
          Vai em contato e escreva seu problema e nos envie.
        </p>
        <button class="faq-toggle">
          <i class="fas fa-chevron-down"></i>
          <i class="fas fa-times"></i>
        </button>
      </div>
    </div>
