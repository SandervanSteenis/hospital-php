<div class="container">
	<h1>Specie Toevoegen</h1>
		<form action="<?= URL ?>specie/createSave" method="post">
			<div>
	          <input type="text" name="description">
	          <label for="description">Dier</label>
	        </div>
			<input type="submit" value="Toevoegen">
			<a href="<?= URL ?>specie/index">Annuleer</a>
		</form>
</div>