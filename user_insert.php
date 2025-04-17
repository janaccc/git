<?php

include_once "database.php";

$email = $_POST["email"];
$password = $_POST["pass"];

$sql = "INSERT INTO users (email, pass) VALUES ('?','?')";

$stmt = $pdo->prepare($sql);
$stmt->execute([$email, $password]);

header("Location:users.php");