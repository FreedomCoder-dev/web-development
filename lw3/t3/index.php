<?php 
if(empty($_GET['text'])) die('-1; - Empty input string.');
$text = $_GET['text'];
if(!preg_match('/^[a-zA-Z0-9]+/', $text)) die('-1; Password can contain only alphabetical letters and numbers.');
$length = strlen($text);
$charsUsed = array();
$charsUsedAgain = array();
$uppercase = 0; $lowercase = 0; $digits = 0; $repeated = 0;
for ($i=0; $i<$length; $i++) {
    $char = $text[$i];
    if(in_array($char, $charsUsedAgain)) {
    	$repeated++;
    }
    elseif(in_array($char, $charsUsed)) {
       $repeated += 2;
       $charsUsedAgain[] = $char;
    } else $charsUsed[] = $char;
    if(('0' <= $char) && ('9' >= $char)) $digits++;
    elseif(ctype_upper($char)) $uppercase++;
    elseif(ctype_lower($char)) $lowercase++;
}
$strength = 0;
$strength += 4 * $length;
$strength += 4 * $digits;
$strength += 2 * ($length - $uppercase);
$strength += 2 * ($length - $lowercase);
if($digits < 1) $strength -= $length;
if($digits == $length) $strength -= $length;
$strength -= $repeated;
//echo('R '.$repeated.' D '.$digits.' U '.$uppercase.' L '.$lowercase.' Strength '.$strength);
echo('Strength '.$strength);