<!DOCTYPE html>
<head><title>Tugas 8 PHP</title>
</head>
<body>


<?php
$kol=9;
$row=2;
echo "<table>";
for ($n=1; $n<=$kol; $n++) {
   echo "<tr>";
   for ($o=1; $o<=$kol; $o++) {      
      echo "<td>";
      for( $a=10; $a>0; $a--){
    	for($i=1; $i<=$a; $i++){
        echo "_";
    	}for($a1=10; $a1>$a; $a1--){
        echo"x";
    	}for($a2=10; $a2>$a; $a2--){
        echo"x";
    	}echo"<br>";
	}
	for($b=0; $b<=10; $b++){
	    for($j=1; $j<=$b; $j++){
	        echo"_";
	    }for($b1=10; $b1>$b; $b1--){
	        echo"x";
	    }for($b2=10; $b2>$b; $b2--){
	        echo"x";
	    }echo"<br>";
	}
      echo "</td>";      	
   }
   echo "</tr>";
}
echo "</table>";
?>


</body>
</html>