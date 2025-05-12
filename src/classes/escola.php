<?php
 
class EscolaIn {
    public $nome;
    public $endereço;
    public $cidade;
    private $cnpj;
 
    // Construtor com validação
    public function __construct($nome, $endereço, $cnpj, $cidade) {
        if (empty($nome)) {
            throw new Exception("O campo nome é obrigatório.");
        }
        if (empty($endereço)) {
            throw new Exception("O campo endereço é obrigatório.");
        }
        if (empty($cnpj)) {
            throw new Exception("O campo cnpj é obrigatório.");
        }
        if (empty($cidade)) {
            throw new Exception("O campo cidade é obrigatório.");
        }
        
        
        $this->nome = $nome;
        $this->endereço = $endereço;
        $this->cnpj = $cnpj;
        $this->cidade = $cidade;
        
    }
 
    // Getter do CNPJ (encapsulamento)
    public function getCnpj() {
        return $this->cnpj;
    }
 
    // Método para exibir os dados
    public function exibirDados() {
        echo "<p>Nome: <strong>$this->nome</strong><br>";
        echo "Endereço: <strong>$this->endereço</strong><br>";
        echo "Cnpj: <strong>" . $this->getCnpj() . "</strong><br>";
        echo "Cidade: <strong>$this->cidade</strong></p>";
    }
}

?>