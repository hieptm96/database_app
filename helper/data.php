<?php

function show_array($data) {
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo "<pre>";
    }
}

//$id_type để dùng cho cat_id và menu_id(cả cat và menu)
function show_tree($data, $id_type, $parent_id = 0, $level = 0) {
    $result = array();
    foreach ($data as $item) {
        if ($item['parent_id'] == $parent_id) {
            $item['level'] = $level;
            $result[] = $item;
            //kiem tra xem no co con ko, roi add vao mang bang cach goi de quy
            $result_child = show_tree($data, $id_type, $item[$id_type], $level + 1);
            $result = array_merge($result, $result_child);
        }
    }
    return $result;
}

function get_list_header_cats(){
    $list_cats = db_fetch_array("SELECT * FROM `tbl_product_cats`");
    return $list_cats;
}
