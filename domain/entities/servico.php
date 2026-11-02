<?php


class Servico
{

    public string $id;
    public string $cdServico;
    public string $descricao;
    public float $preco;

    public function __construct(

        string $id,
        string $cdServico,
        string $descricao,
        float $preco
    ) {

        $this->id = $id;
        $this->cdServico = $cdServico;
        $this->descricao = $descricao;
        $this->preco = $preco;

    }



}