<?php

class addGaleria {
	
	private $galeria;
	private $idUsuariofk;
	private $idAnunciofk;

		public function getGaleria(){
		return $this->galeria;
	}
	
	public function setGaleria($galeria){
		$this->galeria = $galeria;
	}
	
	
	
		public function getIdUsuariofk(){
		return $this->idUsuariofk;
	}
	
	public function setIdUsuariofk($idUsuariofk){
		$this->idUsuariofk = $idUsuariofk;
	}
	
	
	
		public function getIdAnunciofk(){
		return $this->idAnunciofk;
	}
	
	public function setIdAnunciofk($idAnunciofk){
		$this->idAnunciofk = $idAnunciofk;
	}
}

?>