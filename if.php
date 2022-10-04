<?php
$valido = filter_input(INPUT_POST, 'if', FILTER_VALIDATE_BOOL);
/*if ($valido) {
    echo "Dados validado com sucesso!";
} else {
    echo "Dados informado são inválido!";
}
*/
if ($valido) :
    echo "Dados validado com sucesso!";
else :
    echo "Dados informado são inválido!";
endif;
