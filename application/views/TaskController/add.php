<html>
	<head>
	
	</head>
	<body>
		<center><h1>Ajouter une Tache</h1></center>
		<form action="TaskController/add" method="post" >
		<input type="hidden" name="projetID" value=" <?php echo $this->projetId; ?>">
		<label> Nom</label>
		<input type="text" name="nom"><br>
		<label> Date Début </label>
		<input type="text" name="debut"><br>
		<label> Date Fin </label>
		<input type="text" name="fin"><br>
		
		<button type="submit" >Envoyer</button>
		<button type="reset" >Effacer</button>
		</form>
	</body>

</html>