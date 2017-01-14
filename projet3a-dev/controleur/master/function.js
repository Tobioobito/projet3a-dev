function ajout_prof_matiere(prof, matiere){

$.post("modele/master/ajout-prof-matiere.php", { 

                            nom_prof : prof,
							nom_matiere : matiere
						} ,
    function(data){


	});
}

