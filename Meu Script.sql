use projeto;
select * from users;

DROP TABLE nome;

SELECT * FROM entrar where nome = 'gustavo' and senha = 'blink182'

INSERT INTO table_name (column1, column2, column3, ...)
VALUES (value1, value2, value3, ...);

INSERT INTO users (nome, senha)
VALUES ('teste','123');

INSERT INTO users (nome, senha)
VALUES ('um','um');

ALTER TABLE entrar AUTO_INCREMENT=1;

CREATE TABLE users (
    id int NOT NULL AUTO_INCREMENT,
    nome varchar(255) NOT NULL,
    senha varchar(255),
    PRIMARY KEY (id)
);

TRUNCATE TABLE produtos;

CREATE TABLE produtos (
    id int NOT NULL AUTO_INCREMENT,
    produto varchar(255) NOT NULL,
    quantidade double,
    valor double,
    total double,
    PRIMARY KEY (id)
);

SET SQL_SAFE_UPDATES = 0;

DELETE FROM  produtos  WHERE produto='doce';

DROP TABLE produtos;

use projeto;
select * from produtos;
select * from produtos WHERE id="1";

SELECT SUM(total) AS num FROM produtos;