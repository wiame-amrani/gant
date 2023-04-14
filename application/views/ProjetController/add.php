<html>
	<head>
		
	</head>
	<body>
		<h1>Ajouter un projet</h1>
		<div class="container">
			<form action="../projetController/add" method="post" >
			<label> Titre </label>
			<input type="text" name="titre"><br>
			<label> Date Début </label>
			<input type="date" name="debut"><br>
			<label> Date Fin </label>
			<input type="date" name="fin"><br>
			<label> Description </label>
			<textarea name="description">
			</textarea><br>
			<button type="submit" >Envoyer</button>
			<button type="reset" >Effacer</button>
			</form>
	</div>
		
	</body>

</html>