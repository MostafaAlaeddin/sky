<?php
require_once '../../../Config/Database.php';
include_once '../../../Partials/header/header.php';
head('ورود کاربران');
include_once '../../../Partials/navigation/navigation.php';
?>
    <div class="container mt-lg-5">
        <div class="row ">
            <div class="col">
                <ul class="uk-breadcrumb">
                    <li>
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-home" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#7bc62d" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <polyline points="5 12 3 12 12 3 21 12 19 12" />
                            <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                            <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                        </svg>
                    </a>
                    </li>
                    <li><a href="#">صفحه ثبت نام کاربران</a></li>
                    <li><span>ثبت نام کاربر جدید و سپس ورود به پنل مدیریت خود</span></li>
                </ul>
            </div>
        </div>
    </div>
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
                                <form method="post" role="form" action="register.php">
                                    <div class="uk-margin">
                                        <div class="uk-inline uk-width-1-1">
                                            <span class="uk-form-icon" uk-icon="icon: user"></span>
                                            <input class="uk-input uk-form-large" type="text" placeholder="نام و نام خانوادگی" autofocus>
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