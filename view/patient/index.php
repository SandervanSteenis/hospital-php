 <h1>Hospital</h1>

 <h2>Patiënts</h2>
 
<div class="container">
	<table border="1">
		<tr>
			<th>Name</th>
			<th>Species</th>
			<th>Status</th>
			<th>Client</th>
			<th colspan="2">Action</th>
		</tr>
		
		<?php foreach ($patients as $patient) { ?>
		<tr>
			<td><?= $patient['patient_name']; ?></td>
			<td><?= $patient['patient_id']; ?></td>
			<td><?= $patient['patient_status']; ?></td>
			<td><?= $patient['client_id']; ?></td>
			<td><a href="<?= URL ?>patient/edit/<?= $patient['patient_id'] ?>">Edit</a></td>
			<td><a href="<?= URL ?>patient/delete/<?= $patient['patient_id'] ?>">Delete</a></td>
		</tr>
		<?php } ?>

	</table>
	<br>
	<a href="<?= URL ?>patient/create">Toevoegen</a>
</div>