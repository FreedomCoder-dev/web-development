<?php 
if(empty($_GET['text'])) die();
echo preg_filter('/\s+/', ' ', trim($_GET['text']));