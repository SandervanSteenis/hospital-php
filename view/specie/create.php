<div class="container">
	<h1>Species Toevoegen</h1>
		<form action="<?= URL ?>specie/createSave" method="post">
			<div>
	          <input type="text" name="Animal">
	          <label for="Animal">Dier</label>
	        </div>
			<input type="submit" value="Toevoegen">
			<a href="<?= URL ?>specie/index">Annuleer</a>
		</form>
</div>