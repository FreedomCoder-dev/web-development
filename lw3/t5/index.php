<?php );
define("DATA_PATH", "../data/email.txt");

$fields_to_bind = [
    'first_name' => 'First Name',
    'last_name' => 'Last Name',
    'email' => 'Email',
    'age' => 'Age'
    ];

$dataset = json_decode(file_get_contents(DATA_PATH), true);

foreach ($fields_to_bind as $field => $name)
    echo '<h3>'.$name.': '.(isset($dataset[$field])?$dataset[$field]:' ').'</h3>';
