SELECT s2.ime AS 'Ime', s4.naslov AS 'Film' ,s6.tip AS 'Medij', s5.tip_filma AS 'Tip filma', s1.datum_posudbe AS 'Datum posudbe', s1.datum_povrata AS 'Datum povrata', 
CONCAT(DATEDIFF(s1.datum_povrata, s1.datum_posudbe)-1) AS 'Kašnjenje (dana)', 
CONCAT((DATEDIFF(s1.datum_povrata, s1.datum_posudbe)-1) * s5.zakasnina_po_danu * s6.koeficijent + s5.cijena) AS 'Cijena'
FROM posudba as s1 
JOIN clanovi s2 ON s1.clan_id = s2.id 
JOIN zaliha s3 ON s1.zaliha_id = s3.id
JOIN filmovi s4 ON s4.id = s3.film_id
JOIN cjenik s5 ON s5.id = s4.cjenik_id
JOIN mediji s6 ON s6.id = s3.medij_id
WHERE DATEDIFF(s1.datum_povrata, s1.datum_posudbe) > 1;