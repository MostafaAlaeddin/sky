<?php
require_once '../../../Config/Database.php';
include_once '../../../Partials/header/header.php';
head('ورود کاربران');
include_once '../../../Partials/navigation/navigation.php';
?>
<div class="uk-section uk-section-muted uk-flex uk-flex-wrap-middle uk-animation-fade" uk-height-viewport>
    <div class="uk-width-1-1">
        <div class="uk-container">
            <div class="uk-grid-margin uk-grid uk-grid-stack" uk-grid>
                <div class="uk-width-1-1@m">
                    <form class="uk-margin uk-width-large uk-margin-auto uk-card uk-card-default uk-card-body uk-box-shadow-large">
                        <ul class="uk-tab uk-flex-center" uk-grid uk-switcher="animation: uk-animation-fade">
                            <li><a href="#">ثبت نام</a></li>
                            <li class="uk-hidden">رمز عبور را فراموش کرده اید ؟</li>
                        </ul>
                        <ul class="uk-switcher uk-margin">
                            <li>
                                <h3 class="uk-card-title uk-text-center">ثبت نام امروز رایگان است !</h3>
                                <form>
                                    <div class="uk-margin">
                                        <div class="uk-inline uk-width-1-1">
                                            <span class="uk-form-icon" uk-icon="icon: user"></span>
                                            <input class="uk-input uk-form-large" type="text" placeholder="نام و نام خانوادگی">
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <div class="uk-inline uk-width-1-1">
                                            <span class="uk-form-icon" uk-icon="icon: mail"></span>
                                            <input class="uk-input uk-form-large uk-text-left" type="text" placeholder="Email@example.com">
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <div class="uk-inline uk-width-1-1">
                                            <span class="uk-form-icon" uk-icon="icon: lock"></span>
                                            <input class="uk-input uk-form-large" type="password" placeholder="رمز عبور خود را انتخاب کنید" aria-label="#help">
                                            <small id="help">رمز عبور شما باید شامل اعداد و علائم خاص و حروف زیر خط باشد</small>
                                        </div>
                                    </div>
                                    <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                                        <label><input class="uk-checkbox me-2" type="checkbox">با <a href="#">شرایط و قوانین</a> این مجموعه موافق هستم</label>
                                    </div>
                                    <div class="uk-margin">
                                        <button class="uk-button btn-outline-primary  uk-button-large uk-width-1-1">ثبت نام</button>
                                    </div>
                                    <div class="uk-text-small uk-text-center">
                                        آیا حساب کاربری دارید ؟<a href="#" uk-switcher-item="1" class="ms-2">ورود</a>
                                    </div>
                                </form>
                            </li>

                        </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php
include_once '../../../Partials/footer/footer.php';
?>