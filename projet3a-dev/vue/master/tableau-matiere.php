<?php echo '<form method="POST">
	  <tr>
	  <td>'.$resultat['nom_matiere']. '</td> 
	  <td>'.$resultat['prof_matiere'].'</td> 
	  <td>'.$resultat['classe_matiere'].'</td>
	  
	  <td><input type="submit" class="affiche_modif_matiere" name='.$resultat['id_matiere'].' value="Modifier"></td>
	  <td><input type="submit" class="bouton_supprime_matiere" name='.$resultat['id_matiere'].' value="Supprimer"></td>
	  </tr>
	  </form>';
?>