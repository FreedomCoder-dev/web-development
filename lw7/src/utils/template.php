<?php
function renderTemplate(string $tplName, array $args = []): void
{
   require __DIR__ . '/../templates/' . $tplName;
}