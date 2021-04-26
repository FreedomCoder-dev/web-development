<?php
function feedbackPage(array $args = ['is_submit' => false]): void
{
    renderTemplate('feedbacks.tpl.php', $args);
}