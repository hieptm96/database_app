<?php
session_start();
function is_login() {
    if (isset($_SESSION['is_login']) && $_SESSION['is_login'] == true)
        return true;
}

function get_user_login() {
    if (is_login())
        return $_SESSION['user_login'];
}

function get_user_id() {
    if (is_login())
        return $_SESSION['user_id_login'];
}

//@ Kiểm tra login
//@ return true: Tồn tại username và password trên một thành viên
function check_user_login($user_login) {
    global $conn;
    //$user = get_user_by_username($username);
    $user = db_fetch_row("select * from `tbl_users` where `user_login` = '{$user_login}'");
    if($user){
        return $user;
    }
    return false;
}
