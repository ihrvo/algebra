<?php

require './../inc/dsn.php';

$sql = 'SELECT
    p.datum_posudbe,
    p.datum_povrata,
    c.ime,
    f.naslov,
    m.tip,
    zanrovi.ime AS zanr,
    cj.tip_filma,
    ROUND(cj.cijena * m.koeficijent, 2) AS cijena,
    ROUND(cj.zakasnina_po_danu * m.koeficijent, 2) AS zakasnina
from
    posudba p
    JOIN posudba_kopija pk ON pk.posudba_id = p.id
    JOIN kopija k ON pk.kopija_id = k.id
    JOIN clanovi c ON p.clan_id = c.id
    JOIN filmovi f ON f.id = k.film_id
    JOIN mediji m ON m.id = k.medij_id
    JOIN zanrovi ON zanrovi.id = f.zanr_id
    JOIN cjenik cj ON cj.id = f.cjenik_id;';
$statement = $pdo->prepare($sql);
$statement->execute();

$posudbe = $statement->fetchAll(PDO::FETCH_ASSOC);

$pageTitle = 'Posudbe';

require './../views/posudbe.view.php';