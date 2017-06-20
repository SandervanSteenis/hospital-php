<div class="container">
	<h1>Patiënt Wijzigen</h1>
		<form action="<?= URL ?>patient/editSave" method="post">
			<div>
	          <input type="text" name="name" value="<?= $patient['patient_name']; ?>">
	          <label for="name">Naam</label>
			<br>
 			 <input type="text" name="species" value="<?= $patient['species_description']; ?>">
	          <label for="species">Diersoort(id)</label>
				<br>
				<br>
	          <textarea name="status" value="<?= $patient['patient_status']; ?>" maxlength="500" data-length="500"></textarea>
				<label for="status">Status</label>
				<br>
				<br>
	            <input type="text" name="clients" value="<?= $patient['client_firstname']; ?> <?= $patient['client_lastname']; ?>">
	          <label for="clients">Client(id)</label>
	        </div>
	        <input type="hidden" name="id" value="<?= $patient['patient_id']; ?>">
			<input type="submit" value="Bijwerken">
			<a href="<?= URL ?>patient/index">Annuleer</a>
		</form>
</div>