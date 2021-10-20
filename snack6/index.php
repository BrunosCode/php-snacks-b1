<?php 
$db = [
	'teachers' => [
		[
			'name' => 'Michele',
			'lastname' => 'Papagni'
		],
		[
			'name' => 'Fabio',
			'lastname' => 'Forghieri'
		]
	],
	'pm' => [
		[
			'name' => 'Roberto',
			'lastname' => 'Marazzini'
		],
		[
			'name' => 'Federico',
			'lastname' => 'Pellegrini'
		]
	]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 6</title>
</head>
<body>
    <h1>Posts</h1>
    <?php foreach($db as $role => $members) { ?>
        <?php foreach ($members as $member) { ?>
            <div style="background-color:<?php if($role == "teachers") {
				echo "gray;"; 
				} else { 
				echo "green;";
				} ?>">
				<h3><?= $member["name"] ?> <?= $member["name"] ?></h3>
            </div>
        <?php } ?>
    <?php } ?>
</body>
</html>