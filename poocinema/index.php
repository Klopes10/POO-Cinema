<?php

require "class/acteur.php" ;
require "class/film.php" ;
require "class/realisateur.php";
require "class/role.php";
require "class/genre.php";
require "class/casting.php";


//Class Realisateur
$realisateur1= new realisateur ("Marc","Webb","1974-08-31","♂");


//Class Genre
$superheros  = new genre("Super-héros");
$drame = new genre ("Drame");


// Class Film
$film1 = new film ("Amazing Spiderman 2","30 avril 2014", 142, $superheros, $realisateur1,"Ce n’est un secret pour personne que le combat le plus rude de Spider-Man est celui qu’il mène contre lui-même en tentant de concilier la vie quotidienne de Peter Parker et les lourdes responsabilités de Spider-Man. Mais Peter Parker va se rendre compte qu’il fait face à un conflit de bien plus grande ampleur. Être Spider-Man, quoi de plus grisant ? Peter Parker trouve son bonheur entre sa vie de héros, bondissant d’un gratte-ciel à l’autre, et les doux moments passés aux côté de Gwen. Mais être Spider-Man a un prix : il est le seul à pouvoir protéger ses concitoyens new-yorkais des abominables méchants qui menacent la ville.  Face à Electro, Peter devra affronter un ennemi nettement plus puissant que lui.  Au retour de son vieil ami Harry Osborn, il se rend compte que tous ses ennemis ont un point commun : OsCorp. <br/>");
$film2 = new film("Amazing Spiderman ","4 Juillet 2012", 127,$superheros, $realisateur1,"Peter Parker est un adolescent combattant le crime sous l'identité de Spider-Man après avoir été mordu par une araignée transgénique dans les laboratoires Oscorp. Chassé par les autorités sous les ordres du capitaine George Stacy, le père de sa petite amie Gwen, Peter tente de sauver New York du Docteur Connors, l'ex-associé de son père métamorphosé en créature reptilienne, le Lézard.");
$film3 = new film("Liaisons à New-york"," 8 Décembre 2017", 88, $drame, $realisateur1,"Fraîchement diplômé, Thomas Webb est un étudiant issu d'une riche famille d'éditeurs new-yorkais et rêve de devenir écrivain. Un jour, il découvre que son père entretien une liaison avec une autre femme, qu'il trouve magnifique. Voulant protéger sa mère de nature fragile, il décide de ne rien lui dire. Obsédé par l'aventure extra-conjugale de son père avec cette femme, nommée Johanna et dont la beauté l'éblouit, il décide de faire sa connaissance. Johanna et le jeune homme débutent alors à leur tour une liaison ensemble. Cette rencontre permet à Thomas de passer à l'âge adulte.");

// Class Role

$spiderman = new role("Spiderman");
$gwen = new role ("Gwen Stacy");
$harry = new role("Harry Osborn");



// Class acteur
$acteur1 = new acteur ("Emma","Stone","♀", "1988-11-06", $gwen);
$acteur2= new acteur ("Andrew","Garfield","♂","1983-08-20",$spiderman);
$acteur3= new acteur ("Dane","Dehaan","♂", "1986-02-06", $harry);
$acteur4= new acteur ("Tom","Holland","♂", "1996-06-01", $spiderman);

//Class casting

$casting1 = new casting($acteur1,$gwen,$film1); //ne marche pas


// ******************************* Affichage Film 1************************************************************
echo "<strong> <u> FILM </u></strong><br/>";

echo $film1;


// *******************************Affichage Casting Film 1*****************************************************
echo "<br/><strong> <u> CASTING </u> </strong> <br/>";
echo $acteur1;
echo $acteur2;
echo $acteur3;

// ********************************Affichage Distribution rôle personnages******************************************
echo "<br/><strong> <u> LISTE ACTEURS JOUANT LE ROLE : </u></strong><br/>";
echo "<br/> <u> Acteurs ayant jouer le rôle de Peter Parker/Spiderman : </u> <br/>";
echo $acteur2;
echo $acteur4;

// ******************************Affichage film 2****************************************************
echo "<br/> <strong> <u> FILM </u></strong><br/>";
echo $film2;
//*******************************Affichage Film 3*******************************************
echo "<br/> <strong> <u> FILM </u></strong><br/>";
echo $film3;








?>