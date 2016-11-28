<?php
function construct() {
    load_model('issue');
    load_model('project');
    load_model('people');
}

function search_projectAction(){
    if(isset($_POST['query_string'])){
        $list_projects = get_list_project_search($_POST['query_string']);
        if(count($list_projects) > 0){
            $string = '<ul>';
            foreach($list_projects as $project){
                $string .= '<li>';
                $string .= $project['name'];
                $string .= '</li>';
            }
            $string .= '</ul>';
            echo $string;
        } else {
            echo '<p>Không có dữ liệu</p>';
        }
        
    }
}