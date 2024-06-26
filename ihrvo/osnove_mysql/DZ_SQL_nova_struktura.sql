-- provjerite sve upite u datoteci /videoteka/videoteka_select.sql i prilagodite ih novoj strukuturi baze

-- spoji tablice posudba sa filmovi i mediji preko vezne tablice zaliha
-- PROMJENA vezna tablica je sada posudba_kopija
SELECT p.datum_posudbe, p.datum_povrata, c.ime, f.naslov, m.tip
    FROM posudba p
    JOIN posudba_kopija pk ON pk.posudba_id = p.id
    JOIN kopija k ON pk.kopija_id = k.id
    JOIN clanovi c ON p.clan_id = c.id
    JOIN filmovi f ON f.id = k.film_id
    JOIN mediji m ON m.id = k.medij_id;

-- izlistaj posube i film naziv i medij za filmove koji nisu vraceni
-- PROMJENA vezna tablica je sada posudba_kopija
SELECT p.datum_posudbe, p.datum_povrata, c.ime, f.naslov, m.tip
    FROM posudba p
    JOIN posudba_kopija pk ON pk.posudba_id = p.id
    JOIN kopija k ON pk.kopija_id = k.id
    JOIN clanovi c ON p.clan_id = c.id
    JOIN filmovi f ON f.id = k.film_id
    JOIN mediji m ON m.id = k.medij_id
    WHERE p.datum_povrata IS NULL;


-- povezi sve tablice i izlistaj podatke
-- PROMJENA vezna tablica je sada posudba_kopija
SELECT
    p.datum_posudbe,
    p.datum_povrata,
    c.ime AS "Ime Clana",
    f.naslov,
    m.tip AS Medij,
    zanrovi.ime AS Zanr,
    cj.tip_filma,
    ROUND(cj.cijena * m.koeficijent, 2) AS Cijena,
    ROUND(cj.zakasnina_po_danu * m.koeficijent, 2) AS Zakasnina
from
    posudba p
    JOIN posudba_kopija pk ON pk.posudba_id = p.id
    JOIN kopija k ON pk.kopija_id = k.id
    JOIN clanovi c ON p.clan_id = c.id
    JOIN filmovi f ON f.id = k.film_id
    JOIN mediji m ON m.id = k.medij_id
    JOIN zanrovi ON zanrovi.id = f.zanr_id
    JOIN cjenik cj ON cj.id = f.cjenik_id;

-- GROUP BY - ispisite totalnu kolicinu kopija dostupnih po filmu (zbroj svih medija)
-- PROMJENA količina se računa iz tablice kopija
SELECT f.*, COUNT(k.film_id) AS 'Ukupna Kolicina'
	from kopija k
    JOIN filmovi f ON k.film_id = f.id
    GROUP BY k.film_id;

-- HAVING - filtrirajte gornji upit da izlista samo filmove koji imaju vise od 10 kopija
-- PROMJENA
SELECT f.*, COUNT(k.film_id) AS 'Ukupna Kolicina'
	from kopija k
    JOIN filmovi f ON k.film_id = f.id
    GROUP BY k.film_id
    HAVING COUNT(k.film_id) > 10;

-- Subquery (Podupit)
-- Dohvati sve filmove koji imaju kolicinu na BlueRay-u
-- PROMJENA
SELECT f.naslov 
    FROM kopija k
    JOIN filmovi f ON f.id = k.film_id
    JOIN mediji m ON k.medij_id = m.id 
    WHERE m.tip = "Blu-Ray"
    GROUP BY f.naslov;
