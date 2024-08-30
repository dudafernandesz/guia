<?php

ob_start();

require  __DIR__ . "/../vendor/autoload.php";

use CoffeeCode\Router\Router;

$route = new Router(url("api"),":");

$route->namespace("Source\App\Api");

//$route->get("/livros", "Books:listBooks");
//$route->get("/buscaLivroPeloId{bookId}", "Books:findBookById");
//$route->post("/livros", "Books:insertBook");

/* USERS */

$route->group("/users");

$route->get("/", "Users:listUsers");
$route->post("/","Users:insertUser");
$route->post("/login","Users:loginUser");
$route->post("/update","Users:updateUser");
$route->post("/set-password","Users:setPassword");

$route->group("null");

/* FAQS */

$route->group("/faqs");

$route->get("/","Faqs:listFaqs");

$route->group("null");

/* BOOKS */

$route->group("/books");

$route->get("/","Books:listBooks");
$route->get("/listBooks/{id}","listBooks:findBookById");
$route->post("/insertBook", "Books:insert");
$route->put("/update/book/{id}/name/{name}","Books:update");
$route->delete("/delete/book/{booksId}","Books:deleteById");

$route->group("null");


/* Reviws*/
$route->group("/reviews");

$route->get("/","Reviews:listReviews");
$route->get("/listReviews/{id}","Reviews:listReviews");
$route->post("/create/{id}/book_id/{book_id}/user_id/{user_id}/review_text/{review_text}/created_at/{created_at}","Reviews:insertReview");
$route->put("/update/review/{id}/name/{name}","Reviews:update");
$route->delete("/delete/review/{reviewsId}","Reviews:deleteById");

$route->group("null");

/*
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `description` text,
  `publication_date` date,
  `category_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_books_category_idx` (`category_id`)*/


$route->dispatch();

/** ERROR REDIRECT */
if ($route->error()) {
    header('Content-Type: application/json; charset=UTF-8');
    http_response_code(404);

    echo json_encode([
        "errors" => [
            "type " => "endpoint_not_found",
            "message" => "Não foi possível processar a requisição"
        ]
    ], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
}

ob_end_flush();
