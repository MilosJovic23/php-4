<?php





    $ime = "Milos";
    $visina = 170.0003;
    $godine = 30;

    if($ime == "Milos") {
        echo "tacno";
    }

    if( $godine == 18 ) {
        echo "punoletni ste";
    }
    else {
        echo "imate $godine godina";
    }

    if( $visina < 170 ) {
        echo "niski ste";
    }
    else {
        echo "visoki ste";
    }




    $godinaRodjenja = 1992;

    if ( $godinaRodjenja == 1991 ){
        echo "imate 32";
    }
    else if ($godinaRodjenja == 1999 ){
        echo "imate 26 god";
    }else{
        $trenutneGodine = date("Y") - $godinaRodjenja;
        echo "imate $trenutneGodine-e godine";
    }

    $broj = 15;

    $proverBroja = $broj % 2;

    if ( $proverBroja == 0 ){
        echo "broj je paran";
    }
    else {
        echo "broj je neparan";
    }

    $automoboli = ["Golf 1","Golf 2","Golf 3"];
    $pronadjeniGolfovi = in_array( "Golf 2", $automoboli);

    if (  $pronadjeniGolfovi ){
        echo "Nasli smo najbolji auto";
    } else {
        echo "Nismo nasli najbolji auto";
    }


    $programer = true;

    if ( $programer ){
        echo "vi ste programer";
    } else {
        echo "vi niste programer";
    }


?>