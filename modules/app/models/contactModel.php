<?php

function get_list_contacts(){
	$sql = "SELECT * FROM `tbl_contacts`";
	$list_contacts = db_fetch_array($sql);
	return $list_contacts;
}

function add_contact($data){
	db_insert("tbl_contacts",$data);
	return true;
}

function update_contact($data_update, $id){
	db_update("tbl_contacts", $data_update, "`id`={$id}");
	return true;
}

function delete_contact($id){
	db_delete("tbl_contacts","`id`={$id}");
	return true;
}