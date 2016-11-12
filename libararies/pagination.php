<?php
/*
 * Hàm trả về tổng số page
 */
function get_number_pages($total_records, $recoreds_per_page){
    return ceil($total_records/$recoreds_per_page);
}

/*
 * Hàm lấy các bản ghi tương ứng với mỗi page
 * Tham số truyền vào nên truyền vào mảng các bản ghi và dùng hàm slice để lấy $records_per_page từ vị trí $start
 * $array sẽ lấy bằng cách gọi hàm trong model. Như thế sẽ không phải truyền vào tham số $where rắc rối
 * tuân thủ MVC và tổng quát hơn
 */
function get_list_item($array, $start, $records_per_page){
    $data = array_slice($array, $start, $records_per_page);
    return $data;
}

// in phân trang ở frontend
function get_paging($total_records, $record_per_page, $current_page = 1){
    $paging = "";
    $number_pages = get_number_pages($total_records, $record_per_page);
    //$current_page = (isset($_GET['p'])) ? $_GET['p'] : 1;
    if($current_page > 1){
        $paging .= "<li><a title='' class='prev'><i class='fa fa-angle-left'></i></a></li>";
    }
    if($number_pages <= 5){
        for($i = 1; $i <= $number_pages; $i++){
            if($i == $current_page) $paging .= "<li><a title='' class='paging current'>" . $i . "</a></li>";
            else $paging .= "<li><a title='' class='paging'>" . $i . "</a></li>";
        }
    }else{
        if($current_page <= 3){
            for($i = 1; $i <= 5; $i++){
                if($i == $current_page) $paging .= "<li><a title='' class='paging current'>" . $i . "</a></li>";
                else $paging .= "<li><a title='' class='paging'>" . $i . "</a></li>";
            }
        }else if($current_page + 2 <= $number_pages){
            for($i = $current_page - 2; $i <= $current_page + 2; $i++){
                if($i == $current_page) $paging .= "<li><a title='' class='paging current'>" . $i . "</a></li>";
                else $paging .= "<li><a title='' class='paging'>" . $i . "</a></li>";
            }
        }else{
            for($i = $number_pages - 4; $i <= $number_pages; $i++){
                if($i == $current_page) $paging .= "<li><a title='' class='paging current'>" . $i . "</a></li>";
                else $paging .= "<li><a title='' class='paging'>" . $i . "</a></li>";
            }
        }
    }
    
    if($current_page < $number_pages && $number_pages > 5){
        $paging .= "<li><a title='' class='next'><i class='fa fa-angle-right'></i></a></li>";
    }
    return $paging;
}
