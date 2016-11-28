<?php
function construct() {
    load_model('project');
}

function listAction() {
    if (isset($_SESSION['alert'])) {
        $data['success'] = $_SESSION['alert'];
        unset($_SESSION['alert']);
    }
    $data['list_projects'] = get_list_projects();
    load_view('list_project',$data);
}

function newAction() {
	load_view('new_project','');
}

function createAction() {
    if(isset($_POST['submit'])){
        $data_create = array(
            'name' => $_POST['name'],
            'start_date' => $_POST['startdate'],
            'target_end_date' => $_POST['targetenddate'],
            'created_by' => $_POST['createby']
        );
        add_project($data_create);
        $_SESSION['alert'] = "Create new project successfully!";
    }
    redirect('?mod=app&c=project&a=list');
}

function editAction() {
	if(isset($_GET['id'])){
		$project = get_project_by_id($_GET['id']);
	}
	$data['project'] = $project;
	load_view('edit_project',$data);
}

function updateAction() {
        if(isset($_POST['submit'])){
            $data_update = array(
                'name' => $_POST['name'],
                'start_date' => $_POST['startdate'],
                'target_end_date' => $_POST['targetenddate'],
                'actual_end_date' => $_POST['actualenddate'],
                'created_by' => $_POST['createby'],
                'modified_by' => $_POST['modifiedby']
            );
            update_project($data_update,$_POST['hidden_id']);
            $_SESSION['alert'] = "Update project successfully!";
        }
	redirect('?mod=app&c=project&a=list');
}

function destroyAction() {
	if(isset($_GET['id'])){
		delete_project($_GET['id']);
		$_SESSION['alert'] = "Delete project successfully!";
	}
	redirect('?mod=app&c=project&a=list');
}

