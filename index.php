<?php

spl_autoload_register( function ($classe){
    require $classe . '.class.php';
});
// Liste des différents genres
$g1=new Genre("Science-fiction");
$g2=new Genre("Action");
$g3=new Genre ("Drame");
$g4=new Genre("Comédie");

// Liste des réalisateurs

$r1=new Realisateur("Liman","Doug","M","24/07/1965"); //J bourne 1
$r2=new Realisateur("Greengrass","Paul","M","13/08/1955");//J Bourne 2 3
$r3=new Realisateur("Gilroy","Tony", "M","11/11/1956");//J Bounre 4
$r4=new Realisateur("Van Sant", "Gus","M","24/07/1952");//promised land

//Liste des acteurs

$a1=new Acteur("Damon","Matt","M","08/10/1970"); //J Bourne 1.2.3. Promised LAnd
$a2=new Acteur("Potente","Franka","F","22/07/1974");//J bourne 1.2.
$a3=new Acteur("McDormand","Fances","F","23/06/1957");//promised Land

//Liste des rôles

$O1=new Role("Jason Bourne"); //J Bourne 1.2.3.
$O2=new Role("Marie Helena Kreutz");//J bourne 1.2.
$O3=new Role("Sue Thomason"); //Promised Land
$O4=new Role("Steve Butler"); //promised Land


// Liste des Films

$f1=new Film("La mémoire dans la peau","06/09/2002",119,$r1,$g2);
$f2=new Film("La Mort dans la peau","08/09/2004",108,$r2,$g2);
$f3=new Film("La vengeance dans la peau","06/09/2007",119,$r2,$g2);
$f4=new Film("Jason Bourne : l'Héritage","19/09/2012",119,$r3,$g2);
$f5=new Film("Promised Land","17/04/2013",106,$r4,$g3);

//Castings
    //Jbourne 1
$JB1_1=new Casting($a1,$O1,$f1);
$JB1_2=new Casting($a2,$O2,$f1);
    //JBourne 2
$JB2_1=new Casting($a1,$O1,$f2);
$JB2_2=new Casting($a2,$O2,$f2);
    //JBourne 3
$JB3_1=new Casting($a1,$O1,$f3);
    //Jbourne 4

    //Promised Land
$PL1=new Casting($a1,$O4,$f5);
$PL2=new Casting($a3,$O3,$f5);




echo $g2->getGenre();
echo $g3->getGenre();
echo $r2->getFilmReal();

?>