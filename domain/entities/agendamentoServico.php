<?php
class AgendamentoServico
{
    public int $numAgendamento;
    public string $cdServico;

    public string $descricao;

    public Servico $servico;
 
    public float $preco;

    public function __construct(int $numAgendamento, string $cdServico, string $descricao, Servico $servico, float $preco)
    {
        $this->numAgendamento = $numAgendamento;
        $this->cdServico = $cdServico;
        $this->descricao = $descricao;
        $this->servico = $servico;
        $this->preco = $preco;
    }
}