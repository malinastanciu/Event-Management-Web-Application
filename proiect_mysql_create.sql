CREATE TABLE `CATEGORIE` (
	`id_categorie` INT(3) NOT NULL AUTO_INCREMENT,
	`nume` varchar(255) NOT NULL UNIQUE,
	PRIMARY KEY (`id_categorie`)
);

CREATE TABLE `EVENIMENT` (
	`id_eveniment` INT(4) NOT NULL AUTO_INCREMENT,
	`nume_eveniment` varchar(255) NOT NULL,
	`id_categorie` INT(3) NOT NULL,
	`locaţie` varchar(255) NOT NULL,
	`sponsor` varchar(300) NOT NULL,
	`data` DATE NOT NULL,
	`ora` TIME NOT NULL,
	PRIMARY KEY (`id_eveniment`)
);

CREATE TABLE `PARTICIPANŢI` (
	`id_participant` INT(4) NOT NULL AUTO_INCREMENT,
	`nume` varchar(255) NOT NULL,
	`prenume` varchar(255) NOT NULL,
	`CNP` varchar(13) NOT NULL UNIQUE,
	`telefon` varchar(10) NOT NULL,
	PRIMARY KEY (`id_participant`)
);

CREATE TABLE `ARTIST` (
	`id_artist` INT(4) NOT NULL AUTO_INCREMENT,
	`nume` varchar(255) NOT NULL,
	`prenume` varchar(255) NOT NULL,
	`telefon` varchar(10) NOT NULL,
	`preţ` FLOAT(6) NOT NULL,
	PRIMARY KEY (`id_artist`)
);

CREATE TABLE `EvenimentArtist` (
	`id_eveniment` INT(4) NOT NULL,
	`id_artist` INT(4) NOT NULL,
	PRIMARY KEY (`id_eveniment`,`id_artist`)
);

CREATE TABLE `ParticipantiEveniment` (
	`id_participant` INT(4) NOT NULL,
	`id_eveniment` INT(4) NOT NULL,
	`nr_bilet` INT(4) NOT NULL UNIQUE,
	PRIMARY KEY (`id_participant`,`id_eveniment`)
);

ALTER TABLE `EVENIMENT` ADD CONSTRAINT `EVENIMENT_fk0` FOREIGN KEY (`id_categorie`) REFERENCES `CATEGORIE`(`id_categorie`);

ALTER TABLE `EvenimentArtist` ADD CONSTRAINT `EvenimentArtist_fk0` FOREIGN KEY (`id_eveniment`) REFERENCES `EVENIMENT`(`id_eveniment`);

ALTER TABLE `EvenimentArtist` ADD CONSTRAINT `EvenimentArtist_fk1` FOREIGN KEY (`id_artist`) REFERENCES `ARTIST`(`id_artist`);

ALTER TABLE `ParticipantiEveniment` ADD CONSTRAINT `ParticipantiEveniment_fk0` FOREIGN KEY (`id_participant`) REFERENCES `PARTICIPANŢI`(`id_participant`);

ALTER TABLE `ParticipantiEveniment` ADD CONSTRAINT `ParticipantiEveniment_fk1` FOREIGN KEY (`id_eveniment`) REFERENCES `EVENIMENT`(`id_eveniment`);

