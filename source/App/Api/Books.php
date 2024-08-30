<?php

namespace Source\App\Api;

use Source\Models\Book;
class Books extends Api {

    public function listBooks($data) 
    {
        // Cria uma instância do modelo Book
        $books = new Book();
        
        // Obtém todos os livros
        $allBooks = $books->selectAll();
        
        // Retorna a lista de livros como resposta
        $this->back($allBooks, 200);
    }

    public function insertBook($data) {
        // Verifica se o usuário está autenticado
        $this->auth();
        
        // Valida os dados recebidos
        if (empty($data['title']) || empty($data['author']) || empty($data['description']) || empty($data['publishedDate'])) {
            $this->back(['message' => 'Todos os campos são obrigatórios'], 400);
            return;
        }
        
        // Cria uma instância do modelo Book
        $books = new Books();
        
        // Insere o novo livro no banco de dados
        $bookData = [
            'title' => $data['title'],
            'author' => $data['author'],
            'description' => $data['description'],
            'publishedDate' => $data['publishedDate']
        ];
        
        $inserted = $books->insertBook($bookData);
        
        if ($inserted) {
            // Obtém a lista atualizada de livros
            $allBooks = $books->selectAll();
            
            // Retorna a lista atualizada como resposta
            $this->back($allBooks, 201); // 201 Created
        } else {
            // Retorna um erro se a inserção falhar
            $this->back(['message' => 'Falha ao inserir o livro'], 500);
        }
    }
    public function deleteById(array $data)
{
    // quando a rota não necessita de autenticação, não evoca o método $this->auth()
    $book = new Book();

    if ($book->deleteById($data["booksId"])) {
        $this->back(["message" => "Livro deletado com sucesso!"]);
    } else {
        $this->back(["message" => "Erro ao deletar o livro."]);
    }
}


// POST
public function insert(array $data)
{
    // Verifica se todos os campos necessários foram preenchidos
    if (in_array("", $data)) {
        $this->back([
            "type" => "error",
            "message" => "Preencha todos os campos obrigatórios."
        ]);
        return;
    }

    // Valida os campos obrigatórios
    if (empty($data["title"]) || empty($data["author"]) || empty($data["category_id"]) || empty($data["publication_date"])) {
        $this->back([
            "type" => "error",
            "message" => "Preencha todos os campos obrigatórios."
        ]);
        return;
    }

    // Cria uma nova instância de Book
    $book = new Book(
        null,
        $data["title"],
        $data["author"],
        $data["description"] 
    );

    // Insere o novo livro no banco de dados
    $insertBook = $book->insert();

    if (!$insertBook) {
        // Retorna uma mensagem de erro caso a inserção falhe
        $this->back([
            "type" => "error",
            "message" => $book->getMessage()
        ]);
        return;
    }

    // Retorna uma mensagem de sucesso caso o livro seja inserido com sucesso
    $this->back([
        "type" => "success",
        "message" => "Livro cadastrado com sucesso!"
    ]);
}

}
