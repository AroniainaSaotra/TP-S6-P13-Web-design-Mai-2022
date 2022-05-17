create database rechauffement;
use rechauffement;

create table Utilisateur(
    id int not null AUTO_INCREMENT PRIMARY KEY,
    log VARCHAR(100),
    mdp varchar(100)
);

create table rechauffement(
    id int not null AUTO_INCREMENT PRIMARY KEY,
    descri varchar(2000)
);

create table cas(
    id int not null AUTO_INCREMENT primary key,
    descri varchar(2000),
    continent varchar(2000)
);

insert into cas(descri,continent) values('Temperature augmente de 40 degre','Afrique');
insert into cas(descri,continent) values('Deforestation ','Amazonie');
insert into cas(descri,continent) values('45 degre','France ee');

create table images(
    id int not null auto_increment PRIMARY KEY,
    img varchar(100),
    descri varchar(250)
);
insert into Utilisateur(log,mdp) values('admin',sha1('admin'));
insert into Utilisateur(log,mdp) values('admin1',sha1('admin1'));

insert into rechauffement(descri) VALUES('Le réchauffement climatique est un phénomène global de transformation du climat 
caractérisé par une augmentation générale des températures moyennes (notamment liée aux activités humaines), et qui modifie 
durablement les équilibres météorologiques et les écosystèmes.
Lorsque l’on en parle aujourd’hui, il s’agit du phénomène d’augmentation des températures qui se produit sur Terre depuis 
100 à 150 ans. Depuis le début de la Révolution Industrielle, les températures moyennes sur terre ont en effet augmenté plus
 ou moins régulièrement. En 2016, la température moyenne sur la planète terre était environ 1 à 1.5 degrés au dessus des 
 températures moyennes de l ère pré-industrielle (avant 1850).');

insert into rechauffement(descri) VALUES('Grâce aux travaux du GIEC et des autres scientifiques qui travaillent sur la définition 
du réchauffement climatique, on comprend désormais mieux les conséquences de ce phénomène sur notre vie. Dans l’esprit de beaucoup
, le réchauffement climatique est un problème relativement lointain qui implique simplement qu’il va faire plus chaud. Mais en fait
, les conséquences sont beaucoup plus profondes.');

insert into images (img,descri) values('rc1.jpg','Le hangement climatique ne s est pas arreter pendant la pandemie su COVID_19,
selon le rapport de United in science');

insert into images (img,descri) values('rc2.jpg','Giec : le pronostique alarmant pour le rechauffement climatique en France');

insert into images (img,descri) values('rc3.jpg','Lutte contre le réchauffement climatique : ce qu en disent les candidats à la présidentielle
climat');

insert into images (img,descri) values('rc4.jpg','Effet de serre : définition et rôle dans le réchauffement climatique');


