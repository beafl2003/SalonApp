<?php


class Servico {

public string $id;
public string $cdServico;
public string $descricao;
public string $preco;

public function __construct(

    string $id,
    string $cdServico,
    string $descricao,
    string $preco
){

    $this-> id = $id;
    $this-> cdServico = $cdServico;
    $this-> descricao = $descricao;
    $this-> preco = $preco;

}



}