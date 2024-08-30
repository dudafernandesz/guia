<?php

namespace Source\Models;

use Source\Core\Connect;

class Product
{
    
        private $id;
        private $nome;
        private $img;
        private $category_id;
        private $author;

    
        public function __construct(int $id = null, string $nome = null, $img = null,  int $categoryId = null,  string $author = null)
        {
            $this->id = $id;
            $this->nome = $nome;
            $this->img = $img;
            $this->category_id = $categoryId;
            $this->author = $author;            
        }
    
        public function getId(): ?int
        {
            return $this->id;
        }
    
        public function setId(?int $id): void
        {
            $this->id = $id;
        }
    
        public function getName(): ?string
        {
            return $this->nome;
        }
    
        public function setName(?string $nome): void
        {
            $this->nome = $nome;
        }
    
        public function getCategoryId(): ?int
        {
            return $this->category_id;
        }
    
        public function setCategoryId(?int $category_id): void
        {
            $this->category_id = $category_id;
        }
    
        public function selectAll()
        {
            $stm = Connect::getInstance()->query("SELECT * FROM products");
            return $stm->fetchAll();

        }

        public function selectById (int $id)
        {
            $query = "SELECT * FROM products WHERE id = {$id}";
            $stmt = Connect::getInstance()->query($query);
            return $stmt->fetchAll();
        }


        public function selectByCategory(string $categoryName){
            $query="SELECT products.* FROM products JOIN categories ON products. category_id= categories.id 
            WHERE categories.name Like '{$categoryName}'";

            $stm = Connect::getInstance()->query($query);
            return $stm->fetchAll();
        }

    public function selectByCategoryId (int $categoryId)
    {
        $query = "SELECT products.* FROM products JOIN categories ON products. category_id= categories.id 
        WHERE categories.id Like '{$categoryId}'";

        $stm = Connect::getInstance()->query($query);
        return $stm->fetchAll();
    }
    public function insert()
    {
        $query = "INSERT INTO products VALUE(NULL, '{$this->nome}', '{$this->img}', '{$this->category_id}', '{$this->author}')";
        Connect::getInstance()->query($query);
    }  

    public function update ()
    {
        $query = "UPDATE products 
                  SET nome = '{$this->nome}',  category_id = {$this->category_id}
                  WHERE id = {$this->id}";

        $stm = Connect::getInstance()->query($query);

    }

    public function delete()
    {
        $query = "DELETE FROM products WHERE id = {$this->id}";
        $stm = Connect::getInstance()->query($query);
    }

    public function selectAllAsArray()
{
    $stm = Connect::getInstance()->query("SELECT * FROM products");
    return $stm->fetchAll(\PDO::FETCH_ASSOC);
}

public function selectByIdAsArray(int $id)
{
    $query = "SELECT * FROM products WHERE id = {$id}";
    $stmt = Connect::getInstance()->query($query);
    return $stmt->fetch(\PDO::FETCH_ASSOC);
}

}