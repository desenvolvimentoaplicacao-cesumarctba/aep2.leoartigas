<?php

class pessoa {


		public $nome;	
		public $data_nasc;
		public $cpf;
		public $altura;
		public $peso;



	public function __construct($nome,$data_nasc,$cpf,$altura,$peso){

				$this->nome = $nome;
				$this->data_nasc = $data_nasc;
				$this->cpf = $cpf;
				$this->altura = $altura;
				$this->peso = $peso;
 		}

	public function calculaIMC(){
				
				return ($peso/($altura*$altura));

		}
	public function calculaidade(){

                return 2019 - $this->data_nasc;
		}

	public function validacpf($cpf){

		 // Extrai somente os números
	    $cpf = preg_replace( '/[^0-9]/is', '', $cpf );
	     
	    // Verifica se foi informado todos os digitos corretamente
	    if (strlen($cpf) != 11) {
	        return false;
	    }
	    // Faz o calculo para validar o CPF
	    for ($t = 9; $t < 11; $t++) {
	        for ($d = 0, $c = 0; $c < $t; $c++) {
	            $d += $cpf{$c} * (($t + 1) - $c);
	        }
	        $d = ((10 * $d) % 11) % 10;
	        if ($cpf{$c} != $d) {
	            return false;
	        }
	    }
    return true;
}




}
