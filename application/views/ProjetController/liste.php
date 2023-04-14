<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	
</head>
<body>
<?php
echo '<h1 class="project-heading">Liste des Projets </h1>';
echo '<table class="project-table">
      <tr><th>N°</th><th>Titre</th><th>Date début</th><th>Date fin</th><th>Description</th><th>Actions</th></tr>';
$i=1;
foreach( $this->projets as $projet){
echo '<tr><td>'.$i++.'</td><td>'.$projet['Titre'].'</td><td>'.$projet['DatDebut'].'</td><td>'.$projet['DateFin'].'</td><td>'.$projet['Description'].'</td></td>
      <td><a class="delete-btn" href="../projetController/delete/'.$projet['Id'].'">Supprimer</td>
	  <td><a class="planifier-btn" href="../TaskController/add/'.$projet['Id'].'">Planifier</td>
	  <td><a class="details-btn" href="../ProjetController/details/'.$projet['Id'].'">Détails</td>
	  <td><a class="gantt-btn" href="../ProjetController/summury/'.$projet['Id'].'">Générer Gantt</td>
	  </tr>';
}
echo '</table>';
?>

</body>
</html>