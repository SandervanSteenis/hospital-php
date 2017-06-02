<h2>Patiënts</h2>
 
<div class="container">
	<table border="1">
		<tr>
			<th>Naam</th>
			<th>Dier</th>
			<th>Status</th>
			<th>Client</th>
			<th colspan="2">Action</th>
		</tr>
		
		<?php foreach ($patients as $patient) { ?>
		<tr>
			<td><?= $patient['patient_name']; ?></td>
			<td><?= $species[$patient['species_id'] - 1]['species_description']; ?></td>
			<td><?= $patient['patient_status']; ?></td>
			<td><?= $clients[$patient['client_id'] - 1]['client_firstname']; ?></td>
			<td><a href="<?= URL ?>patient/edit/<?= $patient['patient_id'] ?>">Edit</a></td>
			<td><a href="<?= URL ?>patient/delete/<?= $patient['patient_id'] ?>">Delete</a></td>
		</tr>
		<?php } ?>

	</table>
	<br>
	<a href="<?= URL ?>patient/create">Toevoegen</a>
</div>