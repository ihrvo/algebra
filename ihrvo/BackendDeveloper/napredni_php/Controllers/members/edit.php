<?php

use Core\Database;

if (!isset($_GET['id'])) {
    abort();
}

$db = new Database();

$member = $db->fetch('SELECT * FROM clanovi WHERE id = ?', [$_GET['id']]);

if(empty($member)){
    abort();
}

$pageTitle = 'Promjena podataka člana';

require base_path('views/members/edit.view.php');
