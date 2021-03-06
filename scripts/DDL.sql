-- DDL - Linguagem de Defini��o de Dados
-- DDL � o agrupador de comandos SQL para os comandos de defini��o de dados.
-- Respons�vel pelos comandos de cria��o e altera��o no banco de dados, como o CREATE, ALTER e DROP.

CREATE DATABASE DB_RESENHAS DEFAULT CHARACTER SET UTF8 DEFAULT COLLATE UTF8_GENERAL_CI;
USE DB_RESENHAS;

CREATE TABLE TIPO_USUARIO
(
	ID INTEGER NOT NULL AUTO_INCREMENT,
	DESCRICAO VARCHAR(25) NOT NULL,
	PERMISSAO1 BOOLEAN NOT NULL,
	PERMISSAO2 BOOLEAN NOT NULL,
	PERMISSAO3 BOOLEAN NOT NULL,
	PRIMARY KEY (ID)
);

CREATE TABLE USUARIO
(
	ID INTEGER NOT NULL AUTO_INCREMENT,
	ID_TIPO INTEGER NOT NULL,
	NOME VARCHAR(64) NOT NULL,
	APELIDO VARCHAR(20) DEFAULT NULL,
	EMAIL VARCHAR(255) NOT NULL,
	SENHA VARCHAR(64) NOT NULL,
	SALT VARCHAR(8) NOT NULL,
	BL_BLOQUEADO BOOLEAN DEFAULT FALSE,
	NR_TENTATIVAS INTEGER DEFAULT 0,
	DH_CRIACAO DATETIME DEFAULT CURRENT_TIMESTAMP,
	DH_BLOQUEIO DATETIME DEFAULT 0,
	PRIMARY KEY (ID),
	FOREIGN KEY (ID_TIPO) REFERENCES TIPO_USUARIO(ID),
	UNIQUE (EMAIL)
);

CREATE TABLE AUTOR
(
	ID INTEGER NOT NULL AUTO_INCREMENT,
	NOME VARCHAR(64),
	PRIMARY KEY (ID)
);

CREATE TABLE TIPO_PRODUTO
(
	ID INTEGER NOT NULL AUTO_INCREMENT,
	DESCRICAO VARCHAR(20),
	PRIMARY KEY (ID)
);

CREATE TABLE PRODUTO
(
	ID INTEGER NOT NULL AUTO_INCREMENT,
	ID_TIPO INTEGER NOT NULL,
	ID_AUTOR INTEGER NOT NULL,
	TITULO VARCHAR(128) NOT NULL,
	SUB_TITULO VARCHAR(128) DEFAULT NULL,
	DESCRICAO VARCHAR(256) DEFAULT NULL,
	IMAGEM BLOB,
	PRIMARY KEY (ID),
	FOREIGN KEY (ID_TIPO) REFERENCES TIPO_PRODUTO(ID),
	FOREIGN KEY (ID_AUTOR) REFERENCES AUTOR(ID) ON DELETE CASCADE
);

CREATE TABLE RESENHA
(
	ID INTEGER NOT NULL AUTO_INCREMENT,
	ID_AUTOR_RESENHA INTEGER NOT NULL,
	ID_PRODUTO INTEGER NOT NULL,
	DESCRICAO TEXT,
	DH_CRIACAO DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
	DH_MODIFICACAO DATETIME DEFAULT 0,
	BL_ENVIADO BOOLEAN DEFAULT FALSE,
	PRIMARY KEY (ID),
	FOREIGN KEY (ID_AUTOR_RESENHA) REFERENCES USUARIO(ID),
	FOREIGN KEY (ID_PRODUTO) REFERENCES PRODUTO(ID) ON DELETE CASCADE
);

CREATE TABLE COMENTARIO
(
	ID INTEGER NOT NULL AUTO_INCREMENT,
	ID_USUARIO INTEGER NOT NULL,
	ID_RESENHA INTEGER NOT NULL,
	ID_COMENTARIO_PAI INTEGER DEFAULT NULL,
	DESCRICAO VARCHAR(256) NOT NULL,
	DH_CRIACAO DATETIME DEFAULT CURRENT_TIMESTAMP,
	BL_BLOQUEADO BOOLEAN DEFAULT FALSE,
	PRIMARY KEY (ID),
	FOREIGN KEY (ID_USUARIO) REFERENCES USUARIO(ID),
	FOREIGN KEY (ID_RESENHA) REFERENCES RESENHA(ID) ON DELETE CASCADE,
	FOREIGN KEY (ID_COMENTARIO_PAI) REFERENCES COMENTARIO(ID)
);