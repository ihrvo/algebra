-- Brisanja iz baze podataka

-- brisanje pojedinog ćlana iz tablice
DELETE FROM clanovi WHERE id = 4;

-- brisanje atributa (column) iz postojeće tablice
ALTER TABLE clanovi DROP COLUMN datum_rodjenja;

-- brisanje indeksa u tablici
ALTER TABLE clanovi DROP INDEX email;
ALTER TABLE knjige DROP FOREIGN KEY knjige_ibfk_1;

-- brisanje tablice
DROP TABLE IF EXISTS zanrovi;

-- brisanje baze
DROP DATABASE IF EXISTS videoteka;

-- isprazni tablice
TRUNCATE TABLE zanrovi;
DELETE FROM zanrovi;

ALTER TABLE knjige ADD FOREIGN KEY (zanr_id) REFERENCES zanrovi(id) ON DELETE CASCADE;