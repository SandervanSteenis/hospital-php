<div class="container">
	<h1>Client Toevoegen</h1>
		<form action="<?= URL ?>client/createSave" method="post">
			<div>
	          <input id="name" type="text" name="firstname">
	          <label for="firstname">Firstname</label>
	        </div>
	        <div>
	          <input id="name" type="text" name="lastname">
	          <label for="lastname">Lastname</label>
	        </div>
			<input type="submit" value="Toevoegen">
			<a href="<?= URL ?>client/index">Annuleer</a>
		</form>
</div>