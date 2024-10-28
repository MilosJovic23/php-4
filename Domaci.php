
<?php

    $ime = "AdminisTRator";
    $lozinka = "mojaSifraJeSigurna";



    if( strtolower($ime) == "administrator" && $lozinka == "mojaSifraJeSigurna"){
        echo "Dobro dosao administartore"."<br>";
    }


    $trenutnoVreme = date("H");


    if ( $trenutnoVreme >= 5 && $trenutnoVreme < 12 ) {
        echo "Jutro";
    }
    else if ( $trenutnoVreme >= 12 && $trenutnoVreme <= 20 ){
        echo "Podne";
    }
    else {
        echo "Noc";
    }


?>