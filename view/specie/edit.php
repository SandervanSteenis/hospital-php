<div class="container">
	<h1>Specie Wijzigen</h1>
		<form action="<?= URL ?>specie/editSave" method="post">
			<div>
	          <input id="name" type="text" name="Animal" value="<?= $specie['species_description']; ?>">
	          <label for="Animal">Dier</label>
	        </div>
			<input type="hidden" name="id" value="<?= $specie['species_id']; ?>">
            <input type="submit" value="Bijwerken">
            <a href="<?= URL ?>specie/index">Annuleer</a>
		</form>
</div>