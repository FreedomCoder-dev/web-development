<?php
function renderTemplate(string $tplName, array $args = []): void
{
   require __DIR__ . '../src/templates/' . $tplName;
}