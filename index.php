<?php 

require 'views/index.view.php';
require 'Database.php';

$db = new Database();
$entry = $db->query('SELECT * FROM entry');

foreach ($entry as $row){
  echo "<li>".$row['name']."</li>";
  echo "<li>".$row['message']."</li>";
}