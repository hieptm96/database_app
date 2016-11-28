<?php

function get_list_projects(){
    $sql = "SELECT * FROM `tbl_projects` WHERE `status` = 'public'";
    $list_projects = db_fetch_array($sql);
    return $list_projects;
}

function get_project_by_id($id){
    $sql = "SELECT * FROM `tbl_projects` WHERE `id`={$id}";
    $project = db_fetch_row($sql);
    return $project;
}

function add_project($data){
	db_insert("tbl_projects",$data);
	return true;
}

function update_project($data_update, $id){
	db_update("tbl_projects", $data_update, "`id`={$id}");
	return true;
}

function delete_project($id){
    $arr = array(
        'status' => 'cancel'
    );
    db_update("tbl_projects", $arr, "`id`={$id}");
    return true;
}

function get_list_project_search($query_string){
    $sql = "SELECT * FROM `tbl_projects` WHERE `name` LIKE '%{$query_string}%'";
    $list_projects = db_fetch_array($sql);
    return $list_projects;
}