<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Title</h1>

<?php
  echo "Roberts Rāzna";

  $vardi = ["Ronalds", "Samanta", "Daniels"];

  $vardiAsc =
  [
    $persona = ["vārds" => "Rolands", "ePasts" => "rl@gmail.com", "statuss" => "Manager",],
    $persona = ["vārds" => "Samanta", "ePasts" => "sm@gmail.com", "statuss" => "Stradnieks",],
    $persona = ["vārds" => "Ringo", "ePasts" => "ringo@gmail.com", "statuss" => "Boss",],
  ];

  echo "<ul>";
  foreach ($vardi as $i)
    {
         echo "<li>". $i. "</li>";
    };
  echo "</ul>";

  echo "\n";

  echo "<ul>";
  foreach ($vardiAsc as $i)
    {
      echo "<li>". $i["vārds"].", ".$i["ePasts"].", ".$i["statuss"]. "</li>";
    };
  echo "</ul>";

  echo "<a href = http://127.0.0.1:8000>Home - php button</a>";
?>

<p></p>
<a href = "http://127.0.0.1:8000">Home - HTML button</a>
</body>
</html>

