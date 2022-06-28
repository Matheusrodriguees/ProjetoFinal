<?php
#passo 1
require_once("init.php");

class Banco {
    
    protected $mysqli;

    public function __construct() 
    {
        echo "Conexão efetuada com sucesso!";
        $this->conexao();
    }
    

    private function conexao()
    {
        $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO, BD_SENHA, BD_BANCO);
    }
    
    public function setEmpr($idOrdem,$nomeCli, $produto,$idTecnico,$nomeTec,$servico,$pagamento)
    {
        $stmt=$this->mysqli->prepare("INSERT INTO Empr(`idOrdem`,`nomeCli`,`produto`,`idTecnico`,`nomeTec`,`servico`,`pagamento`) VALUES (?,?,?,?,?,?,?)");
        
        $stmt->bind_param("sssssss",$idOrdem,$nomeCli, $produto,$idTecnico,$nomeTec,$servico,$pagamento);
            if ($stmt->execute() == TRUE) {
                return true;
            } else {
                return false;
            }
        }
}
$banco =mysqli_connect(BD_SERVIDOR, BD_USUARIO, BD_SENHA, BD_BANCO)

?>