<?
ini_set('display_errors',1);

class Calculadora{
    
    protected $number1=0,$number2=0,$operator=false,$result=false;

    public function setValor1($num){
        
        if(is_numeric($num) && $num>0){
              $this->number1=$num;
        }else{
             throw new RuntimeException('Valor '.$num.' é inválido para calculo');
        }
             
    }

 
 
    public function setValor2($num){
        
        if(is_numeric($num) && $num>0){
              $this->number2=$num;
        }else{
             throw new RuntimeException('Valor '.$num.' é inválido para calculo');
        }
                 
    }

        
    public function getNumber1(){
        return $this->number1;
    }
    
    
    
    public function getNumber2(){
        return $this->number2;
    }
    
    
    
 
    public function setOperator($operator){        
          
            switch($operator){
              case '+':
                  $this->operator='+';    
              break;
              case '-':
                  $this->operator='-';    
              break;
              case '/':
                  $this->operator='/';    
              break;
              case '*':
                  $this->operator='*';    
              break;
              default:
                 throw new RuntimeException('Operador '.$operator.' é inválido para calculo');
              break;            
            }
    }
    
    
    public function getOperator(){
        if($this->operator!==false){
            return $this->operator;
        }
        
        return false;
    }
    
    public function setResult(){
        
        if($this->number1>0 && $this->number2>0 && $this->operator!==false){
            
            
             switch($this->operator){
              case '+':
                  $this->result=$this->number1+$this->number2;
              break;
              case '-':
                  $this->result=$this->number1-$this->number2;
              break;
              case '/':
                  $this->result=$this->number1/$this->number2;
              break;
              case '*':
                  $this->result=$this->number1*$this->number2;
              break;
              
            }
            
            
            
        }
    }
    
    public function getResult(){
        return $this->result;
    }
    
}




?>