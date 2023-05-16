DROP DATABASE IF EXISTS KFood;
CREATE DATABASE KFood;
USE KFood;

CREATE TABLE Client(
    idClient INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    login VARCHAR(30),
    mdp VARCHAR(30),
    connect BOOLEAN
);

CREATE TABLE Plats(
    img VARCHAR(40),
    nom VARCHAR(30) PRIMARY KEY,
    desc VARCHAR(200),
    prix VARCHAR(4),
    stock INT
);

CREATE TABLE Desserts(
    img VARCHAR(40),
    nom VARCHAR(30) PRIMARY KEY,
    desc VARCHAR(200),
    prix VARCHAR(4),
    stock INT
);

CREATE TABLE Resto(
    img VARCHAR(40),
    nom VARCHAR(30) PRIMARY KEY,
    desc VARCHAR(200),
    prix VARCHAR(4),
    stock INT
);

CREATE TABLE Panier(
    nom VARCHAR(40),
    prix VARCHAR(4),
    quantite INT
);