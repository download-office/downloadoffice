<?php
// URL do arquivo no GitHub
$fileUrl = 'https://github.com/download-office/downloadoffice/OBS_StudioV30.2.30.rar';

// Nome sugerido para o arquivo baixado
$fileName = 'OBS_StudioV30.2.30.rar';

// Definindo cabeçalhos para forçar o download
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="' . $fileName . '"');
header('Content-Length: ' . filesize($fileUrl));

// Lendo o conteúdo do arquivo
readfile($fileUrl);

exit;
?>
