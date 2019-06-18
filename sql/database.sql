-- verwijder de database als hij al bestaat
DROP DATABASE IF EXISTS toolsforever;

-- maak database aan met naam toolsforever
CREATE DATABASE toolsforever;

-- maak tabel medewerker aan met PRIMARY KEY medewerkerId
CREATE TABLE medewerker(
  medewerkerId int(11) NOT NULL AUTO_INCREMENT,
  voornaam varchar(15),
  tussenvoegsel varchar(15),
  achternaam varchar(15),
  gebruikersnaam varchar(15),
  wachtwoord varchar(42),
  PRIMARY KEY (medewerkerId)
)ENGINE=InnoDB;

-- maak tabel locatie aan met PRIMARY KEY locatieId
CREATE TABLE locatie(
  locatieId int(11) NOT NULL AUTO_INCREMENT,
  locatieNaam varchar(15),
  PRIMARY KEY (locatieId)
)ENGINE=InnoDB;

-- maak tabel fabrikant aan met PRIMARY KEY fabrikantId
CREATE TABLE fabrikant(
  fabrikantId int(11) NOT NULL AUTO_INCREMENT,
  fabrikantNaam varchar(15),
  PRIMARY KEY (fabrikantId)
)ENGINE=InnoDB;

-- maak tabel product aan met PRIMARY KEY productId en FOREIGN KEY fabrikantId die zich aanpast op UPDATE en DELETE
CREATE TABLE product(
  productId int(11) NOT NULL AUTO_INCREMENT,
  productNaam varchar(15),
  type varchar(15),
  fabrikantId int(11),
  inkoopprijs decimal(6,2),
  verkoopprijs decimal(6,2),
  PRIMARY KEY (productId),
  FOREIGN KEY (fabrikantId) REFERENCES fabrikant(fabrikantId) ON UPDATE CASCADE ON DELETE CASCADE
)ENGINE=InnoDB;

-- maak tabel voorraad aan met samengestelde PRIMARY KEY locatieId, productId en FOREIGN KEY locatieId, productId die zich aanpast op UPDATE en DELETE
CREATE TABLE voorraad(
  productId int(11) NOT NULL,
  locatieId int(11) NOT NULL,
  aantal int(11),
  minimumAantal int(11),
  PRIMARY KEY (productId, locatieId),
  FOREIGN KEY (productId) REFERENCES product(productId) ON UPDATE CASCADE ON DELETE CASCADE,
  FOREIGN KEY (locatieId) REFERENCES locatie(locatieId) ON UPDATE CASCADE ON DELETE CASCADE
)ENGINE=InnoDB;

-- voer gegevens in tabel medewerker
INSERT INTO medewerker(voornaam, tussenvoegsel, achternaam, gebruikersnaam, wachtwoord)
  values('Hans', 'De', 'Timmerman', 'Htimmerman', PASSWORD('Hans123')),
  ('Jim', NULL, 'Huizen', 'Jhuizen', PASSWORD('Jim123')),
  ('Frans', NULL, 'Rietboer', 'Frietboer', PASSWORD('Frans123'));

-- voer gegevens in tabel locatie
INSERT INTO locatie(locatieNaam)
  values('Almere'),
  ('Eindhoven'),
  ('Rotterdam');

-- voer gegevens in tabel fabrikant
INSERT INTO fabrikant(fabrikantNaam)
  values('Einhell'),
  ('Bosch'),
  ('Makita');

INSERT INTO product(productNaam, type, fabrikantId, inkoopprijs, verkoopprijs)
  values('Zaag', 'ZG123', '3', '20.00', '25.00'),
  ('Hamer', 'HR123', '2', '15.00', '20.00'),
  ('Boormachine', 'BE123', '1', '150.00', '175.00');


INSERT INTO voorraad(productId, locatieId, aantal, minimumAantal)
  values('1', '1', '15', '5'),
  ('1', '2', '23', '10'),
  ('1', '3', '43', '20'),
  ('2', '1', '21', '5'),
  ('2', '2', '19', '10'),
  ('2', '3', '32', '20'),
  ('3', '1', '31', '5'),
  ('3', '2', '46', '10'),
  ('3', '3', '37', '15');
