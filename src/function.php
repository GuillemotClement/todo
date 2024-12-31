<?php

use JetBrains\PhpStorm\NoReturn;

#[NoReturn] function dd(mixed $value): void
{
  echo '<pre>';
  var_dump($value);
  echo '</pre>';
  die();
}

function basePath(string $path): string
{
  return BASE_PATH."/src/$path.php";
}