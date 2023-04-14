<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
</head>
<body>
<?php 
echo '<h1>Information générales : </h1>';
echo '<table border=1> 
     <tr><th>Titre</th><td>'.$this->details['Titre'].'</td><tr>
	 <tr><th>Debut</th><td>'.$this->details['DatDebut'].'</td><tr>
	 <tr><th>Fin</th><td>'.$this->details['DateFin'].'</td><tr>
	 <tr><th>Dscription</th><td>'.$this->details['Description'].'</td><tr>
	 </table>';
if(sizeof($this->details['tasks'])){
	echo '<h1>Liste des tâches : </h1>';
	echo '<table border=1><tr><th>N°</th><th>Tache</th><th>Début</th><th>Fin</th></tr>';
	$i=1;
	foreach($this->details['tasks'] as $task){
		echo '<tr><td>'.$i++.'</td><td>'.$task['Nom'].'</td><td>'.$task['Debut'].'</td><td>'.$task['Fin'].'</td></tr>';
	}
	echo'</table>';
}

?>
</body>
</html>