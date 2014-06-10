<?

ini_set('display_errors',1);

require_once 'calculadora.php';

class testCalculadora extends PHPUnit_Framework_TestCase{

        protected $calc;
        
        protected function setUp()
        {
            $this->calc = new Calculadora;
        }
     
     
        /**
        * @covers Calculadora::getNumber1
        */
        public function testNumber1IniciacomZero()
        {     
            $this->assertEquals(0, $this->calc->getNumber1());
        }
    
     
        /**
         * @covers Calculadora::setValor1
         */
        public function testsetValor1comNegativo()
        {
                          
         $this->calc->setValor1(-1);
         $this->assertEquals(0, $this->calc->getNumber1());
     
        }
     
        
        /**
         * @covers Calculadora::setValor1
         */
        public function testsetValor1comZero()
        {
                          
         $this->calc->setValor1(0);
         $this->assertEquals(0, $this->calc->getNumber1());
     
        }
        
        /**
         * @covers Calculadora::setValor1
         */
        public function testsetValor1comNull()
        {
     
         $this->calc->setValor1(null);
         $this->assertEquals(0, $this->calc->getNumber1());
         
        }
        
        /**
         * @covers Calculadora::setValor1
         */
        public function testsetValor1comFalse()
        {
        
       
         $this->calc->setValor1(false);
         $this->assertEquals(0, $this->calc->getNumber1());
 
        }
        
        /**
         * @covers Calculadora::setValor1
         */
        public function testsetValor1comVazio()
        {
                 
         $this->calc->setValor1('');
         $this->assertEquals(0, $this->calc->getNumber1());
         
         $this->calc->setValor1('numero 1');
         $this->assertEquals(1, $this->calc->getNumber1());
         
        }
           
        
        /**
         * @covers Calculadora::setValor1
         */
        public function testsetValor1comString()
        {
         
         $this->calc->setValor1('numero 1');
         $this->assertEquals(1, $this->calc->getNumber1());
         
        }     
        
        /**
         * @covers Calculadora::setValor1
         */
        public function testsetValor1InsereNumero()
        {
          
                $this->calc->setValor1(1);
                $this->assertEquals(1, $this->calc->getNumber1());
           
        }
       

        /**
         * @expectedExceptionMessage Calculadora::setValor1
         */
        public function testsetValor1RetornaException()
        {
     
             $this->setExpectedException(
              'RuntimeException', 'Valor 1 inválido para calculo'
            );
        
                $this->calc->setValor1(-1);
        }
                      
       
    
     
        /**
        * @covers Calculadora::getNumber2
        */
        public function testNumber2IniciacomZero()
        {     
            $this->assertEquals(0, $this->calc->getNumber2());
        }
    
     
        /**
         * @covers Calculadora::setValor2
         */
        public function testsetValor2comNegativo()
        {
                          
         $this->calc->setValor2(-1);
         $this->assertEquals(0, $this->calc->getNumber2());
     
        }
     
        
        /**
         * @covers Calculadora::setValor2
         */
        public function testsetValor2comZero()
        {
                          
         $this->calc->setValor2(0);
         $this->assertEquals(0, $this->calc->getNumber2());
     
        }
        
        /**
         * @covers Calculadora::setValor2
         */
        public function testsetValor2comNull()
        {
     
         $this->calc->setValor2(null);
         $this->assertEquals(0, $this->calc->getNumber2());
         
        }
        
        /**
         * @covers Calculadora::setValor2
         */
        public function testsetValor2comFalse()
        {
        
       
         $this->calc->setValor2(false);
         $this->assertEquals(0, $this->calc->getNumber2());
 
        }
        
        /**
         * @covers Calculadora::setValor2
         */
        public function testsetValor2comVazio()
        {
                 
         $this->calc->setValor2('');
         $this->assertEquals(0, $this->calc->getNumber2());
         
         $this->calc->setValor2('numero 1');
         $this->assertEquals(1, $this->calc->getNumber2());
         
        }
           
        
        /**
         * @covers Calculadora::setValor2
         */
        public function testsetValor2comString()
        {
         
         $this->calc->setValor2('numero 1');
         $this->assertEquals(1, $this->calc->getNumber2());
         
        }     
        
        /**
         * @covers Calculadora::setValor2
         */
        public function testsetValor2InsereNumero()
        {
          
                $this->calc->setValor2(1);
                $this->assertEquals(1, $this->calc->getNumber2());
           
        }
       

        /**
         * @expectedExceptionMessage Calculadora::setValor2
         */
        public function testsetValor2RetornaException()
        {
     
             $this->setExpectedException(
              'RuntimeException', 'Valor -1 inválido para calculo'
            );
        
        $this->calc->setValor2(-1);
        }
                      

    
     
        
        /**
         * @covers Calculadora::setOperator
         */
        public function testgetOperator()
        {
            
                $this->calc->setOperator('oo');                           
                $this->assertEquals(false,$this->calc->getOperator());
                
     
        }
        
        
        /**
         * @covers Calculadora::setOperator
         */
        public function testsetOperatorSucesso()
        {
        
                $this->calc->setOperator('+');
                $this->assertEquals('+',$this->calc->getOperator());
         
        
                $this->calc->setOperator('-');
                $this->assertEquals('-',$this->calc->getOperator());
        
                $this->calc->setOperator('/');
                $this->assertEquals('/',$this->calc->getOperator());
         
        
                $this->calc->setOperator('*');
                $this->assertEquals('*',$this->calc->getOperator());
                
                
         
        }
        
        
        /**
         * @expectedExceptionMessage Calculadora::setOperator
         */
        public function testsetOperatorRetornaException()
        {
        
             $this->setExpectedException(
              'RuntimeException', 'Operador = inválido para cálculo'
            );
        
               $this->calc->setOperator('=');
        }
   
   


           
                   
                
        /**
        * @covers Calculadora::setValor1
        * @covers Calculadora::getNumber1
        * @covers Calculadora::setValor2
        * @covers Calculadora::getNumber2
        * @covers Calculadora::setOperator
        * @covers Calculadora::getOperator
        * @covers Calculadora::setResult
        * @covers Calculadora::getResult
        * 
        */
        public function testgetResultSucess(){
          
                $this->calc->setValor1(5);
                
                $this->calc->setValor2(10);
                
                
                
                $this->assertEquals(false,$this->calc->getOperator());
                
                 $this->calc->setOperator('*');                           
                $this->assertEquals('*',$this->calc->getOperator());
               
               
                
                $this->calc->setOperator('*');
                
                
                
                $this->calc->setResult();
                $this->assertEquals(50,$this->calc->getResult());
     }
     
     
       /**
        * @covers Calculadora::setValor1
        * @covers Calculadora::getNumber1
        * @covers Calculadora::setValor2
        * @covers Calculadora::getNumber2
        * @covers Calculadora::setOperator
        * @covers Calculadora::getOperator
        * @covers Calculadora::setResult
        * @covers Calculadora::getResult
        * 
        */
        public function testgetResultMultiOperators(){
          
                $this->calc->setValor1(15);                                
                $this->calc->setValor2(10);
                
                $this->calc->setOperator('+');                           
                $this->calc->setResult();
                $this->assertEquals(25,$this->calc->getResult());
                
                
                $this->calc->setValor1(15);                                
                $this->calc->setValor2(10);
                
                $this->calc->setOperator('-');                           
                $this->calc->setResult();
                $this->assertEquals(5,$this->calc->getResult());
                
                
                $this->calc->setValor1(15);                                
                $this->calc->setValor2(10);
                
                $this->calc->setOperator('/');                           
                $this->calc->setResult();
                $this->assertEquals(1.5,$this->calc->getResult());
                
                
                $this->calc->setValor1(15);                                
                $this->calc->setValor2(10);
                
                $this->calc->setOperator('*');                           
                $this->calc->setResult();
                $this->assertEquals(150,$this->calc->getResult());
                
                
                $this->calc->setValor1(15);                                
                $this->calc->setValor2(-1);
                
                $this->calc->setOperator('*');                           
                $this->calc->setResult();
                $this->assertEquals(0,$this->calc->getResult());
                
                
     }
     
     
     
             

             
             

           
                   
                
        /**
        * @covers Calculadora::setValor1
        * @covers Calculadora::getNumber1
        * @covers Calculadora::setValor2
        * @covers Calculadora::getNumber2
        * @covers Calculadora::setOperator
        * @covers Calculadora::getOperator
        * @covers Calculadora::setResult
        * @covers Calculadora::getResult
        * 
        */
        public function testgetResultErro(){
          
                $this->calc->setValor1(0);
                
                $this->calc->setValor2(0);
                
                $this->calc->setOperator('*');                
                
                
                $this->calc->setResult();
                $this->assertEquals(0,$this->calc->getResult());
     }
     
     
             
}


?>