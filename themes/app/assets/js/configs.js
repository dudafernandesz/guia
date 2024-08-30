// script.js
document.addEventListener('DOMContentLoaded', () => {
    const notificationsForm = document.getElementById('notifications-form');
    const themeForm = document.getElementById('theme-form');
    const deactivateButton = document.getElementById('deactivate-account');
    const deleteButton = document.getElementById('delete-account');

    // Handle notifications form submission
    notificationsForm.addEventListener('submit', (event) => {
        event.preventDefault();
        const emailNotifications = document.getElementById('email-notifications').checked;
        const appNotifications = document.getElementById('app-notifications').checked;
        alert(`Preferências salvas:\nEmail: ${emailNotifications ? 'Ativado' : 'Desativado'}\nApp: ${appNotifications ? 'Ativado' : 'Desativado'}`);
        // Add logic to save preferences
    });

    // Handle theme form submission
    themeForm.addEventListener('submit', (event) => {
        event.preventDefault();
        const theme = document.getElementById('theme').value;
        const layout = document.getElementById('layout').value;
        alert(`Tema e Layout aplicados:\nTema: ${theme}\nLayout: ${layout}`);
        // Add logic to apply theme and layout
    });

    // Handle account deactivation
    deactivateButton.addEventListener('click', () => {
        if (confirm('Tem certeza de que deseja desativar sua conta?')) {
            alert('Conta desativada.');
            // Add logic to deactivate account
        }
    });

    // Handle account deletion
    deleteButton.addEventListener('click', () => {
        if (confirm('Tem certeza de que deseja excluir sua conta? Esta ação não pode ser desfeita.')) {
            alert('Conta excluída.');
            // Add logic to delete account
        }
    });
});
