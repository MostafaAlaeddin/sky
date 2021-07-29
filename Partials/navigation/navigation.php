<nav class="navbar navbar-expand-lg navbar-light " id="navigation">
    <div class="container">
        <a class="navbar-brand text-light" href="./index.php">علاءالدین</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 300px;">
                <li class="nav-item">
                    <a class=" p-color nav-link active" aria-current="page" href="/wp_crud/index.php">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-home-2" width="32"
                             height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#48989B" fill="none"
                             stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <polyline points="5 12 3 12 12 3 21 12 19 12"/>
                            <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"/>
                            <rect x="10" y="12" width="4" height="4"/>
                        </svg>
                        <span>خانه</span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class=" p-color nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-messages" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#48989B" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M21 14l-3 -3h-7a1 1 0 0 1 -1 -1v-6a1 1 0 0 1 1 -1h9a1 1 0 0 1 1 1v10" />
                            <path d="M14 15v2a1 1 0 0 1 -1 1h-7l-3 3v-10a1 1 0 0 1 1 -1h2" />
                        </svg>
                        <span>درخواست ها</span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                        <li><a class="dropdown-item" href="#">درج درخواست جدید</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">مشاهده درخواست<span class="uk-badge  ms-1">102</span></a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class=" p-color nav-link" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-phone" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#48989B" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                        </svg>
                        <span>ارتباط با ما</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class=" p-color nav-link" href="#" tabindex="-1" aria-disabled="true">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-triangle" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#48989B" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M5 19h14a2 2 0 0 0 1.84 -2.75l-7.1 -12.25a2 2 0 0 0 -3.5 0l-7.1 12.25a2 2 0 0 0 1.75 2.75" />
                        </svg>
                        <span>درباره ما</span>
                    </a>
                </li>
                <li class="nav-item">

                </li>
            </ul>
            <div class="d-flex me-4">
                <a href="/wp_crud/views/auth/login/login.php"
                   class="btn btn-md btn-outline-primary p-color me-1">ورود</a>
                <a href="/wp_crud/views/auth/register/register.php" class="btn btn-md btn-outline-success p-color me-1">ثبت
                    نام</a>
                <a class="nav-link " type="button" uk-toggle="target: #offcanvas-overlay">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-info-square" width="32"
                         height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#009988" fill="none"
                         stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <line x1="12" y1="8" x2="12.01" y2="8"/>
                        <rect x="4" y="4" width="16" height="16" rx="2"/>
                        <polyline points="11 12 12 12 12 16 13 16"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</nav>


<div id="offcanvas-overlay" uk-offcanvas="overlay: true" class="cover">
    <div class="uk-offcanvas-bar">

        <button class="uk-offcanvas-close" type="button" uk-close></button>


        <h3>راهنمایی صفحه اصلی</h3>

        <p>این یک متن آزمایشی برای این قسمت است .</p>

        <a href=".#" class="uk-button uk-button-text">درباره ما</a>
    </div>
</div>