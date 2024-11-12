CREATE DATABASE aulas_66_76
    DEFAULT CHARACTER SET = 'utf8mb4';

USE aulas_66_76;

CREATE TABLE posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    category_id INT NOT NULL,
    title VARCHAR(255) NOT NULL,
    slug VARCHAR(191) UNIQUE NOT NULL,
    text TEXT NOT NULL,
    status ENUM('draft', 'published', 'archived') DEFAULT 'draft',
    FOREIGN KEY (category_id) REFERENCES categories(id) ON DELETE CASCADE
) COMMENT 'Tabela de posts relacionada com categorias';

INSERT INTO `posts`(`text`,`status`,`title`,`category_id`,`slug`) VALUES('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam soluta cupiditate incidunt ab, praesentium quidem deserunt adipisci aut deleniti a impedit suscipit dolor magni recusandae tempore doloribus ea sit aperiam. 1','published','Postagem comum',1,'postagem-comum');
INSERT INTO `posts`(`text`,`title`,`category_id`,`slug`) VALUES('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam soluta cupiditate incidunt ab, praesentium quidem deserunt adipisci aut deleniti a impedit suscipit dolor magni recusandae tempore doloribus ea sit aperiam. 2','Postagem incomum',1,'postagem-incomum');
INSERT INTO `posts`(`text`,`status`,`title`,`category_id`,`slug`) VALUES('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam soluta cupiditate incidunt ab, praesentium quidem deserunt adipisci aut deleniti a impedit suscipit dolor magni recusandae tempore doloribus ea sit aperiam. 3','published','Postagem rara',2,'postagem-rara');
INSERT INTO `posts`(`text`,`status`,`title`,`category_id`,`slug`) VALUES('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam soluta cupiditate incidunt ab, praesentium quidem deserunt adipisci aut deleniti a impedit suscipit dolor magni recusandae tempore doloribus ea sit aperiam. 4','published','Postagem épica',1,'postagem-epica');
INSERT INTO `posts`(`text`,`status`,`title`,`category_id`,`slug`) VALUES('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam soluta cupiditate incidunt ab, praesentium quidem deserunt adipisci aut deleniti a impedit suscipit dolor magni recusandae tempore doloribus ea sit aperiam. 5','published','Postagem lendária',3,'postagem-lendaria');
INSERT INTO `posts`(`text`,`title`,`category_id`,`slug`) VALUES('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam soluta cupiditate incidunt ab, praesentium quidem deserunt adipisci aut deleniti a impedit suscipit dolor magni recusandae tempore doloribus ea sit aperiam. 6','Postagem mística',3,'postagem-mistica');

CREATE TABLE categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    slug VARCHAR(191) UNIQUE NOT NULL,
    text TEXT NOT NULL,
    status ENUM('draft', 'published', 'archived') DEFAULT 'draft'
) COMMENT 'Tabela de categorias relacionada com posts';

INSERT INTO `categories`(`title`,`slug`,`text`,`status`) VALUES('PHP','php','PHP é uma linguagem interpretada livre, usada originalmente apenas para o desenvolvimento de aplicações presentes e atuantes no lado do servidor','published');
INSERT INTO `categories`(`text`,`title`,`slug`,`status`) VALUES('Tecnologia é o conjunto de processos e habilidades usados na produção de bens ou serviços','Tecnologia','tecnologia','published');
INSERT INTO `categories`(`text`,`title`,`slug`,`status`) VALUES('Segurança de computadores ou cibersegurança é a proteção de sistemas de computador contra roubo ou danos ao hardware, software ou dados eletrônicos, bem como a interrupção ou desorientação dos serviços que fornecem.','Segurança','seguranca','published');
INSERT INTO `categories`(`text`,`status`,`title`,`slug`) VALUES('O MySQL é um sistema de gerenciamento de banco de dados (SGBD), que utiliza a linguagem SQL','published','MySQL','mysql');
INSERT INTO `categories`(`title`,`slug`,`text`) VALUES('Teste','teste','Loren');

UPDATE `posts` SET `category_id`=1 WHERE `id`=1;
SET FOREIGN_KEY_CHECKS = 1;
