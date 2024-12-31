<?php

const BASE_PATH = __DIR__.'/../';
require BASE_PATH."src/function.php";
require BASE_PATH."vendor/autoload.php";

$user = 'root';
$pwd = '';
try{
  $pdo = new PDO('mysql:host=localhost;dbname=todo_task', $user, $pwd);
}catch(PDOException $e){
  dd($e);
}

$faker = Faker\Factory::create();
$list_data = [];
for($i = 0; $i < 10; $i++){
  $fake_data = [];
  $username = $faker->userName();
  $email = $faker->email();
  $password = $faker->password();
  $fake_data = [
    'username' => $username,
    'email' => $email,
    'password' => $password
  ];
  $list_data[] = $fake_data;
}

//dd($list_data);

foreach ($list_data as $data) {
  $sql = "INSERT INTO user (user_username, user_email, user_password)
        VALUES (:username, :email, :password)";
  $vars = [
    'username' => $data['username'],
    'email' => $data['email'],
    'password' => $data['password'],
  ];
  $stmt = $pdo->prepare($sql);
  $stmt->execute($data);
//  $prep = $pdo->prepare($sql);
//  $pdo->execute($vars);
}


?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PomTask</title>
  <link rel="stylesheet" href="./styles/styles.css">
</head>
<body>
  <h1>Todo</h1>
</body>
</html>