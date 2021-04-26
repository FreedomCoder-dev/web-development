<?php
function mainPage(array $args = ['is_submit' => false]): void
{
    renderTemplate('main.tpl.php', $args);
}
