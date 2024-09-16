<?php
// URL do arquivo no GitHub
$fileUrl = 'https://github.com/download-office/downloadoffice/coreldraw.png';

// Nome sugerido para o arquivo baixado
$fileName = 'coreldraw.png';

// Inicializa o cURL
$ch = curl_init($fileUrl);

// Configurações do cURL
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); // Seguir redirecionamentos, se houver
curl_setopt($ch, CURLOPT_FAILONERROR, true);    // Reportar erro em caso de status HTTP 4xx ou 5xx

// Executa a requisição
$fileData = curl_exec($ch);

// Verifica se houve erro
if ($fileData === false) {
    echo 'Erro ao tentar baixar o arquivo: ' . curl_error($ch);
    exit;
}

// Fecha a sessão do cURL
curl_close($ch);

// Definindo os cabeçalhos para forçar o download
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="' . $fileName . '"');
header('Content-Length: ' . strlen($fileData));

// Envia o conteúdo do arquivo para o navegador
echo $fileData;

exit;
?>