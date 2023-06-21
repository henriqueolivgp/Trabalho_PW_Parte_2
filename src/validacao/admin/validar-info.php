<?php
/**
 * FUNÇÃO RESPONSÁVEL PELA VALIDAÇÃO DE UMa info
 */
function infoValida($requisicao)
{
    # RETIRA ESPAÇOS VAZIOS
    foreach ($requisicao as $key => $value) {
        $requisicao[$key] =  trim($requisicao[$key]);
    }

    # VALIDANDO O CAMPO NOME
    if (empty($requisicao['titulo']) || strlen($requisicao['titulo']) < 3 || strlen($requisicao['titulo']) > 255) {
        $erros['titulo'] = 'O campo Nome não pode estar vazio e deve ter entre 3 e 255 caracteres.';
    }

    # VALIDANDO O CAMPO APELIDO
    if (empty($requisicao['texto']) || strlen($requisicao['texto']) < 3 || strlen($requisicao['texto']) > 400) {
        $erros['texto'] = 'O campo Texto não pode estar vazio e deve ter entre 3 e 255 caracteres.';
    }
    # RETORNA ERROS
    if (isset($erros)) {
        return ['invalido' => $erros];
    }

    # RETORNA UTILIZADOR VALIDADO
    return $requisicao;
}

?>