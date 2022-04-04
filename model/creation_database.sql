CREATE TABLE IF NOT EXISTS `usuarios` (
      `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
      `nome` VARCHAR( 50 ) NOT NULL ,
      `usuario` VARCHAR( 25 ) NOT NULL ,
      `senha` VARCHAR( 40 ) NOT NULL ,
      `email` VARCHAR( 100 ) NOT NULL ,
      `nivel` INT(1) UNSIGNED NOT NULL DEFAULT '1',
      `ativo` BOOL NOT NULL DEFAULT '1',
      `cadastro` DATETIME NOT NULL ,
  	`logradouro` VARCHAR(100) NOT NULL, 
	`numero` VARCHAR(100) NOT NULL,
	`complemento` VARCHAR(100) NOT NULL,
	`bairro` VARCHAR(100) NOT NULL,
	`cep` VARCHAR(100) NOT NULL,
	`cidade` VARCHAR(100) NOT NULL,
	`uf` VARCHAR(10) NOT NULL,
	`cpf` VARCHAR(100) NOT NULL,
      PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS aluno(
    id integer PRIMARY KEY AUTO_INCREMENT,
    matricula varchar(10) NOT NULL,
    cpf varchar(11) NOT NULL,
    nome varchar(60) NOT NULL,
    email varchar(60) NOT NULL,
    logradouro varchar(60) NOT NULL,
    numero varchar(5) NOT NULL,
    bairro varchar(50) NOT NULL,
    cidade varchar(50) NOT NULL,
    estado varchar(50) NOT NULL,
    cep varchar(10) NOT NULL,
    complemento varchar(70),
    status_aluno int NOT NULL DEFAULT '1'
);

CREATE TABLE IF NOT EXIST `livros`(
 `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
 `titulo` VARCHAR( 40 ) NOT NULL ,
 `autor` VARCHAR( 40 ) NOT NULL ,
 `status` int(2) NOT NULL ,
  PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS emprestimo(
    id integer PRIMARY KEY AUTO_INCREMENT,
    id_aluno int NOT NULL,
    data_emprestimo varchar(10) NOT NULL,
    data_devolucao varchar(10) NOT NULL,
    CONSTRAINT fk_aluno_emprestimo FOREIGN KEY (id_aluno) REFERENCES aluno (id)
);

INSERT INTO `usuarios` VALUES (NULL, 'Usuário Teste', 'demo', SHA1( 'demo'), 'usuario@demo.com.br', 1, 1, NOW( ),'17','jauari','69280','manicore','AM','027345231','123','123');
INSERT INTO `aluno` (`id`, `matricula`, `cpf`, `nome`, `email`, `logradouro`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `complemento`, `status_aluno`) VALUES (NULL, '123123', '12312312312', 'teste', 'teste@teste.com', 'teste', '1', 'teste', 'teste', 'teste', '123123', 'testes', '1');