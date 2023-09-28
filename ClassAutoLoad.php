<?php

spl_autoload_register(function ($ClassName){
    $directories = array("connection", "layouts", "processes");
    foreach($directories AS $dir){
        $FileName = dirname(__FILE__) . DIRECTORY_SEPARATOR . $dir . DIRECTORY_SEPARATOR . $ClassName . ".php";
        if(is_readable($FileName)){
            require $FileName;
        }
    }
}, true, true);


$db = NEW DbConnection;
$layout = NEW Layout($db);
$auth = NEW Auth();

$auth -> process_register($db);