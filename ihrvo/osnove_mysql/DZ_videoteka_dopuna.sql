-- Dopuna zadace
-- kreirajte novo korisnika u MySQL-u i dajte mu povlastice samo za bazu videoteka
-- Svaki film ima zalihu dostupnih kopija po mediju za koji je dostupan
-- Svaka fizicka kopija filma ima svoj jedinstveni identifikacijski broj (s/n) kako bi se mogla pratiti
-- Clan od jednom moze posuditi vise od jednog filma

-- kreirajte novo korisnika u MySQL-u i dajte mu povlastice samo za bazu videoteka

CREATE USER 'videoteka'@'localhost' IDENTIFIED BY 'lozinka';
GRANT ALL PRIVILEGES ON videoteka.* TO 'videoteka'@'localhost'; -- login as root -> GRANT CREATE, ALTER, DROP, INSERT, UPDATE, DELETE, SELECT, REFERENCES, RELOAD
FLUSH PRIVILEGES; -- Many guides suggest running the FLUSH PRIVILEGES command immediately after a CREATE USER or 
-- GRANT statement in order to reload the grant tables to ensure that the new privileges are put into effect

-- use videoteka;
CREATE TABLE IF NOT EXISTS kopija_sn (
    id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
    zaliha_id INT UNSIGNED NOT NULL,
    film_id INT UNSIGNED NOT NULL,
    medij_id INT UNSIGNED NOT NULL,
    sn VARCHAR(255) NOT NULL DEFAULT '',
    FOREIGN KEY (zaliha_id) REFERENCES zaliha(id),
    FOREIGN KEY (film_id) REFERENCES zaliha(film_id),
    FOREIGN KEY (medij_id) REFERENCES zaliha(medij_id)
);
-- dodajemo serijski broj od 4 znamenke za svaku kopiju -> npr. 1111, 1112... 
INSERT INTO kopija_sn (zaliha_id, film_id, medij_id, sn)
VALUES (1, 1, 1, 1),
       (1, 1, 1, 2),
       (1, 1, 1, 3),
       (1, 1, 1, 4),
       (1, 1, 1, 5 ),
       (2, 1, 2, 1),
       (2, 1, 2, 2),
       (3, 1, 3, 1),
       (3, 1, 3, 2),
       (3, 1, 3, 3);

-- u tablici posudbe se dodaje kolona kopija_sn za praćenje
-- prilikom unosa nove posudbe bi se pomoću php-a unio i serijski broj posuđene kopije
-- broj dostupnih kopija bi se mogao prikazati pomoću php-a tako da se izvuče broj dostupnih kopija iz tablice zaliha
-- i oduzme od od prebrojanih filmova iz tablice posudba čiji sn počinje sa 111 npr za film Inception na DVD-u

ALTER TABLE posudba ADD COLUMN kopija_sn VARCHAR(5) NOT NULL;

-- za test 
INSERT INTO posudba (datum_posudbe, clan_id, zaliha_id, kopija_sn) VALUES ('2024-06-24', 1, 3,'3131' );
UPDATE posudba SET kopija_sn = '1111' WHERE id = 1;
UPDATE posudba SET kopija_sn = '2121' WHERE id = 4;

SELECT c.ime, m.tip, f.naslov, kopija_sn AS 'Serijski broj kopije'
FROM posudba
JOIN clanovi c ON c.id = posudba.clan_id
JOIN zaliha z ON z.id = posudba.zaliha_id
JOIN mediji m ON m.id = z.medij_id
JOIN filmovi f ON f.id = z.film_id
JOIN kopija_sn ON posudba.kopija_sn = CONCAT(kopija_sn.zaliha_id, kopija_sn.film_id, kopija_sn.medij_id, kopija_sn.sn);

-- +-------------+---------+-----------+----------------------+
-- | ime         | tip     | naslov    | Serijski broj kopije |
-- +-------------+---------+-----------+----------------------+
-- | Ivan Horvat | DVD     | Inception | 1111                 |
-- | Petra Novak | Blu-ray | Inception | 2121                 |
-- | Ivan Horvat | VHS     | Inception | 3131                 |
-- +-------------+---------+-----------+----------------------+
-- 3 rows in set (0,00 sec)