<?php

$host = 'localhost';
$port = 3306;
$dbName = 'blog';
$username = 'test';
$password = 'demo';

$dsn = "mysql:host=$host;port=$port;dbname=$dbName;charset=utf8mb4";

try {
  // Create a new PDO instance
  $pdo = new PDO($dsn, $username, $password);

  // Set PDO to throw exception on error
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // echo "Connected successfully";

  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
  // If there is an error, catch it and display the message
  echo "Connection failed: " . $e->getMessage();
}
