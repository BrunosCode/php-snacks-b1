<?php 
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
        $firstTeamNumber = rand(0, count($teams) - 1);
        $firstTeam = $teams[$firstTeamNumber];
        array_splice($teams, $firstTeamNumber, 1);

        // Generate a random number to pick a team and remove it from the list
        $secondTeamNumber = rand(0, count($teams) - 1);
        $secondTeam = $teams[$secondTeamNumber];
        array_splice($teams, $secondTeamNumber, 1);
        
        // Score for this match
        $gameresult = [
            "firstTeam" => $firstTeam,
            "secondTeam" => $secondTeam,
            "firstTeamScore" => rand(20, 100),
            "secondTeamScore" => rand(20, 100)
        ];

        // ad this match to the list
        array_push($results, $gameresult);
    }

    echo "This day games"; 
    var_dump($results);

?>