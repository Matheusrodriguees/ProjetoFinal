<?php
require_once("CadastroEmp.php");
class cadastroController {
    
    private $cadastro;
    
    public function __construct() {
        $this->cadastro = new Cadastro();
        $this->incluir();
    } 
    private function incluir() {
        $this->cadastro->setIdOrdem($_POST['idOrdem']);  
        $this->cadastro->setNomeCli($_POST['nomeCli']);            
        $this->cadastro->setProduto($_POST['produto']);  
        $this->cadastro->setIdTecnico($_POST['idTecnico']);  
        $this->cadastro->setNomeTec($_POST['nomeTec']);
        $this->cadastro->setServico($_POST['servico']);
        $this->cadastro->setPagamento($_POST['pagamento']);
    
    #Chamada método incluir dentro classe cadastro arquivo cadastroLivro.php
        $result = $this->cadastro->incluir();
        if($result>=1) {
            echo "<script>alert('Registro incluído com sucesso!');document.location='CadastroEmp.php'</script>";
        } else {
            echo "<script>alert('Erro ao gravar registro!, verifique se o cadastro não está duplicado');history.back()</script>";
        }
    }
}
new cadastroController();