<?php
function getPostParameter(string $request): ?string
{
    return isset($_POST[$request]) ? $_POST[$request] : null;
}

function getRequestMethod(): ?string
{
    return $_SERVER["REQUEST_METHOD"];
}