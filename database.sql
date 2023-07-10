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

CREATE TABLE sceance (
    idSceance INT auto_increment PRIMARY KEY ,
    idExercice INT ,
    FOREIGN KEY (idExercice) REFERENCES exercice(idExercice)
);

CREATE TABLE regime (
    idRegime INT auto_increment PRIMARY KEY ,
    heure TIME NOT NULL ,
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

insert into objectif(idObjectif,typeObjectif) values (0,"prendre du poinds");
insert into objectif(idObjectif,typeObjectif) values (1,"perdre du poinds");


