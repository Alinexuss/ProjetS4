--CREATE DATABASE Foodsport ;

--use foodsport;

-- Donnees sur les utilisateurs
CREATE TABLE utilisateur (
    idUtilisateur INT auto_increment PRIMARY KEY ,
    nom VARCHAR(25) NOT NULL ,
    email VARCHAR(125) NOT NULL ,
    mdp VARCHAR(25) NOT NULL,
    typeUtilisateur INT 
);

CREATE TABLE detailUtilisateur (
    idUtilisateur INT ,
    genre INT NOT NULL ,
    taille FLOAT NOT NULL ,
    poids INT NOT NULL ,
    FOREIGN KEY (idUtilisateur) REFERENCES utilisateur(idUtilisateur)
);

CREATE TABLE objectif (
    idObjectif INT PRIMARY KEY ,
    typeObjectif VARCHAR(25) NOT NULL 
);

CREATE TABLE objectifUtilisateur (
    idObjectif INT NOT NULL ,
    idUtilisateur INT NOT NULL ,
    kilo INT NOT NULL ,
    FOREIGN KEY (idObjectif) REFERENCES objectif(idObjectif) ,
    FOREIGN KEY (idUtilisateur) REFERENCES utilisateur(idUtilisateur) 
);
create or replace view objectifUtilisateur_detail as select o.idobjectif,o.typeObjectif,u.idUtilisateur,u.kilo from objectifUtilisateur as u join objectif as o on o.idObjectif=u.idObjectif;
create or replace view objectifUtilisateur_detail_detail as select o.idobjectif,o.typeObjectif,u.nom,o.kilo from objectifUtilisateur_detail as o join utilisateur as u on o.idUtilisateur=u.idUtilisateur;

-- Donnees sur les programmes 
CREATE TABLE exercice (
    idExercice INT auto_increment PRIMARY KEY ,
    exercice VARCHAR(25) NOT NULL ,
    durree INT NOT NULL ,
    rapportKcal FLOAT NOT NULL
);

CREATE TABLE seance (
    idSceance INT auto_increment PRIMARY KEY ,
    idExercice INT ,
    repetition int,
    FOREIGN KEY (idExercice) REFERENCES exercice(idExercice)
);
create or replace view seance_detail as select s.idSceance,e.exercice,s.repetition,e.rapportKcal from seance as s join exercice as e on s.idExercice=e.idExercice;

CREATE TABLE regime (
    idRegime INT auto_increment PRIMARY KEY ,
    heure INT NOT NULL ,
    aliment VARCHAR(255) NOT NULL ,
    rapportKcal FLOAT NOT NULL,
    prixUnitaire float not null
);
CREATE TABLE session(
    idSession INT auto_increment PRIMARY KEY ,
    idRegime INT,
    duree INT,
    FOREIGN KEY (idRegime) REFERENCES regime(idRegime)
);
create or replace view session_detail as select s.idSession,r.aliment,s.duree,r.rapportKcal from regime as r join session as s on r.idRegime=s.idRegime;

create or replace view calorie_seance as select (repetition*rapportKcal) as calorie,idsceance from seance_detail;

create or replace view calorie_session as select (duree*rapportKcal) as calorie,idSession from session_detail;


insert into objectif(idObjectif,typeObjectif) values (0,"prendre du poids");
insert into objectif(idObjectif,typeObjectif) values (1,"perdre du poids");
insert into objectif(idObjectif,typeObjectif) values (2,"atteindre son IMC ideal");

insert into regime(heure,aliment,rapportKcal,prixUnitaire) values (6,'poulet soupe',200,15000);
insert into regime(heure,aliment,rapportKcal,prixUnitaire) values (12,'legumes sautes',50,10000);
insert into regime(heure,aliment,rapportKcal,prixUnitaire) values (18,'poisson panee',175,20000);
insert into regime(heure,aliment,rapportKcal,prixUnitaire) values (18,'viande de boeuf cuit',400,40000);
insert into regime(heure,aliment,rapportKcal,prixUnitaire) values (12,'fruits rouges',75,5000);


insert into exercice (exercice,durree,rapportKcal) values ('gennage',10,-200);
insert into exercice (exercice,durree,rapportKcal) values ('abdo',15,-300);
insert into exercice (exercice,durree,rapportKcal) values ('dips',30,150);
insert into exercice (exercice,durree,rapportKcal) values ('course',60,-150);
insert into exercice (exercice,durree,rapportKcal) values ('traction',45,-90);

insert into seance(idExercice,repetition) values(1,3);
insert into seance(idExercice,repetition) values(2,3);
insert into seance(idExercice,repetition) values(3,5);
insert into seance(idExercice,repetition) values(4,2);
insert into seance(idExercice,repetition) values(5,3);

insert into session(idRegime,duree) values (1,10);
insert into session(idRegime,duree) values (2,12);
insert into session(idRegime,duree) values (3,15);
insert into session(idRegime,duree) values (4,7);
insert into session(idRegime,duree) values (5,8);