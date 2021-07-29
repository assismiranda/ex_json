<?php
    //pegando os dados de um arquivo json
    //$dados_json = file_get_contents("data.json");

    //pode também gerar o json a partir de um array ou de dados que venha do BD
    //Exemplo gerando o array com dados de variáveis

    //origem dos dados
    /*
    $nome = "Isabella";
    $idade = 18;
    $profissao = "Estudante";

    //gerar o array com os dados
    $array_dados = array("nome" => $nome, "idade" => $idade, "profissao" => $profissao);
    $dados_json = json_encode($array_dados); //transforma o array num json
    //gerando o arquivo json
    if (file_put_contents("destino.json", $dados_json)){
        echo "Arquivo json gerado com sucesso";
    }else{
        echo "Erro ao gerar o arquivo";
    }
    */




//gera um array com o conjunto de dados
//estes dados podem vir do banco de dados por meio de uma consulta sql
    $array_dados = [
        "caixa1" => ['id' => 1, 'latitude' => '000245514', 'longitude' => '45454545'],
        "caixa2" => ['id' => 2, 'latitude' => '551445121', 'longitude' => '54545454'],
        "caixa3" => ['id' => 3, 'latitude' => '878545214', 'longitude' => '87878878']
    ];

    var_dump($array_dados); //teste
    
    //transforma o array num objeto json
    $dados_json = json_encode($array_dados);
    //gera o arquivo com o objeto json
    file_put_contents("destino.json", $dados_json);

?>