CREATE TABLE users (
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nome VARCHAR(45),
	email VARCHAR(45),
	senha VARCHAR(45),
	contato VARCHAR(45),
	idade VARCHAR(45),
	estado_civil TINYINT(2),
	STATUS TINYINT(2)
);

CREATE TABLE estado_civil(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	descricao VARCHAR(45)
);

DROP TABLE users;
CREATE TABLE users (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(45),
email VARCHAR(45),
senha VARCHAR(45),
contato VARCHAR(45),
STATUS TINYINT(2)
);

CREATE TABLE cliente(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nome VARCHAR(45),
	data_nasc DATE,
	estado_civil TINYINT(2),
	STATUS TINYINT(2)
);


SELECT c.`id`, c.`nome`, c.`data_nasc`, ec.`descricao` FROM cliente c JOIN estado_civil ec ON c.`estado_civil` = ec.`id` WHERE c.`status` = 1;

