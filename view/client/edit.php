<div class="container">
	<h1>Wijzigen</h1>
		<form action="<?= URL ?>client/editSave" method="post">
			<div>
	          <input id="name" type="text" name="firstname" value="<?= $client['client_firstname']; ?>">
	          <label for="firstname">Firstname</label>
	        </div>
	        <div>
	          <input id="name" type="text" name="lastname" value="<?= $client['client_lastname']; ?>">
	          <label for="lastname">Lastname</label>
	        </div>
			<input type="hidden" name="id" value="<?= $client['client_id']; ?>">
            <input type="submit" value="Bijwerken">
            <a href="<?= URL ?>client/delete/<?= $client['client_id'] ?>">Verwijder
                <i class="material-icons right">delete</i>
            </a>
            <a href="<?= URL ?>client/index">Annuleer</a>
		</form>
</div>