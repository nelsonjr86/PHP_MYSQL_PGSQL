<?php require_once('header.php'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h3>Tem certeza de que deseja excluir o registro abaixo?</h3>
            <br>

<?php
require_once('connection.php');

$cliente=$_GET['cliente'];

$sth = $pdo->prepare("SELECT cliente,credito_liberado, nome,email,data_nasc,cpf from clientes WHERE cliente = :cliente");
$sth->bindValue(':cliente', $cliente, PDO::PARAM_STR);
$sth->execute();

$reg = $sth->fetch(PDO::FETCH_OBJ);

    $sql = "SELECT * FROM $tabela";
    $sth = $pdo->query($sql);
    $numfields = $sth->columnCount();
        
    for($x=0;$x<$numfields;$x++){
        $meta = $sth->getColumnMeta($x);
        $field = $meta['name'];
?>

            <b><?=ucfirst($field)?>:</b> <?=$reg->$field?><br>
<?php
    }
?>
            <br>
            <form method="post" action="">
            <input name="cliente" type="hidden" value="<?=$cliente?>">
            <input name="enviar" class="btn btn-danger" type="submit" value="Excluir!">&nbsp;&nbsp;&nbsp;
            <input name="enviar" class="btn btn-warning" type="button" onclick="location='index.php'" value="Voltar">
            </form>
        </div>
    <div>
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
require_once('footer.php');
?>
