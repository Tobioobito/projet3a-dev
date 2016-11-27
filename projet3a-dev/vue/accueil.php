<?php

session_start();


if(isset($_SESSION['id_master'])){



?>





<div id="identifiant_master"><?php  echo $_SESSION['nom_eta_master'];   ?></div>
<a href="">Gestion des professeurs</a><br />
<a href="">Gestion des élèves</a> <br />
<a href="">Gestion des matières</a> <br />
<a href="">Gestion des parents</a>


<?php

}

else header('Location: form-inscription.php');

?>



