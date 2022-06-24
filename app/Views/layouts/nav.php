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
                <a href="/registrasi" class="join-us btn rounded-5 bg-light">JOIN US</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</nav>