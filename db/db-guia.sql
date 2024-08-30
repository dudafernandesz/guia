-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 28-Aug-2024 às 16:00
-- Versão do servidor: 8.0.21
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `guia de leitura`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Ficção'),
(2, 'Não-Ficção'),
(3, 'Mistério'),
(4, 'Fantasia'),
(5, 'Biografia'),
(6, 'Ciência'),
(7, 'Romance'),
(8, 'História'),
(9, 'Educação');

-- --------------------------------------------------------

--
-- Estrutura da tabela `books`
--

DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `description` text,
  `publication_date` date,
  `category_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_books_category_idx` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `books`
--

INSERT INTO `books` (`id`, `title`, `author`, `description`, `publication_date`, `category_id`) VALUES
(1, 'O Hobbit', 'J.R.R. Tolkien', 'Um livro sobre as aventuras de Bilbo Bolseiro.', '1937-09-21', 4),
(2, '1984', 'George Orwell', 'Uma distopia sobre um futuro totalitário.', '1949-06-08', 1),
(3, 'A Brief History of Time', 'Stephen Hawking', 'Exploração sobre cosmologia e física.', '1988-03-01', 6),
(4, 'Sapiens: A Brief History of Humankind', 'Yuval Noah Harari', 'História da humanidade desde a Idade da Pedra até o presente.', '2011-09-04', 8);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Alice Johnson', 'alice.johnson@example.com', '$2y$10$C2qJxv9J9ZfgcGQY2T5t/.p4QdXk6PAh5BauD.6Xt7RRsfTkEJKFq', '2024-01-01 12:00:00', NULL),
(2, 'Bob Smith', 'bob.smith@example.com', '$2y$10$I9NhkH8m6h4pI6D5I8WvzuQsM5f3Jms/rwVn1bxGJ2vYV4bQOV8Oy', '2024-01-05 14:30:00', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `reviews`
--

DROP TABLE IF EXISTS `reviews`;
CREATE TABLE IF NOT EXISTS `reviews` (
  `id` int NOT NULL AUTO_INCREMENT,
  `book_id` int NOT NULL,
  `user_id` int NOT NULL,
  `rating` int NOT NULL,
  `review_text` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `fk_reviews_book_idx` (`book_id`),
  KEY `fk_reviews_user_idx` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `reviews`
--

INSERT INTO `reviews` (`id`, `book_id`, `user_id`, `rating`, `review_text`, `created_at`) VALUES
(1, 1, 1, 5, 'Uma aventura fantástica com um mundo muito bem construído.', '2024-02-01 09:00:00'),
(2, 2, 2, 4, 'Um livro impactante e relevante, muito bem escrito.', '2024-02-05 10:15:00'),
(3, 3, 1, 5, 'Uma explicação clara e fascinante sobre o universo.', '2024-03-01 11:00:00');

-- --------------------------------------------------------

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `fk_books_category` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Limitadores para a tabela `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `fk_reviews_book` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `fk_reviews_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
