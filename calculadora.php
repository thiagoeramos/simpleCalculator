<?php
/**
* Class para realizar calculos basicos de uma calculadora
*
* PHP version 5
*
* @category     PHP
* @package      Calculadora
* @author       Thiago Ramos <thiagoevangelista.contato@gmail.com>
* @copyright    1997-2005 The PHP Group
* @license      http://www.php.net/license/3_01.txt  PHP License 3.01
* @version      SVN: 1.0.1
* @since        File available since Release 1.0.1
* @deprecated   File deprecated in Release 2.0.0
*/

namespace calculadora;

class Calculadora
{
    // varivaveis globais para o calculo
    protected $number1 = 0;
    protected $number2 = 0;
    protected $operator = false;
    protected $result = false;
    
    /**
    * Seta o primeiro valor do calculo
    * @param $num
    * @author Thiago Ramos
    **/
    public function setValor1($num)
    {
        if (is_numeric($num) && $num > 0) {
            $this->number1 = $num;
        } else {
            throw new RuntimeException('Valor '.$num.' é inválido para calculo');
        }
    }
    
    /**
    * Seta o segundo valor do calculo
    * @param $num
    * @author Thiago Ramos
    **/
    public function setValor2($num)
    {
        if (is_numeric($num) && $num > 0) {
            $this->number2 = $num;
        } else {
            throw new RuntimeException('Valor '.$num.' é inválido para calculo');
        }
    }
    
    /**
    * Pega o primeiro valor para o calculo
    * @param $this->number1
    * @author Thiago Ramos
    * @return num
    **/
    public function getNumber1()
    {
        return $this->number1;
    }
    
    /**
    * Pega o segundo valor para o calculo
    * @param $this->number2
    * @author Thiago Ramos
    * @return num
    **/
    public function getNumber2()
    {
        return $this->number2;
    }
    
    /**
    * Seta o operador para o calculo
    * @param $operator
    * @author Thiago Ramos
    **/
    public function setOperator($operator)
    {
        switch ($operator) {
            case '+':
                $this->operator = '+';
                break;
            case '-':
                $this->operator = '-';
                break;
            case '/':
                $this->operator = '/';
                break;
            case '*':
                $this->operator = '*';
                break;
            default:
                throw new RuntimeException('Operador '.$operator.' é inválido para calculo');
                break;
        }
    }
    
    /**
    * Seta o operador para o calculo
    * @param $this->operator
    * @author Thiago Ramos
    * @return $this->operator
    * @return false
    **/
    public function getOperator()
    {
        if ($this->operator !== false) {
            return $this->operator;
        }
        
        return false;
    }
    
    /**
    * Realiza o calculo
    * @param $this->number1, $this->number2, $this->operator
    * @author Thiago Ramos
    **/
    public function setResult()
    {
        if ($this->number1 > 0 && $this->number2 > 0 && $this->operator !== false) {
            
            switch($this->operator){
                case '+':
                    $this->result = $this->number1 + $this->number2;
                    break;
                case '-':
                    $this->result = $this->number1 - $this->number2;
                    break;
                case '/':
                    $this->result = $this->number1 / $this->number2;
                    break;
                case '*':
                    $this->result = $this->number1 * $this->number2;
                    break;
            }
        }
    }
    
    /**
    * Retorna o valor do calculo
    * @author Thiago Ramos
    * @return $this->result
    **/
    public function getResult()
    {
        return $this->result;
    }
}

//End of file calculadora.php
//Location: ~calculadora.php
