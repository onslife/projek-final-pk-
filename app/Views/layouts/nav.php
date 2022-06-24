<!-- 
<nav class="navbar d-flex navbar-expand-lg bg-dark navbar-dark">
    <div class="container">
        <a class="navbar-brand fw-semibold" href="/home">Smart Math</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact Us</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="/daftar-aplikasi" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Daftar Aplikasi
                    </a>
                    <ul class="dropdown-menu" style="transition: .7s;" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Kalkulator</a></li>
                        <li><a class="dropdown-item" href="#">Menghitung Luas Bangun Datar</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav> -->
<nav class="navbar navbar-expand-lg bg-light navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="#">SmartMath</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
                <a class="nav-link" aria-current="page" href="/">Dashboard<i></i></a>
                <a class="nav-link" href="/about">About Us<i></i></a>
                <a class="nav-link" href="/contact">Contact Us<i></i></a>
                <?php if($title!='Registrasi'): ?>
                <a href="/registrasi" class="join-us btn rounded-5s bg-light">JOIN US</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</nav>