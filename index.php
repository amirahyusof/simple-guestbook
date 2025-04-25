<?php 

require 'Database.php';

$db = new Database();

if($_SERVER['REQUEST_METHOD'] === 'POST'){
  $name = htmlspecialchars(trim($_POST['name']));
  $message = htmlspecialchars(trim($_POST['message']));

  if($name && $message){
    $statement = $db->connection->prepare("INSERT INTO entry (name, message) VALUES (:name, :message)");
    $statement->bindParam(':name', $name);
    $statement->bindParam(':message', $message);
    $statement->execute();


    header('Location: /index.php');
    exit;
  }
}

$entry = $db->query('SELECT * FROM entry');

require 'views/index.view.php';