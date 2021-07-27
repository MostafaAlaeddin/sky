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
                <li><a href="#">صفحه ورود کاربران</a></li>
                <li><span>ورود کاربران به پنل مدیریت خود</span></li>
            </ul>
        </div>
    </div>
</div>
<div class="uk-section uk-section-muted uk-flex uk-flex-wrap-middle uk-animation-fade" uk-height-viewport>
    <div class="uk-width-1-1">
        <div class="uk-container">
            <div class="uk-grid-margin uk-grid uk-grid-stack" uk-grid>
                <div class="uk-width-1-1@m">
                    <div class="uk-margin uk-width-large uk-margin-auto uk-card uk-card-default uk-card-body uk-box-shadow-large ">
                        <h3 class="uk-card-title uk-text-center">خوش آمدید</h3>
                        <form>
                            <div class="uk-margin">
                                <div class="uk-inline uk-width-1-1">
                                    <span class="uk-form-icon" uk-icon="icon: mail"></span>
                                    <input class="uk-input uk-form-large" type="text" autofocus>
                                </div>
                            </div>
                            <div class="uk-margin">
                                <div class="uk-inline uk-width-1-1">
                                    <span class="uk-form-icon" uk-icon="icon: lock"></span>
                                    <input class="uk-input uk-form-large" type="password">
                                </div>
                            </div>
                            <div class="uk-margin">
                                <button class="uk-button btn-outline-success uk-button-small uk-button-large uk-width-1-1">ورود</button>
                            </div>
                            <div class="uk-text-small uk-text-center">
                                ثبت نام نکرده اید ؟ <a href="/wp_crud/views/auth/register/register.php">ساخت حساب کاربری جدید</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include_once '../../../Partials/footer/footer.php';
?>
