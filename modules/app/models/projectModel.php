<?php

function get_list_projects(){
	$sql = "SELECT * FROM `tbl_projects`";
	$list_projects = db_fetch_array($sql);
	return $list_projects;
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
	db_delete("tbl_projects","`id`={$id}");
	return true;
}