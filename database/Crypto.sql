 #Author : D!v!ne #

 create database IF NOT EXISTS Crypto;

 use Crypto;

 CREATE TABLE IF NOT EXISTS users(

 	id int not null auto_increment,
 	email varchar(225) UNIQUE not null,
 	password varchar(225) not null,
 	primary key(id)
); 

CREATE TABLE IF NOT EXISTS invested(
  id int  auto_increment not null,
  user_id int not null,
  amount int not null,
  primary key(id),
  foreign key(user_id) references users(id)

)
