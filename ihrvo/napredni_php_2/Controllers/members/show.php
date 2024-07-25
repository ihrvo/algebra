<?php

use Core\Database;

if (isset($_GET['id'])) {

    $db = new Database();

    $sql = 'SELECT * from clanovi WHERE id = :id';
    
    try {
        $member = $db->fetch($sql, [
            'id' => $_GET['id']
        ]);

        if (empty($member)) {
            abort();
        }
    } catch (\PDOException $exception) {
        throw $exception;
    }
    // dd($member);

    require base_path('views/members/show.view.php');
} else {
    abort();
}
