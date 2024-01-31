<?php

$age = " 15 ";

//$time = date("H") ;  // сағат қазір қанша екенін айтатын оператор или переменное қазақстан уакыты емес
//echo " $time ";

if ( $age > 06 && $age < 10 ) {
    echo " good morning " ;
}
else if ($age > 11 && $age < 14 ) {
    echo " obet ";
}
else if ($age === 15 ) {   // $age == 15 екеунын расницасы бар $age === 15
    echo " sagat = 15 " ; //  $age == 15 дип данних кандай екенін карамайды тек санды салыстырат
}                             //  $age === 15 дип данних кандай екеніне мән береді int па әлде стракама(string)т.б
else if ($age > 18 && $age < 24 ) {
    echo " good evening " ;
}
else {
    echo " tun " ;
}