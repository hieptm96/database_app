<?php

function construct() {
    load_model('people');
}

function listAction() {
    if (isset($_SESSION['alert'])) {
        $data['success'] = $_SESSION['alert'];
        unset($_SESSION['alert']);
    }
    $data['list_peoples'] = get_list_peoples();
    load_view('list_people', $data);
}

function newAction() {
    load_view('new_people', '');
}

function createAction() {
    if(isset($_POST['submit'])){
        $data_create = array(
            'first_name' => $_POST['first_name'],
            'last_name' => $_POST['last_name'],
            'company' => $_POST['company'],
            'email' => $_POST['email'],
            'job_title' => $_POST['job_title'],
            'mobile_phone' => $_POST['mobile_phone'],
            'fax_number' => $_POST['fax_number'],
            'address' => $_POST['mobile_phone'],
            'web_page' => $_POST['mobile_phone'],
            'note' => $_POST['note']
        );
        add_project($data_create);
        $_SESSION['alert'] = "Create new people successfully!";
    }
    redirect('?mod=app&c=people&a=list');
}

function editAction() {
    if (isset($_GET['id'])) {
        $people = get_people_by_id($_GET['id']);
    }
    $data['people'] = $people;
    load_view('edit_people', $data);
}

function updateAction() {
    if (isset($_POST['submit'])) {
        $data_update = array(
            'first_name' => $_POST['first_name'],
            'last_name' => $_POST['last_name'],
            'company' => $_POST['company'],
            'email' => $_POST['email'],
            'job_title' => $_POST['job_title'],
            'mobile_phone' => $_POST['mobile_phone'],
            'fax_number' => $_POST['fax_number'],
            'address' => $_POST['mobile_phone'],
            'web_page' => $_POST['mobile_phone'],
            'note' => $_POST['note']
        );
        update_people($data_update, $_POST['hidden_id']);
        $_SESSION['alert'] = "Update people successfully!";
    }
    redirect('?mod=app&c=people&a=list');
}

function destroyAction() {
    if (isset($_GET['id'])) {
        delete_people($_GET['id']);
        $_SESSION['alert'] = "Delete people successfully!";
    }
    redirect('?mod=app&c=people&a=list');
}
