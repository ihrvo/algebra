<?php


require_once '../Database.php';


if($_SERVER['REQUEST_METHOD'] === 'POST'){
    
    $clanIme = $_POST['ime'];
    $clanPrezime = $_POST['prezime'];
    $clanAdresa = $_POST['adresa'];
    $clanTelefon = $_POST['telefon'];
    $clanEmail = $_POST['email'];

    
    $db = new Database();
    $sql = "SELECT clanski_broj
            FROM clanovi
            ORDER BY id DESC
            LIMIT 1";
    $clanskiBroj = $db->query($sql);
    $clanskiBroj = str_replace('CLAN','', $clanskiBroj[0]['clanski_broj']);
    $clanskiBroj = intval($clanskiBroj);
    $clanskiBroj = 'CLAN' . ++$clanskiBroj;
    // dd($clanskiBroj);
    

    // check if name already exsists in db
    $sql = "SELECT email FROM clanovi WHERE email = ?";
    $count = $db->query($sql, [$clanEmail]);

    if(!empty($count)){
        http_response_code(200);
        header('Location:/controllers/members-create.php?message=2');
        // die("Član sa emailom $clanEmail vec postoji u nasoj bazi!");
    }
    
    $sql = "INSERT INTO clanovi (ime, prezime, adresa, telefon, email, clanski_broj) VALUES (:ime, :prezime, :adresa, :telefon, :email, :clanski_broj)";

    try {
        $success = $db->query($sql, ['ime' => $clanIme, 'prezime' => $clanPrezime, 'adresa' => $clanAdresa, 'telefon' => $clanTelefon, 'email' => $clanEmail, 'clanski_broj' => $clanskiBroj]);
    } catch (\Throwable $th) {
        throw $th;
    }

    http_response_code(200);
    header('Location:/controllers/members.php?message=1');
}

require '../views/members-create.view.php';