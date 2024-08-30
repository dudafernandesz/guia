document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('book-form');
    const bookList = document.getElementById('books');

    form.addEventListener('submit', (event) => {
        event.preventDefault(); // Previne o envio padrão do formulário

        // Obtém os valores dos campos do formulário
        const title = document.getElementById('title').value;
        const author = document.getElementById('author').value;
        const genre = document.getElementById('genre').value;
        const year = document.getElementById('year').value;

        // Cria um novo item de lista para o livro
        const listItem = document.createElement('li');
        listItem.textContent = `${title} por ${author} (${genre}, ${year})`;

        // Adiciona o item à lista de livros
        bookList.appendChild(listItem);

        // Limpa o formulário
        form.reset();
    });
});
