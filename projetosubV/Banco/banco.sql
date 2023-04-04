CREATE TABLE Blog(
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    foto_blog VARCHAR(200) NOT NULL,
    titulo_blog VARCHAR(200) NOT NULL,
    descricao_blog VARCHAR(600) NOT NULL,
    link_blog VARCHAR(100),
    curtidas INT DEFAULT 0,
    data_public DATE NOT NULL
);
/* 2022-11-28 19:52:07 [36 ms] */ 
CREATE DATABASE projetosub;
/* 2022-11-28 20:09:01 [115 ms] */ 
CREATE TABLE usuario(
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL, 
    nome VARCHAR(15) NOT NULL,
    sobrenome VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL,
    telefone VARCHAR(12) NOT NULL,
    senha VARCHAR(20) NOT NULL,
    datanasc DATE NOT NULL
);
