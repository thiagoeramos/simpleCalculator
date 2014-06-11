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
         * @covers Calculadora::setValor1
         */
        public function testsetValor1()
        {
          
                $this->calc->setValor1(1);
                $this->assertEquals(1, $this->calc->getNumber1());
           
        }
              
          
        /**
         * Testando valor impróprios para calculo
        * @covers Calculadora::setValor1
        */
        public function testValor1Errors()
        {     
                $this->assertEquals(0, $this->calc->getNumber1());
            
                $this->calc->setValor1(-1);
                $this->assertEquals(0, $this->calc->getNumber1());         
                    
                $this->calc->setValor1(0);
                $this->assertEquals(0, $this->calc->getNumber1());           
     
                $this->calc->setValor1(null);
                $this->assertEquals(0, $this->calc->getNumber1());
       
                $this->calc->setValor1(false);
                $this->assertEquals(0, $this->calc->getNumber1()); 
           
                $this->calc->setValor1('');
                $this->assertEquals(0, $this->calc->getNumber1());
         
                $this->calc->setValor1('numero 1');
                $this->assertEquals(1, $this->calc->getNumber1());
         
                $this->calc->setValor1('numero 1');
                $this->assertEquals(1, $this->calc->getNumber1());
         
        }
        
                
        /**
         * Testando Exception
        * @covers Calculadora::setValor1
        */
        public function testValor1Exceptions()
        {     
                //$this->assertEquals(0, $this->calc->getNumber1());
                
                try{
                        $this->calc->setValor1(-1);
                } catch(RuntimeException $e) {                        
                      $this->assertEquals(0, $this->calc->getNumber1());
                      
                            
                        $this->fail();
                      return;
                         
                }
        }
        
        
         
         /**
         * @covers Calculadora::getNumber1
         */
        public function testgetValor1()
        {          
                $this->calc->setValor1(1);
                $this->assertEquals(1, $this->calc->getNumber1());
                
           
        }
        
        
       /**
         * @covers Calculadora::setValor2
         */
        public function testsetValor2()
        {
          
                $this->calc->setValor2(1);
                $this->assertEquals(1, $this->calc->getNumber2());
           
        }
              
          
        /**
         * Testando valor impróprios para calculo
        * @covers Calculadora::setValor2
        */
        public function testValor2Errors()
        {     
                $this->assertEquals(0, $this->calc->getNumber2());
            
                $this->calc->setValor2(-1);
                $this->assertEquals(0, $this->calc->getNumber2());         
                    
                $this->calc->setValor2(0);
                $this->assertEquals(0, $this->calc->getNumber2());           
     
                $this->calc->setValor2(null);
                $this->assertEquals(0, $this->calc->getNumber2());
       
                $this->calc->setValor2(false);
                $this->assertEquals(0, $this->calc->getNumber2()); 
           
                $this->calc->setValor2('');
                $this->assertEquals(0, $this->calc->getNumber2());
         
                $this->calc->setValor2('numero 1');
                $this->assertEquals(1, $this->calc->getNumber2());
      
         
        }
        
                
        /**
         * Testando exception
        * @covers Calculadora::setValor2
        */
        public function testValor2Exceptions()
        {     
                //$this->assertEquals(0, $this->calc->getNumber1());
                
                try{
                        $this->calc->setValor2(-1);
                } catch(RuntimeException $e) {                        
                      $this->assertEquals(0, $this->calc->getNumber2());
                      
                            
                        $this->fail();
                      return;
                         
                }
        }
        
        
         
         /**
         * @covers Calculadora::getNumber2
         */
        public function testgetValor2()
        {          
                $this->calc->setValor2(1);
                $this->assertEquals(1, $this->calc->getNumber2());
                
           
        }
                
     
     
        
        /**
         * @covers Calculadora::getOperator
         */
        public function testgetOperator()
        {
                   
                $this->calc->setOperator('*');                           
                $this->assertEquals('*',$this->calc->getOperator());
     
        }
        
        
        /**
         * @covers Calculadora::setOperator
         */
        public function testsetOperator()
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
         * Testandoexception
        * @covers Calculadora::setOperator
        */
        public function testsetOperatorExceptions()
        {     
                //$this->assertEquals(0, $this->calc->getNumber1());
                
                try{
                        $this->calc->setOperator('^');
                } catch(RuntimeException $e) {                        
                      $this->assertEquals(false, $this->calc->getOperator());                      
                            
                        $this->fail();
                      return;
                         
                }
        }
        
         /**
         * Testando operador impróprios para calculo
        * @covers Calculadora::getOperator
        */
        public function testgetOperatorErrors()
        {     
                $this->assertEquals(false, $this->calc->getOperator());
            
                $this->calc->setOperator('%');
                $this->assertEquals(false, $this->calc->getOperator());    
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