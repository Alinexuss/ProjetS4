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

-- Donnees sur les programmes 
CREATE TABLE exercice (
    idExercice INT auto_increment PRIMARY KEY ,
    exercice VARCHAR(25) NOT NULL ,
    durree TIME NOT NULL ,
    rapportKcal FLOAT NOT NULL
);

CREATE TABLE seance (
    idSceance INT auto_increment PRIMARY KEY ,
    idExercice INT ,
    repetition int,
    FOREIGN KEY (idExercice) REFERENCES exercice(idExercice)
);
create or replace view seance_detail as select s.idSceance,e.exercice,s.repetition from seance as s join exercice as e on s.idExercice=e.idExercice;

CREATE TABLE regime (
    idRegime INT auto_increment PRIMARY KEY ,
    heure TIME NOT NULL ,
    aliment VARCHAR(255) NOT NULL ,
    rapportKcal FLOAT NOT NULL,
    prixUnitaire float not null
);
CREATE TABLE session (
    idSession INT auto_increment PRIMARY KEY ,
    idRegime INT,
    duree INT,
    FOREIGN KEY (idRegime) REFERENCES regime(idRegime)
);
create or replace view session_detail as select s.idSession,r.aliment,s.duree from regime as r join session as s on r.idRegime=s.idRegime;

-- Programme d'ajustement des options de comptes
CREATE TABLE optionCompte (
    idOption INT auto_increment PRIMARY key ,
    optionCompte VARCHAR(25)
);

CREATE TABLE utilisateurCompte (
    idUtilisateur INT ,
    idOption INT DEFAULT '1',
    FOREIGN KEY (idUtilisateur) REFERENCES utilisateur(idUtilisateur) ,
    FOREIGN KEY (idOption) REFERENCES optionCompte(idOption)
);

insert into objectif(idObjectif,typeObjectif) values (0,"prendre du poids");
insert into objectif(idObjectif,typeObjectif) values (1,"perdre du poids");
insert into objectif(idObjectif,typeObjectif) values (2,"atteindre son IMC ideal");

insert into optionCompte(optionCompte) VALUE ("normal");
insert into optionCompte(optionCompte) VALUE ("gold");
insert into optionCompte(optionCompte) VALUE ("master");
