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

insert into categorie(nom) values('Santé et beauté'),('Sport'),('Articles pour bébés et enfants'),('Alimentation et boissons');

create table  produit(
  idproduit int not null primary key AUTO_INCREMENT,
  nom varchar(250) unique,
  image varchar(100),
  idcategorie int foreign key references categorie(idcategorie)
  prix double precision,
  stock int,
  check stock > 0,
  ispromotion boolean default FALSE
);

insert into produit(nom,image,idcategorie,prix,stock) values('Elseve Huile','Elseve huile.jpg',1,7000.0,40),('Maybeline make up','Maybelline NY makeup.jpg',1,8000.0,30)
  ,('Boss botteled','boss botteled.jpg',10000.0,30),('Shampoing solide aux oeufs','shampoing oeuf.jpg',5000.0,20);
insert into produit(nom,image,idcategorie,prix,stock) values('Coca cola PM','coca cola.jpg',4,1000.0,50),('Jus Fanta GM','fanta.jpg',4,4000.0,50),('Nouilles Matsiro','matsiro.jpg',4,1000.0,50),
  ()

create table promotion(
  idproduit int foreign key references produit(idproduit),
  prixpromotion double precision
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
