<?php

function get_list_issues($project_id){
    $sql = "SELECT i.*, p.first_name FROM `tbl_issues` i "
         . "JOIN `tbl_peoples` p "
         . "ON i.assigned_to = p.id "
         . "WHERE i.flag = 'public' AND i.project_id = {$project_id}";
    $list_issues = db_fetch_array($sql);
    return $list_issues;
}

function get_list_issues_feature($project_id){
    $sql = "SELECT * FROM `tbl_issues` "
         . "WHERE `flag` = 'public' AND `project_id` = {$project_id} AND `tracker` = 'Feature'";
    $list_issues = db_fetch_array($sql);
    return $list_issues;
}
function get_list_issues_bug($project_id){
    $sql = "SELECT * FROM `tbl_issues` "
         . "WHERE `flag` = 'public' AND `project_id` = {$project_id} AND `tracker` = 'Bug'";
    $list_issues = db_fetch_array($sql);
    return $list_issues;
}
function get_list_issues_support($project_id){
    $sql = "SELECT * FROM `tbl_issues` "
         . "WHERE `flag` = 'public' AND `project_id` = {$project_id} AND `tracker` = 'Support'";
    $list_issues = db_fetch_array($sql);
    return $list_issues;
}

function get_list_members($project_id){
    $sql = "SELECT * FROM `tbl_peoples` WHERE `project_id` = {$project_id}";
    $list_members = db_fetch_array($sql);
    return $list_members;
}

function get_issue_by_id($id){
    $sql = "SELECT * FROM `tbl_issues` WHERE `id`={$id}";
    $issue = db_fetch_row($sql);
    return $issue;
}

function add_issue($data){
	db_insert("tbl_issues",$data);
	return true;
}

function update_issue($data_update, $id){
	db_update("tbl_issues", $data_update, "`id`={$id}");
	return true;
}

function delete_issue($id){
    $arr = array(
        'flag' => 'cancel'
    );
    db_update("tbl_issues", $arr, "`id`={$id}");
    return true;
}