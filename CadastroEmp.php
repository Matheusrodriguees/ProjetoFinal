<?php 

require_once("banco.php");

class Cadastro extends Banco {
    private $idOrdem;    
    private $nomeCli;   
    private $produto;  
    private $idTecnico;
    private $nomeTec;    
    private $servico;
    private $pagamento;

    /*A função set significa...setar,configurar,colocar,atribuir valor em uma variável do objeto.*/
    
    # Ou seja,set escreve o valor na variável 

    public function setIdOrdem($string) {
        $this->idOrdem = $string;
    } 
    public function setNomeCli($string) {
        $this->nomeCli = $string;
    }
    public function setProduto($string) {
        $this->produto = $string;
    }  
    public function setIdTecnico($string) {
        $this->idTecnico = $string;
    }
    public function setNomeTec($string) {
        $this->nomeTec = $string;
    }    
    public function setServico($string) {
        $this->servico = $string;
    }
    public function setPagamento($string) {
        $this->pagamento = $string;
    }

    
    public function getIdOrdem() {
        return $this->idOrdem; 
    } 
    public function getNomeCli() {
        return $this->nomeCli;
    }    
    public function getProduto() {
        return $this->produto; 
    }     
    public function getIdTecnico() {
        return $this->idTecnico;
    }    
    public function getNomeTec() {
        return $this->nomeTec;
    }    
    public function getServico() {
        return $this->servico; 
    }    
    public function getPagamento() {
        return $this->pagamento; 
    }  


    public function incluir() {
        return $this->setEmpr($this->getIdOrdem(),$this->getnomeCli(),$this->getProduto(),$this->getIdTecnico(),$this->getnomeTec(),$this->getServico(),$this->getPagamento());
    }
} 
?>
    <?php include("index.php");?>