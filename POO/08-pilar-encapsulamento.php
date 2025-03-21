<?php
    
    //    class Pai{
    //         private $nome = 'Jorge';
    //         protected $sobrenome = 'Silva';
    //         public $humor = 'Feliz';

    //         public function getNome(){
    //             return  $this->nome;
    //         }

    //         public function setNome($value){
    //             $this->nome = $value;
    //         }
    //    }



    //    $pai = new Pai();
    //    echo $pai->getNome();
    //    $pai->humor = 'Triste';
    //    echo '<br>';
    //    echo $pai->humor;


    class Pai{
        private $nome = 'Jorge';
        protected $sobrenome = 'Silva';
        public $humor = 'Feliz';

        public function __getNome($attr){
            return  $this->$attr;
        }

        public function setNome($attr, $value){
            $this->$attr = $value;
        }

        private function exercutarMania(){
            echo "Assobiar";
        }

        protected function responder(){
            echo "Oi";
        }

        public funcion executaracao(){
            $this->exercutarMania();
            echo '<br/>';
            $this-> responder();
        }
   }



   $pai = new Pai();
   echo $pai->executarAcao();
   




?>
