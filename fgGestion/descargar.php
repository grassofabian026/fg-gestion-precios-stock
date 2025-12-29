<?php
// Ruta del archivo ZIP
$file = 'fg-gestion-precios-stock-pro-trial.zip';

// Registrar la descarga
$log = fopen('descargas.log', 'a');
fwrite($log, date('Y-m-d H:i:s') . " - Descarga Free\n");
fclose($log);

// Forzar descarga
header('Content-Type: application/zip');
header('Content-Disposition: attachment; filename="' . basename($file) . '"');
header('Content-Length: ' . filesize($file));
readfile($file);
exit;
?>