<?php
//8_exercicio2
/*criar funçao que receba 2 nomes e retorne o maior deles com a frase. O maior nome é: X*/
/*strlen();*/

   function amiguinhos($name1, $name2){
	 if(strlen($name1) > strlen($name2)){
       return 'O maior nome é: ' . $name1;
	 }else{
	   return 'O maior nome é: ' . $name2;
	 }
   }
   
   echo amiguinhos('Kirishima', 'Tamaki');
   echo '<br>';
   echo amiguinhos('Anya', 'Damian');
   echo '<br>';
   echo amiguinhos('Yor', 'Forger');
   echo '<br>';
   echo amiguinhos('Hirisan', 'Miyamura');
   echo '<br>';
   echo amiguinhos('Lhe', 'Amo');
?>