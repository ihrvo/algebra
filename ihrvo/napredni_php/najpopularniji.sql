SELECT f.naslov, COUNT(f.id) AS 'Broj kopija'
FROM filmovi f
JOIN kopija k ON k.film_id = f.id
JOIN posudba_kopija pk ON pk.kopija_id = k.id
GROUP BY k.film_id
ORDER BY COUNT(f.id) DESC;


SELECT 
    f.naslov,
    f.godina,
    z.ime, 
    COUNT(f.id) as broj_posudbi 
FROM posudba_kopija pk 
    JOIN posudba ps ON pk.posudba_id = ps.id
    JOIN kopija k ON pk.kopija_id = k.id 
    JOIN mediji m ON k.medij_id = m.id
    JOIN filmovi f ON k.film_id = f.id
    JOIN zanrovi z ON f.zanr_id = z.id
WHERE ps.datum_posudbe > '2024-01-01'
GROUP BY f.id
ORDER BY COUNT(f.id) DESC
LIMIT 3; 

