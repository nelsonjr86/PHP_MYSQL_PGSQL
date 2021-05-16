<?php
require_once('conexao.php');

$cliente=$_GET['id'];

$sth = $pdo->prepare("SELECT cliente, nome,email,data_nasc,cpf from clientes WHERE cliente = :cliente");
$sth->bindValue(':cliente', $cliente, PDO::PARAM_STR);
$sth->execute();

$reg = $sth->fetch(PDO::FETCH_OBJ);
$nome = $reg->nome;
$email = $reg->email;
$data_nasc = $reg->data_nasc;
$cpf = $reg->cpf;

?>
<h3>Tem certeza de que deseja excluir o registro <?=$cliente?>?</h3>
<div align="center">
Nome: <?=$nome?><br>
E-mail: <?=$email?><br>
Nascimento: <?=$data_nasc?><br>
CPF: <?=$cpf?><br>

<form method="post" action="">
<input name="cliente" type="hidden" value="<?=$cliente?>">
<input name="enviar" type="submit" value="Excluir!">
</form>

</div>

<?php

if(isset($_POST['enviar'])){
$cliente = $_POST['cliente'];
    $sql = "DELETE FROM  $tabela WHERE cliente = :cliente";
    $sth = $pdo->prepare($sql);
    $sth->bindParam(':cliente', $cliente, PDO::PARAM_INT);   
    if( $sth->execute()){
        print "<script>alert('Registro excluído com sucesso!');location='index.php';</script>";
    }else{
        print "Erro ao exclur o registro!<br><br>";
    }
}
?>
