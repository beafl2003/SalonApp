<?php

class Usuario {
    public string $id;
    public string $cdUsuario;
    public string $nome;
    public string $senha;
    public int $ativo;
    public int $tipoUser;

    private function __construct
    (

    string $id,
    string $cdUsuario,
    string $nome,
    string $senha,
    int $ativo,
    int $tipoUser
    )
    {
        $this -> id = $id;
        $this -> cdUsuario = $cdUsuario;
        $this ->nome = $nome;
        $this ->senha = $senha;
        $this ->ativo = $ativo ?? UsuarioStatusEnum::ATIVO;
        $this ->tipoUser = $tipoUser ??TipoUsuarioEnum::COMUM;
    }




}