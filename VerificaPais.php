  <?php
           
        class Pais{
			private $CodISO;
			private $nomePais;
			private $pop;
			private $dimensao;
			public $paisfront = array();

		public function __construct($CodISO,$nomePais,$dimensao){
			$this ->CodISO = $CodISO;
			$this ->nomePais = $nomePais;
			$this ->dimensao = $dimensao; 

		}

		public function GetCodISO() {
			return $this ->CodISO;

		}
		public function GetnomePais() {
			return $this ->nomePais;

		}
		public function Getpop() {
			return $this ->pop;

		}
		public function Getdimensao() {
			return $this ->dimensao;

		}


		public function SetCodISO($CodISO){
			$this ->CodISO = $CodISO; 
		}
		public function SetnomePais($nomePais){
			$this ->nomePais = $nomePais; 
		}
		public function Setpop($pop){
			$this ->pop = $pop; 
		}
		public function Setdimensao($dimensao){
			$this ->dimensao = $dimensao; 
		}

		public function VereficaIgualdade(Pais $pais1, Pais $pais2){
			if ($pais1->CodISO == $pais2->CodISO){
				return false;
			}
			return true;
		}

		public function VerificaFront(Pais $pais1){
			if ($pais1->paisfront != NULL ){
				return false;			
			}
			return true;
		}


		public function DensidadePop($pop,$dimensao){
			$densidade = $pop/ $dimensao;
			return $densidade;
		}

		public function ListarVizinhos(Pais $pais1, Pais $pais2){
                    foreach ($pais1 -> paisfront as $key => $value) {
                        if($pais1->paisfront[$key] == $pais2->paisfront[$key]){
                            echo $pais1->paisfront[$key];
                        }
                    }

		}



	} 

        
 