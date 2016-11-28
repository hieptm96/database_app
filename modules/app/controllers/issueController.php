<?php
function construct() {
    load_model('issue');
}

function indexAction(){
    if(isset($_GET['project_id'])){
        
        if (isset($_SESSION['alert'])) {
            $data['success'] = $_SESSION['alert'];
            unset($_SESSION['alert']);
        }
        $list_issues = get_list_issues($_GET['project_id']);
        $data['list_issues'] = $list_issues;
        $data['number_issues_feature'] = count(get_list_issues_feature($_GET['project_id']));
        $data['number_issues_bug'] = count(get_list_issues_bug($_GET['project_id']));
        $data['number_issues_support'] = count(get_list_issues_support($_GET['project_id']));
        $data['list_members'] = get_list_members($_GET['project_id']);
        load_view('list_issue', $data);
    }
    
}

function createAction() {
    if(isset($_POST['submit'])){
        if(isset($_POST['submit'])){
            $data_create = array(
                'tracker' => $_POST['tracker'],
                'title' => $_POST['title'],
                'description' => $_POST['description'],
                'status' => $_POST['status'],
                'priority' => $_POST['priority'],
                'assigned_to' => $_POST['assigned_to'],
                'opened_by' => '1',
                'open_date' => $_POST['opened_date'],
                'target_end_date' => $_POST['target_end_date'],
                'project_id' => $_POST['hidden_id']
            );
            add_issue($data_create);
            $_SESSION['alert'] = "Create new issue successfully!";
        }
        redirect('?mod=app&c=issue&a=index&project_id='.$_POST['hidden_id']);
    }
}

function editAction() {
	load_view('edit_issue','');
}

function updateAction() {

}

function destroyAction() {
	if(isset($_GET['id'])){
		delete_issue($_GET['id']);
		$_SESSION['alert'] = "Delete issue successfully!";
	}
	redirect('?mod=app&c=issue&a=list');
}


