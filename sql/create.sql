CREATE DATABASE dbProjeto;

USE dbProjeto;

CREATE TABLE tbNivelUsuarios (
	idNivelUsuario INT(5) UNSIGNED NOT NULL,
    nivelUsuario VARCHAR (40) NOT NULL,
    PRIMARY KEY (idNivelUsuario)
); 

CREATE TABLE tbUsuarios (
      idUsuario INT(5) UNSIGNED NOT NULL AUTO_INCREMENT,
      nomeUsuario VARCHAR(50) NOT NULL,
      tagUsuario VARCHAR(25) NOT NULL,
      senhaUsuario VARCHAR(40) NOT NULL,
      emailUsuario VARCHAR(100) NOT NULL,
      idNivelUsuario INT(1) UNSIGNED NOT NULL DEFAULT '1',
      ativo INT(1) UNSIGNED DEFAULT '1',
      dtCadastro DATETIME NOT NULL,
      PRIMARY KEY (idUsuario),
      UNIQUE KEY (tagUsuario),
      FOREIGN KEY (idNivelUsuario) REFERENCES tbNivelUsuarios (idNivelUsuario)
  );
  
  /* Obs.: 
  UNSIGNED é usado para nao conter números negativos;
  UNIQUE KEY é usado para não permitir dados repetidos;
  
  "nivelUsuario" será usado para especificar o conteúdo que o usuário poderá acessar;
  "ativo" será usado para quando precisar remover um usuário do sistema sem excluir o registro
  basta trocar o valor da coluna ativo pra zero
  */

  CREATE TABLE tbGeneros (
	idGenero INT(5) UNSIGNED NOT NULL AUTO_INCREMENT,
    genero VARCHAR(50) NOT NULL,
    PRIMARY KEY (idGenero)
  );
  
  CREATE TABLE tbJogos (
      idJogo INT(5) UNSIGNED NOT NULL AUTO_INCREMENT,
      nomeJogo VARCHAR(50) NOT NULL,
      caminhoImg VARCHAR (200),
      desenvolvedora VARCHAR (40),
      dtLancamento DATE,
      idGenero INT(5) UNSIGNED NOT NULL,
      descricao VARCHAR (2000),
      PRIMARY KEY (idJogo),
      FOREIGN KEY (idGenero) REFERENCES tbGeneros (idGenero)
  );

CREATE TABLE tbMusicas (
	idMusica INT(5) UNSIGNED NOT NULL AUTO_INCREMENT,
	tituloMusica VARCHAR(50) NOT NULL,
    artista VARCHAR(100) NOT NULL,
    urlMusica VARCHAR (200),
    idJogo INT(5) UNSIGNED NOT NULL,
    PRIMARY KEY (idMusica),
    FOREIGN KEY (idJogo) REFERENCES tbJogos (idJogo)
);