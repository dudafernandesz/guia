<?php

namespace Source\Models;

use PDOException;
use Source\Core\Connect;
use Source\Core\Model;

class Book extends Model {

    private $id;
    private $title;
    private $author;
    private $category;
    private $publication_date;

    public function __construct()
    {
        $this->entity = "books";
    }

    //DELETE
    public function deleteById(int $bookId): bool
    {
        $conn = Connect::getInstance();
    
        // Inicia uma transação para garantir a consistência do banco de dados
        $conn->beginTransaction();
    
        try {
            // Verifica se o livro existe
            $query = "SELECT * FROM books WHERE id = :id";
            $stmt = $conn->prepare($query);
            $stmt->bindParam(":id", $bookId);
            $stmt->execute();
    
            if ($stmt->rowCount() == 0) {
                $this->message = "Livro não encontrado!";
                return false;
            }
    
            // Deleta as resenhas associadas ao livro
            $query = "DELETE FROM reviews WHERE book_id = :id";
            $stmt = $conn->prepare($query);
            $stmt->bindParam(":id", $bookId);
            $stmt->execute();
    
            // Deleta o livro
            $query = "DELETE FROM books WHERE id = :id";
            $stmt = $conn->prepare($query);
            $stmt->bindParam(":id", $bookId);
            $stmt->execute();
    
            // Confirma a transação
            $conn->commit();
    
            $this->message = "Livro e resenhas associadas deletados com sucesso!";
            return true;
        } catch (PDOException $e) {
            // Reverte a transação em caso de erro
            $conn->rollBack();
            $this->message = "Erro ao deletar o livro: " . $e->getMessage();
            return false;
        }
    }

// POST
public function insert(): ?int
{
    $conn = Connect::getInstance();

    // Corrige os placeholders no SQL
    $query = "INSERT INTO books (title, author, publication_date, category) 
              VALUES (:title, :author, :publication_date, :category)";

    $stmt = $conn->prepare($query);
    $stmt->bindParam(":title", $this->title);
    $stmt->bindParam(":author", $this->author);
    $stmt->bindParam(":publication_date", $this->publication_date);
    $stmt->bindParam(":category", $this->category);

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