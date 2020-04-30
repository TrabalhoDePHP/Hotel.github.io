Create database db_hotel;
use db_hotel;

Create table Hoteis (
id int not null auto_increment,
nome varchar(150) not null,
endereco varchar (200) not null,
qtdQuartos int not null,
qtdGaragens int not null,
qtdBanheiros int not null,
status ENUM('desocupado', 'ocupado'),
primary key (id)
);

select * from Hoteis;