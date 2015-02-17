-- DML - Linguagem de Manipulação de Dados
-- DML é o agrupador de comandos SQL para os comandos de manipulação de dados.
-- Reponsável pelos comandos INSERT, UPDATE, DELETE e SELECT.

USE DB_RESENHAS;

-- Tipos de Usuários - Leitura, Gerência, Escrita
INSERT INTO TIPO_USUARIO (DESCRICAO, PERMISSAO1, PERMISSAO2, PERMISSAO3) 
	VALUES ('Admin', TRUE, TRUE, TRUE);
	
INSERT INTO TIPO_USUARIO (DESCRICAO, PERMISSAO1, PERMISSAO2, PERMISSAO3) 
	VALUES ('Escritor', TRUE, FALSE, TRUE);
	
INSERT INTO TIPO_USUARIO (DESCRICAO, PERMISSAO1, PERMISSAO2, PERMISSAO3) 
	VALUES ('Visitante', TRUE, FALSE, FALSE);

-- Usuário - 1. Anônimo
INSERT INTO USUARIO (ID_TIPO, NOME, APELIDO, EMAIL, SENHA, SALT) 
	VALUES ((SELECT ID FROM TIPO_USUARIO WHERE DESCRICAO = 'Visitante'), 'Usuário Anônimo', 'Anônimo', 'anonimo@anonimo.com', 'anonimo', 'anonimo');