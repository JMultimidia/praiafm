<?php
// Arquivo que ficará no dominio jmhost.com.br
// Receba a URL que você deseja acessar como um parâmetro
$url = $_GET['url'];

// Configurar os cabeçalhos CORS no servidor PHP
header("Access-Control-Allow-Origin: *"); // Isso permite que qualquer origem acesse o seu serviço de proxy. Você pode restringir isso, se necessário.
header("Content-Type: application/json"); // Defina o tipo de conteúdo de acordo com o que você espera receber.

// Use a função cURL para fazer a solicitação para a URL desejada
$ch = curl_init($url);

// Configurar outras opções do cURL, se necessário
// Por exemplo, configurar cabeçalhos de solicitação, definir o método HTTP, etc.

// Executar a solicitação cURL
$response = curl_exec($ch);

// Verificar se ocorreu algum erro
if(curl_errno($ch)){
    echo 'Erro ao fazer a solicitação: ' . curl_error($ch);
}

// Fechar a sessão cURL
curl_close($ch);

// Retornar a resposta do servidor remoto
echo $response;
