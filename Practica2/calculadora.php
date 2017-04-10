    <?php
      class calculadora{
        protected $a = 0;
        protected $b = 0;

        function __construct($a, $b){
          $this->a = $a;
          $this->b = $b;
        }

        function sumar(){
          return $this->a+$this->b;
        }

        function restar(){
          return $this->a-$this->b;
        }

        function multiplicar(){
          return $this->a*$this->b;
        }

        function dividir(){
          return $this->a/$this->b;
        }
      }
    ?>
