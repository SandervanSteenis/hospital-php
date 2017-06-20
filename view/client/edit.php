<div class="container">
	<h1>Client Wijzigen</h1>
		<form action="<?= URL ?>client/editSave" method="post">
			<div>
	          <input type="text" name="firstname" value="<?= $client['client_firstname']; ?>">
	          <label for="firstname">Voornaam</label>
	        </div>
	        <div>
	          <input type="text" name="lastname" value="<?= $client['client_lastname']; ?>">
	          <label for="lastname">Achternaam</label>
	        </div>
			<input type="hidden" name="id" value="<?= $client['client_id']; ?>">
            <input type="submit" value="Bijwerken">
            <a href="<?= URL ?>client/index">Annuleer</a>
		</form>
</div>