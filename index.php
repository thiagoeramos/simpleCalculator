<?
// require de classe principal
require_once 'calculadora.php';
$error=false;

// se foi postado algo faz os calculos
if($_POST){
    
    //iniciando a classe
    $calc=new Calculadora();    
    try{
        $calc->setValor1($_POST['valor1']);        
    }  catch (RuntimeException $e) {
        $error.= $e->getMessage();
    }
    
    try{
        $calc->setValor2($_POST['valor2']);        
    }  catch (RuntimeException $e) {
         $error.= '<br />'.$e->getMessage();
    }
    
    //setando operadores
    $calc->setOperator($_POST['operator']);
    $calc->setResult();
    
    // pega resultados
    $result=$calc->getResult();
}

?>

<form action="" method="post" name="calculadora" >
    <input name="valor1" type="text">Valor 1 <br />
    <input name="valor2" type="text">Valor 2 <br />
    <br />
    <input name="operator" type="submit" value="+">
    <input name="operator" type="submit" value="-">
    <input name="operator" type="submit" value="/">
    <input name="operator" type="submit" value="*">
    <?php 
        if($error){
            echo "<p style='color:red'>".utf8_decode($error)."</p>";
        }
    ?>
</form>

<br />
<?

if(isset($result)){
    echo $result;
}

?>
