<?php

$not1 = (int)52;
$not2 = (int)75;
$not3 = (int)12;
$not4 = (int)83;
$ortalama = ($not1 + $not2 + $not3 + $not4) / 4;

if ($ortalama < 50) {
    echo ("Ortalama = <span style='color: red'> $ortalama 
          </span> <br> <br> <span style='color: red'> KALDINIZ </span>");
} 

elseif ($ortalama >= 50) {
    echo ("Ortalama = <span style='color: green'> $ortalama 
          </span> <br> <br> <span style='color: green'> GEÇTİNİZ </span>");
} 

else {
    echo ("<span style='color: red'> HATA </span>");
}
