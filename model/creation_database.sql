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
)

CREATE TABLE IF NOT EXIST `livros`(
 `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
 `titulo` VARCHAR( 40 ) NOT NULL ,
 `autor` VARCHAR( 40 ) NOT NULL ,
 `status` int(2) NOT NULL ,
  PRIMARY KEY (`id`)

)

INSERT INTO `usuarios` VALUES (NULL, 'Usuário Teste', 'demo', SHA1( 'demo'), 'usuario@demo.com.br', 1, 1, NOW( ),'17','jauari','69280','manicore','AM','027345231','123','123');