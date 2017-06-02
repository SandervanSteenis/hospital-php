<div class="container">
	<h1>Patiënt Toevoegen</h1>
		<form action="<?= URL ?>patient/createSave" method="post">
			<div>
	          <input type="text" name="name">
	          <label for="name">Naam</label>
			<br>
 			 <input type="text" name="animal">
	          <label for="animal">Dier</label>
				<br>
				<br>
	          <textarea name="status" maxlength="500" data-length="500"></textarea>
				<label for="status">Status</label>
				<br>
				<br>
	            <input type="text" name="client">
	          <label for="client">Client</label>
	        </div>
			<input type="submit" value="Toevoegen">
			<a href="<?= URL ?>patient/index">Annuleer</a>
		</form>
</div>