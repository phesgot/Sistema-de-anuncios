 <?php
	
	class CadastroAnun{
	
    private $imagen;
    private $empresa;
    private $cidade;
    private $uf;
    private $bairro;
    private $bairro1;
    private $bairro2;
    private $bairro3;
    private $endereco;
    private $horarioDeFuncionamento;
    private $quemSomos;
    private $informacoesAdicionais;
    private $telefone;
    private $email;
    private $site;
    private $categoria;
    private $categoria1;
    private $categoria2;
    private $categoria3;
    private $url;
    private $idUsuario;
	
    
    function getImagen() {
        return $this->imagen;
    }

    function getEmpresa() {
        return $this->empresa;
    }

    function getCidade() {
        return $this->cidade;
    }

    function getUf() {
        return $this->uf;
    }

    function getBairro() {
        return $this->bairro;
    }

    function getBairro1() {
        return $this->bairro1;
    }

    function getBairro2() {
        return $this->bairro2;
    }

    function getBairro3() {
        return $this->bairro3;
    }

    function getEndereco() {
        return $this->endereco;
    }

    function getHorarioDeFuncionamento() {
        return $this->horarioDeFuncionamento;
    }

    function getQuemSomos() {
        return $this->quemSomos;
    }

    function getInformacoesAdicionais() {
        return $this->informacoesAdicionais;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getEmail() {
        return $this->email;
    }

    function getSite() {
        return $this->site;
    }

    function getCategoria() {
        return $this->categoria;
    }

    function getCategoria1() {
        return $this->categoria1;
    }

    function getCategoria2() {
        return $this->categoria2;
    }

    function getCategoria3() {
        return $this->categoria3;
    }
	
    function getUrl() {
        return $this->url;
    }


    function getIdUsuario() {
        return $this->idUsuario;
    }

    function setImagen($imagen) {
        $this->imagen = $imagen;
    }

    function setEmpresa($empresa) {
        $this->empresa = $empresa;
    }

    function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    function setUf($uf) {
        $this->uf = $uf;
    }

    function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    function setBairro1($bairro1) {
        $this->bairro1 = $bairro1;
    }

    function setBairro2($bairro2) {
        $this->bairro2 = $bairro2;
    }

    function setBairro3($bairro3) {
        $this->bairro3 = $bairro3;
    }

    function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    function setHorarioDeFuncionamento($horarioDeFuncionamento) {
        $this->horarioDeFuncionamento = $horarioDeFuncionamento;
    }

    function setQuemSomos($quemSomos) {
        $this->quemSomos = $quemSomos;
    }

    function setInformacoesAdicionais($informacoesAdicionais) {
        $this->informacoesAdicionais = $informacoesAdicionais;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setSite($site) {
        $this->site = $site;
    }

    function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

    function setCategoria1($categoria1) {
        $this->categoria1 = $categoria1;
    }

    function setCategoria2($categoria2) {
        $this->categoria2 = $categoria2;
    }

    function setCategoria3($categoria3) {
        $this->categoria3 = $categoria3;
    }
	
    function setUrl($url) {
        $this->url = $url;
    }

    function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }


}

?>