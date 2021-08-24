create table admin(
  idamin int not null primary key AUTO_INCREMENT,
  nom varchar(250),
  password varchar(250)
);

insert into admin(nom,password) values('Administrator',sha1('123456'));

create table caisse(
  idcaisse int not null primary key AUTO_INCREMENT,
  nom varchar(250) unique
);

insert into caisse(nom) values('Caisse n°1'),
    ('Caisse n°2'),('Caisse n°3'),('Caisse n°4'),('Caisse n°5'),('Caisse n°6');
