document.addEventListener("DOMContentLoaded", () => {
    const saveButtons = document.querySelectorAll(".save-list");
    saveButtons.forEach(button => {
        button.addEventListener("click", () => {
            const listName = button.closest(".reading-list").querySelector("h2").innerText;
            alert(`Lista "${listName}" foi salva com sucesso!`);
            // Aqui você pode adicionar lógica para salvar a lista no perfil do usuário
        });
    });

    const viewButtons = document.querySelectorAll(".view-list");
    viewButtons.forEach(button => {
        button.addEventListener("click", () => {
            const listName = button.closest(".reading-list").dataset.list;
            alert(`Exibindo livros da lista: ${listName}`);
            // Aqui você pode redirecionar o usuário para uma página com os livros da lista
        });
    });
});
