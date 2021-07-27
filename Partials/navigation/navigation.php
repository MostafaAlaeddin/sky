<nav class="navbar navbar-expand-lg navbar-light" id="navigation">
    <div class="container-fluid">
        <a class="navbar-brand" href="./index.php">علاءالدین</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 300px;">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/wp_crud/index.php">خانه</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <span>درخواست ها</span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                        <li><a class="dropdown-item" href="#">مشاهده درخواست</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">درج درخواست جدید</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">ارتباط با ما</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">درباره ما</a>
                </li>
            </ul>
            <div class="d-flex me-4">
                <a href="/wp_crud/views/auth/login/login.php" class="btn btn-md btn-outline-primary me-1">ورود</a>
                <a href="/wp_crud/views/auth/register/register.php" class="btn btn-md btn-outline-success me-1">ثبت نام</a>
            </div>
        </div>
    </div>
</nav>