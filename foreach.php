<?php

$cliente = (object)array(
    (object)[
        "id" => '1',
        "nome" => 'teste 1',
        "sobre_nome" => 'teste1'
    ],
    (object)[
        "id" => '2',
        "nome" => 'testes2',
        "sobre_nome" => 'teste2'
    ]
);

foreach ($cliente as $key => $value) {
    echo $value->sobre_nome . "<br>";
}
