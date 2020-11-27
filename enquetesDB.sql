
CREATE DATABASE ENQUETES;

use ENQUETES;

CREATE TABLE enquete (
  id int(8) unsigned NOT NULL auto_increment unique,
  titulo varchar(50),
  Datainic datetime,
  Datafim datetime,
  statusEnquete varchar(30) not null ,
  name1 varchar(20),
  name2 varchar(20),
  name3 varchar(20),
  qtd1vote int(5),
  qtd2vote int(5),
  qtd3vote int(5)
);
