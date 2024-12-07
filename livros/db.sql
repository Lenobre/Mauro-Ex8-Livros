CREATE DATABASE IF NOT EXISTS mauro_livros;

USE mauro_livros;

CREATE TABLE livros (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255) NOT NULL,
    idioma VARCHAR(50) NOT NULL,
    paginas INT NOT NULL,
    editora VARCHAR(255) NOT NULL,
    data_publicacao DATE NOT NULL,
    isbn VARCHAR(20) NOT NULL
);
