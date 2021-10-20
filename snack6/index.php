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

function color($string){
	if ($string === "teachers") {
		return "gray";
	} else {
		return "green";
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		.box {
			display: inline-block;
			width: 30%;
			text-align: center;
			padding: 1rem;
		}
		.gray {
			background-color: gray;
		}
		.green {
			background-color: green;
		}
	</style>
    <title>Snack 6</title>
</head>
<body>
    <h1>Posts</h1>
    <?php foreach($db as $role => $members) { ?>
		<div class="box <?php echo color($role) ?>"> 
			<?php foreach ($members as $member) { ?>

				<h3><?= $member["name"] ?> <?= $member["lastname"] ?></h3>
			<?php } ?>
		</div>
    <?php } ?>
</body>
</html>