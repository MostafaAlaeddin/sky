<!--breadcrumb-->
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
                <li><a href="#">صفحه اصلی</a></li>
                <li class="uk-disabled"><a>نمایش اطلاعات پایه</a></li>
                <li><span>از هر قسمت سایت اطلاعات پایه ای در این قسمت قرار گرفته است</span></li>
            </ul>
        </div>
    </div>
</div>
<hr class="border border-success w-50 m-auto mt-4 mb-4">
<!--slider-->
<div class="container-fluid mt-4 shadow pt-5" style="width: 95%;">
    <div class="row">
        <!--slider-->
        <div uk-slider>
            <div class="uk-position-relative">

                <div class="uk-slider-container uk-light">
                    <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m">
                        <li>
                            <img src="/wp_crud/Interface/Images/Smile.jpg" alt="">
                            <div class="uk-position-center uk-panel"><h1>1</h1></div>
                        </li>
                        <li>
                            <img src="/wp_crud/Interface/Images/Smile.jpg" alt="">
                            <div class="uk-position-center uk-panel"><h1>2</h1></div>
                        </li>
                        <li>
                            <img src="/wp_crud/Interface/Images/Smile.jpg" alt="">
                            <div class="uk-position-center uk-panel"><h1>3</h1></div>
                        </li>
                        <li>
                            <img src="/wp_crud/Interface/Images/Smile.jpg" alt="">
                            <div class="uk-position-center uk-panel"><h1>4</h1></div>
                        </li>
                        <li>
                            <img src="/wp_crud/Interface/Images/Smile.jpg" alt="">
                            <div class="uk-position-center uk-panel"><h1>5</h1></div>
                        </li>
                        <li>
                            <img src="/wp_crud/Interface/Images/Smile.jpg" alt="">
                            <div class="uk-position-center uk-panel"><h1>6</h1></div>
                        </li>
                        <li>
                            <img src="/wp_crud/Interface/Images/Smile.jpg" alt="">
                            <div class="uk-position-center uk-panel"><h1>7</h1></div>
                        </li>
                        <li>
                            <img src="/wp_crud/Interface/Images/Smile.jpg" alt="">
                            <div class="uk-position-center uk-panel"><h1>8</h1></div>
                        </li>
                        <li>
                            <img src="/wp_crud/Interface/Images/Smile.jpg" alt="">
                            <div class="uk-position-center uk-panel"><h1>9</h1></div>
                        </li>
                        <li>
                            <img src="/wp_crud/Interface/Images/Smile.jpg" alt="">
                            <div class="uk-position-center uk-panel"><h1>10</h1></div>
                        </li>
                    </ul>
                </div>

                <div class="uk-hidden@s uk-light">
                    <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                </div>

                <div class="uk-visible@s">
                    <a class="uk-position-center-right-out uk-position-small text-primary scale " href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-left-out uk-position-small  text-primary scale  " href="#" uk-slidenav-next uk-slider-item="next"></a>
                </div>

            </div>
            <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
        </div>
    </div>
</div>
<!--end slider-->

<!--search box -->
<div class="container border mt-5 mb-2">
    <div class="row">
        <div class="col m-3">
            <h3 class="text-center">چطور میتونم کمکتون کنم ؟</h3>
            <form action="" method="GET" role="search">
                <div class="input-group">
                    <label for="search"></label>
                    <input type="text" name="" id="search" class="form-control form-control-sm" placeholder="عنوانی را جستجو کنید">
                    <div class="input-group-prepend">
                        <button class="btn btn-outline-secondary" type="submit">جستجو را شروع کنید</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!--end search box -->

<!--cards-->
<div class="container">
    <div class="row">
        <div class="col">
            <div class="uk-child-width-1-3@m" uk-grid>
                <div>
                    <div class="uk-card uk-card-default wp-hover uk-animation-fade">
                        <div class="uk-card-media-top">
                            <img src="/wp_crud/Interface/Images/coffee_shop.jpg" alt="">
                        </div>
                        <div class="uk-card-body">
                            <h3 class="uk-card-title">متن نمونه</h3>
                            <p>نمونه متن جهت بهتر دیده شدن این کارت</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default wp-hover uk-animation-fade">
                        <div class="uk-card-media-top">
                            <img src="/wp_crud/Interface/Images/coffee_shop.jpg" alt="">
                        </div>
                        <div class="uk-card-body">
                            <h3 class="uk-card-title">متن نمونه</h3>
                            <p>نمونه متن جهت بهتر دیده شدن این کارت</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default wp-hover uk-animation-fade">
                        <div class="uk-card-media-top">
                            <img src="/wp_crud/Interface/Images/coffee_shop.jpg" alt="">
                        </div>
                        <div class="uk-card-body">
                            <h3 class="uk-card-title">متن نمونه</h3>
                            <p>نمونه متن جهت بهتر دیده شدن این کارت</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default wp-hover uk-animation-fade">
                        <div class="uk-card-media-top">
                            <img src="/wp_crud/Interface/Images/coffee_shop.jpg" alt="">
                        </div>
                        <div class="uk-card-body">
                            <h3 class="uk-card-title">متن نمونه</h3>
                            <p>نمونه متن جهت بهتر دیده شدن این کارت</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default wp-hover uk-animation-fade">
                        <div class="uk-card-media-top">
                            <img src="/wp_crud/Interface/Images/coffee_shop.jpg" alt="">
                        </div>
                        <div class="uk-card-body">
                            <h3 class="uk-card-title">متن نمونه</h3>
                            <p>نمونه متن جهت بهتر دیده شدن این کارت</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default wp-hover uk-animation-fade">
                        <div class="uk-card-media-top">
                            <img src="/wp_crud/Interface/Images/coffee_shop.jpg" alt="">
                        </div>
                        <div class="uk-card-body">
                            <h3 class="uk-card-title">متن نمونه</h3>
                            <p>نمونه متن جهت بهتر دیده شدن این کارت</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end cards-->

<!--paginations-->
<ul class="uk-pagination uk-flex-center" uk-margin>
    <li><a href="#" class="wp-pagination-color"><span uk-pagination-previous></span><span class="ms-2">قبلی</span></a></li>
    <li><a href="#" class="wp-text">1</a></li>
    <li class="uk-disabled"><span class="text-success">.. .. .. </span></li>
    <li><a href="#" class="wp-text">5</a></li>
    <li><a href="#" class="wp-text">6</a></li>
    <li class="uk-active"><span>7</span></li>
    <li><a href="#" class="wp-text">8</a></li>
    <li><a href="#" class="wp-pagination-color"><span class="me-2">بعدی</span><span uk-pagination-next></span></a></li>
</ul>
<!--end paginations-->

<!--work with me-->
<div class="container-fluid d-inline-flex justify-content-center border p-5 mt-5 mb-5">
    <div class="row">
        <div class="col d-inline-block">
            <img src="/wp_crud/Interface/Images/requests/requests.jpg" alt="" width="300px" height="300px">
                <p>
                    عضویت در سایت علاءالدین ، ثبت کسب و کار خود و در نهایت رونق کار شما از طریق درخواست ها و ارائه تخفیف برای مشتریان
                    <br>
                    شما میتوانید از امکاناتی که برای شما در راستایی بهتر شدن کسب و کار شما در نظر گرفته شده استفاده کنید
                </p>
                <p><a href=".#">مشاهده شرایط و قوانین</a></p>
        </div>
    </div>
</div>
<!--end work with me-->
