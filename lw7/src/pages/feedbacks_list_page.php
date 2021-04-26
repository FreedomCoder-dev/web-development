<?php
function fetchFeedback(): void
{
    $email = filter_var(strtolower(getPostParameter('email')), FILTER_VALIDATE_EMAIL) ? strtolower(getPostParameter('email')) : '';
    $filepath = __DIR__ . '/../../web/messages/' . strtolower($email) . '.txt';
    if(file_exists($filepath)){
      $data = json_decode(file_get_contents($filepath), true);
      feedbackPage([
        'data' => $data,
        'email' => $email,
        'success' => true
      ]);
    } else feedbackPage([
        'email' => $email,
        'success' => false
      ]);
}

function feedbackPage(array $args = []): void
{
    renderTemplate('feedbacks.tpl.php', $args);
}