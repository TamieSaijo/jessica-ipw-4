<?php
//9_exercicio3
/*crie uma função que receba um valor e informe se é inteiro ou string*/
/*is_int();*/

   function tipovalor($valor){
	   if(is_int($valor)){
		   echo "o valor $valor é um inteiro";
	   }else{
		   echo "o valor $valor não é um inteiro";
	   }
   }
   
   tipovalor(15);
   echo'<br>';
   
   tipovalor('Yor');
   echo'<br>';
   
   tipovalor('69');
?> 