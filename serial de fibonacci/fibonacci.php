<?php
	$aux=$_POST['txtnum'];
	$a=1;
	$b=1;
		for($i=0;$i<=$aux;$i++)
		{
		$a=$b;
		$b=$c;
		$c=$a+$b;

		// resultado
		echo "<table border='2'>";
		echo "<tr>\n";
		echo "<td>";echo "<br>" .$i;echo "</td>\n";
		echo "</tr>\n";

			echo "<tr>\n";
            echo "<td>";echo "<br>" ."$c"."+"."$b"."="."$c\n";
            echo "</td>\n";
            echo "</tr>";
        echo "</table>";
		}
?>
