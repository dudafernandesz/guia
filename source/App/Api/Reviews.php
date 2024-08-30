<?php

namespace Source\App\Api;

use Source\Models\Review;
class Reviews extends Api {

    public function listReviews($data) 
    {
        // Cria uma instância do modelo Review
        $reviews = new Review();
        
        // Obtém todos os livros
        $allReviews = $reviews->selectAll();
        
        // Retorna a lista de livros como resposta
        $this->back($allReviews, 200);
    }

    public function insertReview($data) {
        // Verifica se o usuário está autenticado
        $this->auth();
        
        // Valida os dados recebidos
        if (empty($data['book_id']) || empty($data['user_id']) || empty($data['review_text']) || empty($data['created_at'])) {
            $this->back(['message' => 'Todos os campos são obrigatórios'], 400);
            return;
        }
        
        // Cria uma instância do modelo Review
        $reviews = new Review();
        
        // Insere o novo livro no banco de dados
        $reviewData = [
            'id' => $data['id'],
            'book_id' => $data['book_id'],
            'user_id' => $data['user_id'],
            'review_text' => $data['review_text'],
            'reated_at' => $data['created_at'],
        ];
        
        $inserted = $reviews->insert();
        
        if ($inserted) {
            // Obtém a lista atualizada de livros
            $allReviews = $reviews->selectAll();
            
            // Retorna a lista atualizada como resposta
            $this->back($allReviews, 201); // 201 Created
        } else {
            // Retorna um erro se a inserção falhar
            $this->back(['message' => 'Falha ao inserir a resenha'], 500);
        }
    }

public function deleteById(array $data)
{
    // quando a rota não necessita de autenticação, não evoca o método $this->auth()
    $review = new Review();

    if ($review->deleteById($data["reviewsId"])) {
        $this->back(["message" => "Resenha deletado com sucesso!"]);
    } else {
        $this->back(["message" => "Erro ao deletar resenha."]);
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
    if (empty($data["id"]) || empty($data["book_id"]) || empty($data["user_id"]) || empty($data["review_text"]) || empty($data["created_at"])) {
        $this->back([
            "type" => "error",
            "message" => "Preencha todos os campos obrigatórios."
        ]);
        return;
    }

    // Cria uma nova instância de Book
    $review = new Review(
        null,
        $data["book_id"],
        $data["user_id"],
        $data["review_text"],
        $data["created_at"]
    );

    // Insere o novo livro no banco de dados
    $insertReview = $review->insert();

    if (!$insertReview) {
        // Retorna uma mensagem de erro caso a inserção falhe
        $this->back([
            "type" => "error",
            "message" => $review->getMessage()
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
