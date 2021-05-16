<div align="center">
<form method="post" action="add.php">
Nome<input type="text" name="nome"><br>
E-mail<input type="text" name="email"><br>
Nascimento<input type="text" name="data_nasc"><br>
CPF<input type="text" name="cpf"><br>
<input name="enviar" type="submit" value="Cadastrar">
</form>
</div>

<?php

require_once('conexao.php');

if(isset($_POST['enviar'])){
//$cliente = $_POST['cliente'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$data_nasc = $_POST['data_nasc'];
$cpf = $_POST['cpf'];

   try{
       $stmte = $pdo->prepare("INSERT INTO clientes(credito_liberado,nome,email,data_nasc,cpf) VALUES (
           'n',?, ?, ?, ?)");
       $stmte->bindParam(1, $nome , PDO::PARAM_STR);
       $stmte->bindParam(2, $email , PDO::PARAM_STR);
       $stmte->bindParam(3, $data_nasc , PDO::PARAM_STR);
       $stmte->bindParam(4, $cpf , PDO::PARAM_STR);
       $executa = $stmte->execute();
 
       if($executa){
           echo 'Dados inseridos com sucesso';
		   header('location: index.php');
       }
       else{
           echo 'Erro ao inserir os dados';
       }
   }
   catch(PDOException $e){
      echo $e->getMessage();
   }
}
?>

