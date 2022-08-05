<?php
   include '2_trycatch.php';
   
   //$query ="insert into teste (nome,email) values ('Jéssica','jessica.saijo@escola.pr.gov.br')";
   //$query = "update teste SET nome ='Tamaki Amajiki', email ='tamaki.amajiki@UA.school' WHERE id = 2";
   $query = "delete from teste WHERE id = 2";
   $sql = $conexao->prepare($query);
   $resultado = $sql->execute();
   echo 'teste';
?>