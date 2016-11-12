<?php
function redirect($path){
    header("location:{$path}");
}

function base_url(){
    global $config;
    return $config['base_url'];
}