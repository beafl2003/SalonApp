<?php

class Agendamento
{

    public int $numAgendamento;
    public DateTime $tAgendamento;

    public DateTime $criadoEm;

    public string $clienteId;

    public string $precoTotal;

    public int $status; // como não temos suporte a enums, estou usando um int para representar o status do agendamento. Os valores possíveis são definidos na classe tipoAgendamentoEnum.


    function __construct(
        int $numAgendamento,
        DateTime $tAgendamento,
        DateTime $criadoEm,
        string $clienteId,
        string $precoTotal = '0.00',
        ?int $status = null
    ) {
        $this->numAgendamento = $numAgendamento;
        $this->tAgendamento = $tAgendamento;
        $this->criadoEm = $criadoEm;
        $this->clienteId = $clienteId;
        $this->precoTotal = $precoTotal;
        $this->status = $status ?? tipoAgendamentoEnum::PENDENTE;

    }// se o status não for fornecido, define como PENDENTE por padrão




}