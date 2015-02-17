-- DML - Linguagem de Manipula��o de Dados
-- DML � o agrupador de comandos SQL para os comandos de manipula��o de dados.
-- Repons�vel pelos comandos INSERT, UPDATE, DELETE e SELECT.

USE DB_RESENHAS;

-- Tipos de Usu�rios - Leitura, Ger�ncia, Escrita
INSERT INTO TIPO_USUARIO (DESCRICAO, PERMISSAO1, PERMISSAO2, PERMISSAO3) 
	VALUES ('Admin', TRUE, TRUE, TRUE);
	
INSERT INTO TIPO_USUARIO (DESCRICAO, PERMISSAO1, PERMISSAO2, PERMISSAO3) 
	VALUES ('Escritor', TRUE, FALSE, TRUE);
	
INSERT INTO TIPO_USUARIO (DESCRICAO, PERMISSAO1, PERMISSAO2, PERMISSAO3) 
	VALUES ('Visitante', TRUE, FALSE, FALSE);

-- Usu�rio - 1. An�nimo
INSERT INTO USUARIO (ID_TIPO, NOME, APELIDO, EMAIL, SENHA, SALT) 
	VALUES ((SELECT ID FROM TIPO_USUARIO WHERE DESCRICAO = 'Visitante'), 'Usu�rio An�nimo', 'An�nimo', 'anonimo@anonimo.com', 'anonimo', 'anonimo');