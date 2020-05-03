<?php
$file = 'namespace/index.php';
// print_r($file);

try {
    if (!file_exists($file)) {
        throw new Exception("File not found");
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
