<div class="container">


<link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">


	<table border="1">
		<tr>
			<th>#</th>
			<th>Name</th>
			<th>Day</th>
			<th>Month</th>
			<th>Year</th>
			<th colspan="2">Actie</th>
		</tr>
		
		<?php foreach ($birthdays as $birthday) { ?>
		
	

		<tr>
			<td><?= $birthday['id']; ?></td>
			<td><?= $birthday['person']; ?></td>
			<td><?= $birthday['day']; ?></td>
			<td><?= $birthday['month']; ?></td>
			<td><?= $birthday['year']; ?></td>
			<td><a href="<?= URL ?>birthday/edit/<?= $birthday['id'] ?>">Edit</a></td>
			<td><a href="<?= URL ?>birthday/delete/<?= $birthday['id'] ?>">Delete</a></td>
		</tr>
		<?php } ?>

	</table>
	<a href="<?= URL ?>birthday/create">Toevoegen</a>
	<link rel="stylesheet" type="text/css" href="public/css/">

</div>
