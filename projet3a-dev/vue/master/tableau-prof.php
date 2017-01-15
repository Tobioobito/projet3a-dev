<?php echo '<form method="POST">
	  <tr>
	  <td>'.$resultat['nom_prof']. '</td> 
	  <td>'.$resultat['prenom_prof'].'</td> 
	  <td>'.matprof($resultat['nom_prof']).'</td>
	  <td>'.$resultat['classe_prof'].'</td>
	  
	 
	  
	  <td><input type="submit" class="affiche_modif_prof" name='.$resultat['id_prof'].' value="Modifier"></td>
	  <td><input type="submit" class="bouton_supprime_prof" name='.$resultat['id_prof'].' value="Supprimer"></td>
	  </tr>
	  </form>';
?>