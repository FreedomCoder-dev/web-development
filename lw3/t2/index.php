<?php 
if(empty($_GET['text'])) die('NO - Empty input string.');
$text = $_GET['text'];
preg_match('/^[a-zA-Z][a-zA-Z0-9]+/', $text, $matches);
if(count($matches) < 1) die('NO - Char at start offset \''.$text[0].'\' is not a alphabetic char.');
$match_len = strlen($matches[0]);
$remaining = strlen($text) - $match_len;
if($remaining > 0) die('NO - Char at start offset '.$match_len.' \''.$text[$match_len].'\' is not a alphabetic char/digit.');
echo 'YES';