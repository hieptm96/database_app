<?php
function construct() {
    load_model('home');
}

function indexAction() {
    $data['list_brands'] = get_list_brands();
    $data['list_cats'] = get_list_cats();
    load_view('index', $data);
}


