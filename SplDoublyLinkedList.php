<?php
//criamos uma nova link do SplDoublyLinkedList
$produto = new SplDoublyLinkedList();
//adicionamos um valor 
$produto->push(
    array(
        "titulo"  => "IPHONE 14 PRO MAX",
        "valor"   => 10000.75,
        "unidade" => "UN"
    )
);
$produto->push(
    array(
        "titulo"  => "NOTEBOOK",
        "valor"   => 4500.75,
        "unidade" => "UN"
    )
);
$produto->push(
    array(
        "titulo"  => "SMART TV",
        "valor"   => 2200.35,
        "unidade" => "UN"
    )
);

$produto->add(
    2,
    array(
        "titulo"  => "MAUSE",
        "valor"   => 80.37,
        "unidade" => "UN"
    )
);

$produto->offsetUnset(3);
$produto->offsetUnset(2);
$produto->offsetUnset(1);
var_dump($produto);
