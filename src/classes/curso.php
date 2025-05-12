<?php
 
class CursoIn {
    public $titulo;
    public $horas;
    public $curso;
    private $aluno;
 
    // Construtor com validação
    public function __construct($titulo, $horas, $aluno, $dias) {
        if (empty($titulo)) {
            throw new Exception("O campo Titulo é obrigatório.");
        }
        if (!filter_var($horas, FILTER_VALIDATE_INT) || $horas < 0) {
            throw new Exception("A Hora deve ser um número.");
        }
        if (empty($aluno)) {
            throw new Exception("O campo Aluno é obrigatório.");
        }
        
        $this->titulo = $titulo;
        $this->horas = $horas;
        $this->aluno = $aluno;
        $this->dias = $dias;
        
    }
 
    // Getter do CPF (encapsulamento)
    public function getAluno() {
        return $this->aluno;
    }
 
    // Método para exibir os dados
    public function exibirDados() {
        echo "<p>Titulo: <strong>$this->titulo</strong><br>";
        echo "Horas: <strong>$this->horas</strong><br>";
        echo "Aluno: <strong>" . $this->getAluno() . "</strong><br>";
        echo "Dias: <strong>$this->dias</strong></p>";
    }
}

?>