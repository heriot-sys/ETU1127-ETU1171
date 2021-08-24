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
create table categorie(
  idcategorie int not null primary key AUTO_INCREMENT,
  nom varchar(250) unique
);

create table  produit(
  idproduit int not null primary key AUTO_INCREMENT,
  nom varchar(250) unique,
  prix double precision,
  stock int,
  check stock > 0,
  ispromotion boolean
);

create table promotion(
  idproduit int foreign key references produit(idproduit),
  prixpromotion double precision
);

create table relation(
  idproduit int foreign key references produit(idproduit),
  idcategorie int foreign key references categorie(idcategorie)
);

create table achat(
  idcaisse int foreign key references caisse(idcaisse),
  datedachat timestamp,
  prixTotal double precision,
);

create table detailsachat(
  idachat int foreign key references achat(idachat),
  idproduit int foreign key references produit(idproduit),
  prixUnitaire double precision,
  quantite int,
  total double precision
);
