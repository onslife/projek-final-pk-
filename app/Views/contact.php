<?= $this->extend('layouts/template'); ?>
<?= $this->section('content') ?>
<div class="container mt-4">
    <div class="row">
        <div class="col-md-5 mx-auto">
            <h3 class="text-center text-light">Contact Us</h3>
            <div class="form-group text-light mb-2">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="" id="email" placeholder="">
            </div>
            <div class="form-group text-light mb-2">
                <label for="pesan">Pesan</label>
                <textarea class="form-control" name="" id="pesan" rows="4"></textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-2 col-12">Kirim</button>
        </div>
    </div>
</div>
<?= $this->endSection() ?>