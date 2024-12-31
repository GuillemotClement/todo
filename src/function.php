<?php

use JetBrains\PhpStorm\NoReturn;

#[NoReturn] function dd(mixed $value): void
{
  echo '<pre>';
  var_dump($value);
  echo '</pre>';
  die();
}

#[NoReturn] function p(mixed $value): void
{
  echo '<pre>';
  var_dump($value);
  echo '</pre>';
}

function basePath(string $path): string
{
  return BASE_PATH."/src/$path.php";
}