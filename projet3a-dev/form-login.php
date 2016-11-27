<?php

if (isset($_GET["inscription"])){
if($_GET["inscription"]=="ok"){
?>
<div id="inscription_ok">inscription réussie, un mail vous a été envoyé pour confirmer votre inscription</div>

<?php
}
}

include "vue/form-login.php";


?>