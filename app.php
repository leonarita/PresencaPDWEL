<?php

    // Fazer requisição à api públic
    $result = file_get_contents("https://servicodados.ibge.gov.br/api/v1/localidades/estados");

    // Converter a resposta (string) em json
    $result = json_decode($result);

    // Converter a resposta (string) em xml - NÃO APLICADO NO CONTEXTO
    // $result = new SimpleXMLElement($result);

    // Manipular dados (XML, JSON)
    echo '<h1>Estados do Brasil</h1>';

    echo '<ul>';
    foreach ($result as $value) {
        echo '<li><p>' . $value->nome . ' (' . $value->sigla . ') </p></li>';
    }
    echo '</ul>';
    
?>