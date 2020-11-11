<!DOCTYPE html>

<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Job 03</title>
	<style>
		* {
			font-size: 20px;
		}

		table,
		th,
		td {
			border: 1px solid black;
		}

		table {
			border-collapse: collapse;
		}

		th {
			text-transform: uppercase;
			padding: 15px 0;
			width: 150px;
		}

		td {
			text-align: center;
			padding: 10px 0;
		}

		.bold {
			font-weight: 900;
		}
	</style>
</head>

<body>
	<?php
	$nom = "Nomi Malone";
	$taille = 1.78;
	$age = 23;
	$celib = true;
	?>

	<table>
		<colgroup>
			<col>
			<col>
			<col>
		</colgroup>
		<thead>
			<tr>
				<th>Type</th>
				<th>Nom</th>
				<th>Valeur</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class="bold"><?php echo (gettype($nom));?></td>
				<td><?php echo ('$nom')?></td>
				<td><?php echo ($nom)?></td>
			</tr>
			<tr>
				<td class="bold"><?php echo (gettype($taille));?></td>
				<td><?php echo ('$taille')?></td>
				<td><?php echo ($taille)?></td>
			</tr>
			<tr>
				<td class="bold"><?php echo (gettype($age));?></td>
				<td><?php echo ('$age')?></td>
				<td><?php echo ($age)?></td>
			</tr>
			<tr>
				<td class="bold"><?php echo (gettype($celib));?></td>
				<td><?php echo ('$celib')?></td>
				<td><?php echo ($celib)?></td>
			</tr>
		</tbody>
	</table>

</body>

</html>