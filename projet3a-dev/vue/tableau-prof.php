<?php echo '<form method="POST">
	  <tr>
	  <td>'.$resultat['nom_prof']. '</td> 
	  <td>'.$resultat['prenom_prof'].'</td> 
	  <td>'.$resultat['matiere_prof1'].', '.$resultat['matiere_prof2'].', '.$resultat['matiere_prof3'].'</td>
	  <td>'.$resultat['classe_prof1'].', '.$resultat['classe_prof2'].', '.$resultat['classe_prof3'].', '.$resultat['classe_prof4'].', '.$resultat['classe_prof5'].', '.$resultat['classe_prof6'].'</td>
	  
	 
	  
	  <td><input type="submit" class="affiche_modif_prof" name='.$resultat['id_prof'].' value="Modifier"></td>
	  <td><input type="submit" class="bouton_supprime_prof" name='.$resultat['id_prof'].' value="Supprimer"></td>
	  </tr>
	  </form>';
?>