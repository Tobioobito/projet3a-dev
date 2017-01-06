<?php echo '<form method="POST">
	  <tr>
	  <td>'.$resultat['nom_classe']. '</td> 
	  <td>'.$resultat['spec_classe'].'</td> 
	  <td>'.$resultat['nbr_eleve_classe'].'</td>
	  <td>'.$resultat['moyenne_classe'].'</td>

	  <td><a href="liste_eleve_classe.php"></td>
	  <td><a href="liste_prof_classe.php"></td>

	  <td><input type="submit" class="affiche_modif_matiere" name='.$resultat['id_matiere'].' value="Modifier"></td>
	  <td><input type="submit" class="bouton_supprime_matiere" name='.$resultat['id_matiere'].' value="Supprimer"></td>
	  </tr>
	  </form>';
?>