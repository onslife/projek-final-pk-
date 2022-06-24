<?= $this->extend('layouts/template'); ?>
<?= $this->section('content'); ?>
<div class="mb-4 jumbo text-light rounded-2">
    <div class="container py-3">
        <div class="flash-data" data-flashdata="<?= session()->getFlashData('pesan') ?>"></div>
        <h1 class="display-8">Selamat Datang di Website <b style='color:#999' class="fw-bold">SmartMath</b></h1>
        <p class="col-md-8 mx-auto">Using a series of utilities, you can create this jumbotron, just like the one in
            previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your
            liking.</p>
            <a href="/belajar" class="btn-primary btn" id="tombol-some">Belajar Sekarang</a>
        <!-- <button class="btn btn-primary btn-lg" id="tombol-some" type="button">Belajar Sekarang</button> -->
    </div>
</div>
<div class="aplikasi p-3 d-flex justify-content-around">
    <div class="row justify-content-center bg-light">
        <div class="col-sm d-flex justify-content-center mb-3 ">
            <div class="card" style="width: 18rem;">
                <img src="./img/kubus.jpg" width="16rem" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Lorem, ipsum dolor.</p>
                    <a href="#" class="btn btn-primary">Coba</a>
                </div>
            </div>
        </div>
        <div class="col-sm d-flex justify-content-center mb-3">
            <div class="card" style="width: 18rem;">
                <img src="./img/kubus.jpg" width="16rem" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example</p>
                    <a href="#" class="btn btn-primary">Coba</a>
                </div>
            </div>
        </div>
        <div class="col-sm d-flex justify-content-center mb-3">
            <div class="card" style="width: 18rem;">
                <img src="./img/kubus.jpg" width="16rem" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example</p>
                    <a href="#" class="btn btn-primary">Coba</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <iframe class="col-12" style='height:700px;' style="max-width:100%" src="https://wordwall.net/embed/985e4a0894b34cfd92a6559b7a5baabf?themeId=22&templateId=71&fontStackId=0" width="500" height="380" frameborder="0" allowfullscreen></iframe>
</div>
<?= $this->endSection(); ?>