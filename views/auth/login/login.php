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
                    <div class="uk-margin uk-width-large uk-margin-auto uk-card uk-card-default uk-card-body uk-box-shadow-large ">
                        <h3 class="uk-card-title uk-text-center">خوش آمدید</h3>
                        <form>
                            <div class="uk-margin">
                                <div class="uk-inline uk-width-1-1">
                                    <span class="uk-form-icon" uk-icon="icon: mail"></span>
                                    <input class="uk-input uk-form-large" type="text">
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
