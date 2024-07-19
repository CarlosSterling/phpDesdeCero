 <?php
$num1 = 1;
var_dump($num1== 1); //diferente (identifica entre el valor en numero y texto)
 $num2 = 10;
 var_dump($num2 === '10'); //identico
 $num3 = 7;
 var_dump($num3 != '7'); //diferente
 $num3 = 21;
 var_dump($num3 <> 21); // Diferente
 $num4 = 19;
 var_dump($num4 !== '19');  // No diferente
 $num5 = 7;
 var_dump($num5 < 4); // Menor que
 $num6 = 7;
 var_dump($num6 > 4); // Mayor que
 $num7 = 2;
 var_dump($num7 <= '2'); // Menor o igual
 $num8 = 3;
 var_dump($num8 >= '7'); // Mayor o igual