<?php
try
{
  $pdo = new PDO('mysql:host=localhost;dbname=xxxxx', 'zzzzzzz', 'vvvvvv');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
  $error = 'Unable to connect to the database server.';
  include '../includes/error.html.php';
  exit();
}

try
{
  $sql = 'SELECT * from tours';
  $result = $pdo->query($sql);
}
catch (PDOException $e)
{
  $error = 'Error fetching content ' . $e->getMessage();
  include '../includes/error.html.php';
  exit();
}

while ($row = $result->fetch())
{
  $contents[] = array(
      'title' => $row['title'],
      'description' => $row['description'],
      'duration' => $row['duration'],
      'transportation' => $row['transportation'],
      'food' => $row['food'],
      'price' => $row['price'],
      'image' => $row['image']
  );
}

include '../tours/tours.html.php';
