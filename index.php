<?
require_once 'calculadora.php';

if($_POST){
    $calc=new Calculadora();
    $calc->setValor1($_POST['valor1']);
    $calc->setValor2($_POST['valor2']);
    $calc->setOperator($_POST['operator']);
    $calc->setResult();
    $result=$calc->getResult();
}

?>


<form action="" method="post" >
    <input name="valor1" type="text">Valor 1 <br />
    <input name="valor2" type="text">Valor 2 <br />
    <br />
    <input name="operator" type="submit" value="+">
        <input name="operator" type="submit" value="-">
            <input name="operator" type="submit" value="/">
                <input name="operator" type="submit" value="*">
</form>

<br />
<?

if(isset($result)){
    echo $result;
}

?>
