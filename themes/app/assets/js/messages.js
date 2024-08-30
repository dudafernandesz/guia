document.addEventListener('DOMContentLoaded', () => {
    const notificationList = document.getElementById('notificationList');
    const settingsForm = document.getElementById('settingsForm');

    // Exemplo de notificações
    const notifications = [
        'Nova resenha de livro adicionada!',
        'Seu comentário recebeu uma resposta.',
        'Atualização disponível para seu livro favorito.',
    ];

    // Função para adicionar notificações à lista
    function displayNotifications() {
        notificationList.innerHTML = '';
        notifications.forEach(notification => {
            const li = document.createElement('li');
            li.textContent = notification;
            notificationList.appendChild(li);
        });
    }

    // Mostrar notificações ao carregar a página
    displayNotifications();

    // Salvando as configurações
    settingsForm.addEventListener('submit', (event) => {
        event.preventDefault();
        const notifyReviews = document.getElementById('notifyReviews').checked;
        const notifyComments = document.getElementById('notifyComments').checked;
        const notifyUpdates = document.getElementById('notifyUpdates').checked;

        // Simulação de salvar as configurações (pode ser feito via API ou localStorage)
        alert(`Configurações Salvas:\nResenhas: ${notifyReviews}\nComentários: ${notifyComments}\nAtualizações: ${notifyUpdates}`);
    });
});
