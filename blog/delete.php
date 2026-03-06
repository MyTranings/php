<?php

require 'database.php';

$isDeleteRequest = $_SERVER['REQUEST_METHOD'] === 'POST' && ($_POST['_method'] ?? '' === 'delete');

if ($isDeleteRequest) {
  $id = $_POST['id'] ?? null;
}

$sql = "DELETE FROM posts where id = :id";

$stmt = $pdo->prepare($sql);

$params = [
  'id' => $id
];

$stmt->execute($params);

Header('Location: index.php');
exit;