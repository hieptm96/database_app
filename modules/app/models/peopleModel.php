<?php

function get_list_peoples() {
    $sql = "SELECT * FROM `tbl_peoples` WHERE `status` = 'public'";
    $list_peoples = db_fetch_array($sql);
    return $list_peoples;
}

function get_people_by_id($id) {
    $sql = "SELECT * FROM `tbl_peoples` WHERE `id`={$id}";
    $people = db_fetch_row($sql);
    return $people;
}

function add_people($data) {
    db_insert("tbl_peoples", $data);
    return true;
}

function update_people($data_update, $id) {
    db_update("tbl_peoples", $data_update, "`id`={$id}");
    return true;
}

function delete_people($id) {
    $arr = array(
        'status' => 'cancel'
    );
    db_update("tbl_peoples", $arr, "`id`={$id}");
    return true;
}
