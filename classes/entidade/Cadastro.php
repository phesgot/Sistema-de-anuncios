<?php

class Cadastro {
	
	private $responsavel;
	private $cpf;
    private $empresa;
    private $cnpj;
    private $email;
    private $usuario;
    private $senha1;
    private $senha2;
    private $telefone1;
    private $telefone2;
    private $cep;
    private $uf;
    private $cidade;
    private $bairro;
	private $endereco;
	
		public function getResponsavel(){
		return $this->responsavel;
	}
		public function getCpf(){
		return $this->cpf;
	}
		public function getEmpresa(){
		return $this->empresa;
	}
		public function getCnpj(){
		return $this->cnpj;
	}
		public function getEmail(){
		return $this->email;
	}
		public function getUsuario(){
		return $this->usuario;
	}
		public function getSenha1(){
		return $this->senha1;
	}
		public function getSenha2(){
		return $this->senha2;
	}
		public function getTelefone1(){
		return $this->telefone1;
	}
		public function getTelefone2(){
		return $this->telefone2;
	}
		public function getCep(){
		return $this->cep;
	}
		public function getUf(){
		return $this->uf;
	}
		public function getCidade(){
		return $this->cidade;
	}
		public function getBairro(){
		return $this->bairro;
	}
		public function getEndereco(){
		return $this->endereco;
	}
	
		public function setResponsavel($responsavel){
		$this->responsavel = $responsavel;
	}
		public function setCpf($cpf){
		$this->cpf = $cpf;
	}
		public function setEmpresa($empresa){
		$this->empresa = $empresa;
	}
		public function setCnpj($cnpj){
		$this->cnpj = $cnpj;
	}
		public function setEmail($email){
		$this->email = $email;
	}
		public function setUsuario($usuario){
		$this->usuario =  $usuario;
	}
		public function setSenha1($senha1){
		$this->senha1 = $senha1;
	}
		public function setSenha2($senha2){
		$this->senha2 = $senha2;
	}
		public function setTelefone1($telefone1){
		$this->telefone1 = $telefone1;
	}
		public function setTelefone2($telefone2){
		$this->telefone2 = $telefone2;
	}
		public function setCep($cep){
		$this->cep = $cep;
	}
		public function setUf($uf){
		$this->uf = $uf;
	}
		public function setCidade($cidade){
		$this->cidade = $cidade;
	}
		public function setBairro($bairro){
		$this->bairro = $bairro;
	}
		public function setEndereco($endereco){
		$this->endereco = $endereco;
	}
}

?>