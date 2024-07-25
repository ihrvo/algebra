<?php

use Core\Database;
use Core\Validator;

if($_SERVER['REQUEST_METHOD'] !== 'POST'){
    dd('Unsupported method!');
}
    
$rules = [
    'naslov' => ['required', 'string', 'min:2', 'max:100'],
    'godina' => ['required', 'numeric', 'min:4', 'max:4'],
    'zanr_id' => ['required', 'numeric'],
    'cjenik_id' => ['required', 'numeric']
];


$db = Database::get();

$form = new Validator($rules, $_POST);
if ($form->notValid()){
    dd($form->errors());
}

$data = $form->getData();
// dd($data);

$sql = "INSERT INTO filmovi (naslov, godina, zanr_id, cjenik_id) VALUES (:naslov, :godina, :zanr_id, :cjenik_id)";

$db->query($sql, [
    'naslov' => $data['naslov'],
    'godina' => $data['godina'],
    'zanr_id' => $data['zanr_id'],
    'cjenik_id' => $data['cjenik_id']
]);

redirect('movies');
