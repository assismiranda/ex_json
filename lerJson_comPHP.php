<?php
    //o método file_get_contents() pega os dados do arquivo (data.json) JSON
    $json = file_get_contents("data.json");
    //transforma o json num objeto javascript
    $data = json_decode($json);

    echo "Exibindo um objeto específico do arquivo <b>data.json</b> <br>";
    echo $data->nome . "<br>";
    echo $data->idade . "<br>";
    echo $data->profissao . "<br>";

    //trabalhando com o arquivo dataArrayJson.json
    $jsonArray = file_get_contents("dataArrayJson.json");
    $dataArrayJson = json_decode($jsonArray);

    /* selecionando um índice específico: */
    echo "<br>Exibindo um array com índice específico do arquivo dataArrayJson.json <br>";
    echo $dataArrayJson[0]->nome . "<br>"; // Márcio
    echo $dataArrayJson[0]->idade . "<br>"; // 41
    echo $dataArrayJson[0]->profissao . "<br>"; // Professor

    echo $dataArrayJson[1]->nome . "<br>"; // Júlia
    echo $dataArrayJson[1]->idade . "<br>"; // 9
    echo $dataArrayJson[1]->profissao . "<br>"; // Estudante

    /* OU usando um foreach para percorrer o array todo: */
    echo "<br>Exibindo um array com foreach <br>";
    foreach ($dataArrayJson as $key => $value) {
        echo $value->nome . "<br>";
        echo $value->idade . "<br>";
        echo $value->profissao . "<br>";
    }
?>