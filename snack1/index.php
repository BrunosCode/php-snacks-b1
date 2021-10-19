<?php 
    function getATeam($teamList) {
        $teamNumber = rand(0, count($teamList) - 1);
        $team = $teamList[$teamNumber];
        array_splice($teamList, $teamNumber, 1);
        return $team;
    }

    $teams = [
        "Utah Jazz",
        "Phoenix Suns",
        "Denver Nuggets",  
        "L.A. Clippers",
        "Dallas Mavericks",
        "Portland T. Blazers",
        "L.A. Lakers",
        "Memphis Grizzlies",
        "G.S. Warriors",
        "San Antonio Spurs",
        "N. Orleans Pelicans",
        "Sacramento Kings",
        "Minnesota T'wolves",
        "Oklahoma Thunder",
        "Houston Rockets"];
    $gamesPerDay = 7;
    $results = [];

    for($i = 0; $i < $gamesPerDay; $i++){
        // Generate a random number to pick a team and remove it from the list
        // $firstTeamNumber = rand(0, count($teams) - 1);
        // $firstTeam = $teams[$firstTeamNumber];
        // array_splice($teams, $firstTeamNumber, 1);

        // // Generate a random number to pick a team and remove it from the list
        // $secondTeamNumber = rand(0, count($teams) - 1);
        // $secondTeam = $teams[$secondTeamNumber];
        // array_splice($teams, $secondTeamNumber, 1);
        
        // Score for this match
        $gameresult = [
            "firstTeam" => getATeam($teams),
            "secondTeam" => getATeam($teams),
            "firstTeamScore" => rand(20, 100),
            "secondTeamScore" => rand(20, 100)
        ];

        // ad this match to the list
        array_push($results, $gameresult);
    }

    // echo "This day games"; 
    // var_dump($results);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<body>
    <h1>NBA Western Conference</h1>
    <h2>Results of today</h2>

    <?php for($i = 0; $i < count($results); $i++) { ?>
        <div>
            <h3>Match n°<?php echo $i + 1 ?></h3>
            <p>
                <?php echo $results[$i]["firstTeam"] ?>: 
                <?php echo $results[$i]["firstTeamScore"] ?>
            </p>
            <p>
                <?php echo $results[$i]["secondTeam"] ?>: 
                <?php echo $results[$i]["secondTeamScore"] ?>
            </p>
        </div>
    <?php } ?>
    
</body>
</html>