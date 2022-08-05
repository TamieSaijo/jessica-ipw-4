<?php
//7_exercio1.php
/*criar funçao potencia (base, expoente) que retorne o valor via return, com a frase: A potencia da base X elevado ao expoente Y é: Z*/
/*pow();*/

   function potencia($base, $expoente){
	   return ' a potencia da base ' . $base . ' elevado ao expoente ' . $expoente . ' é: ' . pow($base, $expoente);
   }
   echo potencia (4, 6);
   echo '<br>';
   echo potencia (2, 4);
   echo '<br>';
   echo potencia (3, 8);
   
?>