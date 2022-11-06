<?php
if (isset($_GET['key']) && $_GET['key']=='rahasia'){
    header('Content-Disposition: attachment; filename="Logo.png');
    header('Content-Type: image/png');
    readfile(__DIR__.'/file/Logo.png');
    exit();
}else{
    echo "invalid key";
}