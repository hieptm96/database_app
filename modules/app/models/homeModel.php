<?php
function get_list_products($cat_id, $brand_id = null, $limit){
    $sql = "SELECT p.*, m.thumb_img FROM `tbl_products` p "
         . "JOIN `tbl_medias` m "
                . "ON m.thumb_id = p.thumb_id "
         . "WHERE `cat_id` = {$cat_id} ";
    if($brand_id != null){
        $sql .= "AND `brand_id` = {$brand_id} ";
    }
    $sql .= "LIMIT {$limit}";
    $list_products = db_fetch_array($sql);
    return $list_products;
}

function get_list_search($query_string, $cat_id){
    $sql = "SELECT p.product_id, p.product_name, p.product_price, m.thumb_img "
         . "FROM `tbl_products` p "
         . "JOIN `tbl_medias` m "
                . "ON m.thumb_id = p.thumb_id "
         . "WHERE `product_name` LIKE '%{$query_string}%' ";
    if($cat_id != 0){
        $sql .= "AND `cat_id` = {$cat_id}";
    }
    $list_result = db_fetch_array($sql);
    return $list_result;
}

function get_list_brands(){
    $list_brands = db_fetch_array("SELECT * FROM `tbl_product_brands`");
    return $list_brands;
}

function get_list_cats(){
    $list_cats = db_fetch_array("SELECT * FROM `tbl_product_cats`");
    return $list_cats;
}