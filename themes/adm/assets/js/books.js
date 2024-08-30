fetch("http://localhost/guia/api/livros", {
    method: "POST", 
    headers: {
        "Content-Type": "application/json", // Adiciona o cabeçalho Content-Type para JSON
        "Authorization": "Bearer 12345" // Assume que '12345' é um token JWT, usar Authorization em vez de 'token'
    },
    body: JSON.stringify({
        id: 1,
        name: "Livro"
    })
})
.then(res => res.json())
.then(data => {
    console.log(data); // Faça algo com a resposta
})
.catch(error => {
    console.error('Error:', error); // Tratar erros
});
