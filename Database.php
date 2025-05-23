<?php

class Database
{
  public $connection;
  public function __construct()
  {
    $dsn = 'mysql:host=localhost;port=3306;dbname=guestbook;charset=utf8mb4';
    $this->connection = new PDO($dsn, username:'root', password: '');
  }

  public function query($query)
  {
    $statement = $this->connection->prepare($query);
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
  }
}