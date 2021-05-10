
DROP TABLE IF EXISTS user ; 
CREATE TABLE user (
  id BIGINT AUTO_INCREMENT NOT NULL, 
  nom VARCHAR(50), 
  prenom VARCHAR(100), 
  login VARCHAR(100), 
  password VARCHAR(50), 
  email VARCHAR(200),
  tel VARCHAR(25),
  pays VARCHAR(50), 
  nbre_search BIGINT, 
  date_add DATE, 
  PRIMARY KEY (id, login)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;  

DROP TABLE IF EXISTS produit ; 
CREATE TABLE produit (
  id BIGINT AUTO_INCREMENT NOT NULL, 
  nom VARCHAR(200), 
  categorie VARCHAR(50), 
  marque VARCHAR(50), 
  origine VARCHAR(100), 
  prix VARCHAR(50), 
  caracteristique TEXT, 
  isnews VARCHAR(10), 
  PRIMARY KEY (id)
) ENGINE=InnoDB;  

DROP TABLE IF EXISTS boutique ; 
CREATE TABLE boutique (
  id BIGINT AUTO_INCREMENT NOT NULL, 
  nom VARCHAR(50), 
  lg VARCHAR(50), 
  lat VARCHAR(50), 
  ville VARCHAR(50), 
  pays VARCHAR(50), 
  adresse TEXT, 
  login VARCHAR(100), 
  password VARCHAR(50), 
  gerant1 VARCHAR(100), 
  gerant2 VARCHAR(100), 
  gerant3 VARCHAR(100), 
  date_add DATE, 
  nbre_client BIGINT, 
  PRIMARY KEY (id, login)
) ENGINE=InnoDB;  

DROP TABLE IF EXISTS pays ; 
CREATE TABLE pays (
  id BIGINT AUTO_INCREMENT NOT NULL, 
  code VARCHAR(10), 
  abreviation VARCHAR(10), 
  nom VARCHAR(50), 
  devise VARCHAR(10), 
  drapeau TEXT, 
  PRIMARY KEY (id, code, abreviation)
) ENGINE=InnoDB;  

DROP TABLE IF EXISTS ville ; 
CREATE TABLE ville (
  id BIGINT AUTO_INCREMENT NOT NULL, 
  id_pays BIGINT, 
  nom VARCHAR(50), 
  adresse TEXT, 
  type VARCHAR(50), 
  PRIMARY KEY (id)
) ENGINE=InnoDB;  

DROP TABLE IF EXISTS promotion ; 
CREATE TABLE promotion (
  id BIGINT AUTO_INCREMENT NOT NULL, 
  id_produit BIGINT, 
  id_boutique BIGINT, 
  date_promo DATE, 
  limit_promo DATE, 
  type_promo VARCHAR(50), 
  PRIMARY KEY (id)
) ENGINE=InnoDB;  

DROP TABLE IF EXISTS n_user ; 
CREATE TABLE n_user (
  id BIGINT AUTO_INCREMENT NOT NULL, 
  date_add DATE, 
  ip VARCHAR(30), 
  navigateur VARCHAR(50), 
  appareil VARCHAR(50), 
  PRIMARY KEY (id)
) ENGINE=InnoDB; 

DROP TABLE IF EXISTS possede ; 
CREATE TABLE possede (
  id BIGINT AUTO_INCREMENT NOT NULL,  
  id_boutique BIGINT, 
  id_produit BIGINT, 
  qtte INT, 
  prix VARCHAR(50), 
  level INT, 
  PRIMARY KEY (id)
) ENGINE=InnoDB;  

DROP TABLE IF EXISTS consulte ; 
CREATE TABLE consulte (
  id BIGINT AUTO_INCREMENT NOT NULL,
  id_boutique BIGINT, 
  id_user BIGINT, 
  nom VARCHAR(50), 
  date_consulte DATE, 
  PRIMARY KEY (id)
) ENGINE=InnoDB;  