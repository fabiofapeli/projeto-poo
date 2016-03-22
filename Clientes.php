<?php

class Cliente{
	public $clientes;
	
	public function __constructor(){
		$this->clientes=[];
	}
	
	public function create($nome,$email,$cpf,$telefone,$endereco){
		$indice=count($this->clientes)+1;
		$this->clientes[$indice]=array("nome"=>$nome,"email"=>$email,"cpf"=>$cpf,"telefone"=>$telefone,"endereco"=>$endereco);
	}
	
	public function all(){
		return $this->clientes;
	}
	
	public function find($indice){
		return $this->clientes[$indice];
	}
	
	public function orderDec(){
		krsort($this->clientes);
	}

}

$clientes=new Cliente();
$clientes->create("Fábio Pereira","fabio.fapeli@gmail.com","235.391.231-13","(21) 2209-9740","Rua Tal, Centro, São Paulo - SP");
$clientes->create("Tomás Gomes Almeida","TomasGomesAlmeida@teleworm.us","182.688.369-03","(11) 5566-7788","Rua Nova, Jabaquara, São Paulo - SP");
$clientes->create("Lavinia Pinto Almeida","LaviniaPintoAlmeida@armyspy.com","437.123.866-13","(11) 6100-4205","Rua Diogo Couto, 145 - São Paulo-SP");
$clientes->create("Nicole Barbosa Souza","NicoleBarbosaSouza@teleworm.us","611.465.624-54","(61) 9326-4463","Quadra Quadra 012, 1731 - Luziânia-GO");
$clientes->create("Arthur Martins Costa","ArthurMartinsCosta@dayrep.com","031.621.223-76","(55) 8854-5528","Rua Agostinho Lenuzza, 528 - Cruz Alta-RS");

?>