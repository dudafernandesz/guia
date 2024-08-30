<?php

namespace Source\Models;

use Source\Core\Connect;
use Source\Core\Model;
use PDOException;

class Review extends Model {

    private $id;
    private $book_id;
    private $user_id;
    private $review_text;
    private $created_at;

    public function __construct(
        int $id = NULL, 
        int $book_id = NULL, 
        int $user_id = NULL, 
        string $review_text = NULL, 
        string $created_at = NULL
    ) {
        $this->id = $id;
        $this->book_id = $book_id;
        $this->user_id = $user_id;
        $this->review_text = $review_text;
        $this->created_at = $created_at;
        $this->entity = "reviews";
    }

    // Método para deletar uma resenha por ID
    public function deleteById(int $reviewsId): bool
    {
        $conn = Connect::getInstance();

        try {
            // Verifica se a resenha existe
            $query = "SELECT * FROM reviews WHERE id = :id";
            $stmt = $conn->prepare($query);
            $stmt->bindParam(":id", $reviewsId);
            $stmt->execute();

            if ($stmt->rowCount() == 0) {
                $this->message = "Resenha não encontrada!";
                return false;
            }

            // Deleta a resenha
            $query = "DELETE FROM reviews WHERE id = :id";
            $stmt = $conn->prepare($query);
            $stmt->bindParam(":id", $reviewsId);
            $stmt->execute();

            $this->message = "Resenha deletada com sucesso!";
            return true;
        } catch (PDOException $e) {
            $this->message = "Erro ao deletar a resenha: " . $e->getMessage();
            return false;
        }
    }

         // Getters e Setters
         public function getId(): ?int
         {
             return $this->id;
         }
     
         public function setId(?int $id): void
         {
             $this->id = $id;
         }
     
         public function getBook_id(): ?int
         {
             return $this->book_id;
         }
     
         public function setBook_id(?int $book_id): void
         {
             $this->book_id = $book_id;
         }
     
         public function getUser_id(): ?int
         {
             return $this->user_id;
         }
     
         public function setUser_id(?int $user_id): void
         {
             $this->user_id = $user_id;
         }
     
         public function getReview_text(): ?string
         {
             return $this->review_text;
         }
     
         public function setReview_text(?string $review_text): void
         {
             $this->review_text = $review_text;
         }
     
         public function getCreated_at(): ?string
         {
             return $this->created_at;
         }
     
         public function setCreated_at(?string $created_at): void
         {
             $this->created_at = $created_at;
         }


         //POST

    public function insert(): ?int {
    $conn = Connect::getInstance();

    // Corrige os placeholders no SQL
    $query = "INSERT INTO reviews (id, book_id, user_id, review_text, created_at) 
              VALUES (:id, :book_id, :user_id, :review_text, :created_at)";

    $stmt = $conn->prepare($query);
    $stmt->bindParam(":id", $this->id);
    $stmt->bindParam(":book_id", $this->book_id);
    $stmt->bindParam(":user_id", $this->user_id);
    $stmt->bindParam(":review_text", $this->review_text);
    $stmt->bindParam(":created_at", $this->created_at);

    try {
        $stmt->execute();
        return $conn->lastInsertId();
    } catch (PDOException) {
        // Altera a mensagem para incluir o erro específico capturado
        $this->message = "Erro ao inserir o livro! ";
        return false;
    }
}
}