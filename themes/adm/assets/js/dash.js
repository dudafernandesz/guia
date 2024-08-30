// scripts.js

document.addEventListener('DOMContentLoaded', () => {
    // Mock Data
    const data = {
        totalBooks: 120,
        totalReviews: 350,
        newUsers: 15,
        booksByCategory: {
            "Ficção": 30,
            "Não-Ficção": 50,
            "Biografia": 20,
            "História": 15,
            "Ciência": 5
        },
        recentActivities: [10, 20, 30, 40, 50, 60, 70]
    };

    // Update statistics
    document.getElementById('totalBooks').textContent = data.totalBooks;
    document.getElementById('totalReviews').textContent = data.totalReviews;
    document.getElementById('newUsers').textContent = data.newUsers;

    // Create Charts
    const ctxBooksByCategory = document.getElementById('booksByCategoryChart').getContext('2d');
    const booksByCategoryChart = new Chart(ctxBooksByCategory, {
        type: 'pie',
        data: {
            labels: Object.keys(data.booksByCategory),
            datasets: [{
                label: 'Livros por Categoria',
                data: Object.values(data.booksByCategory),
                backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF'],
                borderColor: '#fff',
                borderWidth: 1
            }]
        }
    });

    const ctxRecentActivities = document.getElementById('recentActivitiesChart').getContext('2d');
    const recentActivitiesChart = new Chart(ctxRecentActivities, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
            datasets: [{
                label: 'Atividades Recentes',
                data: data.recentActivities,
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        }
    });

    // Example Alerts
    const alerts = [
        "Novo livro adicionado: 'O Grande Gatsby'",
        "Nova resenha aguardando moderação",
        "Usuário 'João Silva' fez login pela primeira vez"
    ];
    const alertsList = document.getElementById('alertsList');
    alerts.forEach(alert => {
        const li = document.createElement('li');
        li.textContent = alert;
        alertsList.appendChild(li);
    });
});
