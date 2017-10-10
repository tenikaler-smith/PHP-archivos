<?php
//Serie de fibonacci
//martin@mygnet.com
//Consiste en una serie de números que se construye una serie desde el numero 1, después el numero 2. y luego se obtiene el siguiente numero por la suma del anterior y su precedente:
//1, 2, 2+1=3, 3+2=5, 5+3=8, 8+4=12, 12+5=17, 17+6=23, 23+7=30, 30+8=38, etc...
function fun_fibonacci($max,$ant=1,$sum=0)
{	echo $sum?", $ant+$sum=".($ant+$sum):($max>=1?'1':'').($max>=2?', 1':'').($max>=3?', 2':'').($max>=4?', 1+2=3':'');
	if($max<=4 && !$sum)return;
	echo $max>0?fun_fibonacci($max-($sum?1:5),$sum?$sum:2,$ant+($sum?$sum:2)):', etc...';
}

//Mandar llamar...
fun_fibonacci(1);

?>