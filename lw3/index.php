<?php 
if(empty($_GET['text'])) die();
$data = implode(" ", preg_split('/\s+/', trim($_GET['text'])));

echo $data;