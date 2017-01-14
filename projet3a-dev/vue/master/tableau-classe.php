<?php echo '<form method="POST">
	  <tr>
	  <td>'.$resultat['nom_classe']. '</td> 
	  <td>'.$resultat['spec_classe'].'</td> 
	  <td>'.$resultat['nbr_eleve_classe'].'</td>
	  <td>'.$resultat['moyenne_classe'].'</td>

	  <td><input type="submit" classe="bouton_liste_eleve_classe.php"></td>
	  <td><a href="" classe="bouton_liste_prof_classe.php">a</a></td>

	  <td><input type="submit" class="affiche_modif_matiere" name='.$resultat['id_classe'].' value="Modifier"></td>
	  <td><input type="submit" class="bouton_supprime_matiere" name='.$resultat['id_classe'].' value="Supprimer"></td>
	  </tr>
	  </form>';
?>