<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Basket Games</title>
</head>
<body>

<div class="container text-center py-4 ">
  <h1>
    NBA Results
  </h1>
<?php

$basketGames = [
  ["teamHome" => "Hornets", "teamAway" => "Celtics", "pointsHome" => 111, "pointsAway" => 104],
  ["teamHome" => "Wizards", "teamAway" => "Bucks", "pointsHome" => 129, "pointsAway" => 142],
  ["teamHome" => "Warriors", "teamAway" => "Rockets", "pointsHome" => 120, "pointsAway" => 99],
  ["teamHome" => "Bulls", "teamAway" => "Heat", "pointsHome" => 105, "pointsAway" => 98],
  ["teamHome" => "Spurs", "teamAway" => "Clippers", "pointsHome" => 125, "pointsAway" => 83],
  ["teamHome" => "Pistons", "teamAway" => "Nuggets", "pointsHome" => 113, "pointsAway" => 139],
  ["teamHome" => "Pelicans", "teamAway" => "Kings", "pointsHome" => 119, "pointsAway" => 100],
  ["teamHome" => "Timberwolves", "teamAway" => "Knicks", "pointsHome" => 99, "pointsAway" => 104],    
];

foreach ($basketGames as $game) {
  echo $game["teamHome"] . " - " . $game["teamAway"] . " | " . $game["pointsHome"] . "-" . $game["pointsAway"] . "<br>";
}

?>
  
</div>

</body>
</html>