<?php
$acao = filter_input(INPUT_POST, 'acao', FILTER_UNSAFE_RAW);
switch ($acao):
    case 'insert':
        echo "estamos salvando seus dados";
        break;
    case 'update':
        echo "estamos atualizando seus dados";
        break;
    case 'delete':
        echo "Seus dados serão removidos!";
        break;

    default:
        $clientes = [
            [
                'id' => 0,
                'nome' => 'WILL'
            ],
            [
                'id' => 0,
                'nome' => 'tESTE'
            ]
        ];
        var_dump($clientes);
        break;
endswitch;
/*
switch ($acao){
    case 'insert':
        echo "estamos salvando seus dados";
        break;
    case 'update':
        echo "estamos atualizando seus dados";
        break;
    case 'delete':
        echo "Seus dados serão removidos!";
        break;

    default:
        $clientes = [
            [
                'id' => 0,
                'nome' => 'WILL'
            ],
            [
                'id' => 0,
                'nome' => 'tESTE'
            ]
        ];
        var_dump($clientes);
        break;
    }*/
