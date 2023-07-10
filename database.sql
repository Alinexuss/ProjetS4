CREATE DATABASE Foodsport ;

use foodsport;

-- Donnees sur les utilisateurs
CREATE TABLE utilisateur (
    idUtilisateur INTEGER PRIMARY KEY ,
    nom VARCHAR(25) NOT NULL ,
    email VARCHAR(125) NOT NULL ,
    mdp VARCHAR(25) NOT NULL
);

CREATE TABLE detailUtilisateur (
    idUtilisateur INT ,
    genre INT NOT NULL ,
    taille FLOAT NOT NULL ,
    poids INT NOT NULL ,
    FOREIGN KEY idUtilisateur REFERENCES utilisateur(idUtilisateur)
);

CREATE TABLE objectif (
    idObjectif INT PRIMARY KEY ,
    typeObjectif VARCHAR(25) NOT NULL 
);

CREATE TABLE objectifUtilisateur (
    idObjectif INT NOT NULL ,
    idUtilisateur INT NOT NULL ,
    kilo INT NOT NULL ,
    FOREIGN KEY idObjectif REFERENCES objectif(idObjectif) ,
    FOREIGN KEY idUtilisateur REFERENCES utilisateur(idUtilisateur) 
);

-- Donnees sur les programmes 
CREATE TABLE exercice (
    idExercice INTEGER PRIMARY KEY ,
    exercice VARCHAR(25) NOT NULL ,
    durree TIME NOT NULL ,
    rapportKcal FLOAT NOT NULL
);

CREATE TABLE sceance (
    idSceance INTEGER PRIMARY KEY ,
    idExercice INT ,
    FOREIGN KEY idExercice REFERENCES exercice(idExercice)
);

CREATE TABLE regime (
    idRegime INTEGER PRIMARY KEY ,
    heure TIME NOT NULL ,
    aliment VARCHAR(255) NOT NULL ,
    rapportKcal FLOAT NOT NULL
);


