<?php

/*
$firstnumber = 17;
$secondnumber = 7;

if ($firstnumber % $secondnumber === 0) {
    $wynik = "Jest podzielna";
} else {
    $wynik = "Nie jest podzielna";
}
*/

/*
$liczba = 16;

if ($liczba % 2 == 0) {
    echo "Liczba $liczba jest parzysta.";
} else {
    echo "Liczba $liczba jest nieparzysta.";
}

*/


/*
$liczba3 = 20;

if (($liczba3 >= 1 && $liczba3 <= 10) || ($liczba3 >= 17 && $liczba3 <= 21)) {
    echo "Liczba $liczba3 znajduje się w jednym z tych przedziałów.";
} else {
    echo "Liczba $liczba3 jest poza przedziałami.";
}
*/

/*
$liczba4 = 5;

if ($liczba4 > 0) {
    echo "Liczba jest większa od zera";
} elseif ($liczba < 0) {
    echo "Liczba jest mniejsza od zera.";
} else {
    echo "Liczba jest równa zero.";
}
*/

/*
$wiek = 60;

if ($wiek <11) {
    echo "dziecko" ;
} elseif ($wiek <= 17) {
    echo "nastolatek";
} else {
    echo "Dorosły.";
}

*/

$haslo = "1234";
$dlugosc = strlen($haslo);

if (dlugosc < 5) {
    echo "Bardzo słabe";
} elseif ($dlugosc <=8) {
    echo "Słabe"; 
} elseif ($dlugosc <=11) {
    echo "Silne";
} else {
    echo "Bardzo silne";
}

?>

