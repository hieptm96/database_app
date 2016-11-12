<script>
    $(function () {
        //----- OPEN
        $('[data-popup-open]').on('click', function (e) {
            var targeted_popup_class = jQuery(this).attr('data-popup-open');
            $('[data-popup="' + targeted_popup_class + '"]').fadeIn(350);

            e.preventDefault();
        });

        //----- CLOSE
        $('[data-popup-close]').on('click', function (e) {
            var targeted_popup_class = jQuery(this).attr('data-popup-close');
            $('[data-popup="' + targeted_popup_class + '"]').fadeOut(350);

            e.preventDefault();
        });
    });
</script>

<div id="wp-content" class="login-page bg-36">
    <div id="main-content">
        <a class="btn" data-popup-open="popup-1" href="#">Open Popup #1</a>
        <div class="popup" data-popup="popup-1">
            <div class="popup-inner">
                <div class="wp-form">
                    <h3 class="form-title">Đăng nhập</h3>
                    <p class="error">Lỗi: <span>Tên đăng nhập hoặc mật khẩu không tồn tại</span></p>
                    <form action="?mod=user&controller=index&action=login" method="POST">
                        <div class="form-group">
                            <input type="text" placeholder="Tên đăng nhập" name="user_login" id="user">
                            <input type="password" placeholder="Mật khẩu" name="user_pass" id="pass">
                        </div>
                        <div class="form-group clearfix">
                            <input type="submit" value="Đăng nhập" id="btn-login" class="fl_left">
                            <input type="checkbox" name="remember" id="remember" class="fl_left"><label for="remember">Ghi nhớ</label>
                            <a href="?page=forget_pass" title="Quên mật khẩu" id="forget_pass">Quên mật khẩu?</a>
                        </div>
                    </form>
                </div>
                <p><a data-popup-close="popup-1" href="#">Close</a></p>
                <a class="popup-close" data-popup-close="popup-1" href="#">x</a>
            </div>
        </div>
    </div>
</div>