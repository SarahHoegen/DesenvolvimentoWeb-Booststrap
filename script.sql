CREATE DATABASE sarahgenshin;
use sarahgenshin;
CREATE TABLE champion (
    id int(11) NOT NULL AUTO_INCREMENT,
    nome varchar(50) DEFAULT NULL,
    elemento varchar(50) DEFAULT NULL,
    classe varchar(50) DEFAULT NULL,
    PRIMARY KEY(id)
);