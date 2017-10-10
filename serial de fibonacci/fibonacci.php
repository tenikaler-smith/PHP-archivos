<?php
	$aux=$_POST['txtnum'];
	$a=1;
	$b=1;
	$c=$a+$b;
		for($i=1;$i<=$aux;$i++)
		{
		echo "<br>".$c;
		$a=$b;
		$b=$c;
		$c=$a+$b;
		}
?>
