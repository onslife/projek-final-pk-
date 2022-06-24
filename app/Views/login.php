<?= $this->extend('layouts/template'); ?>
<?= $this->section('content'); ?>
<div class="container ">
    <div class="row">
        <div class="p-4 mt-4 rounded-3 mx-auto col-lg-4" style="background-color: #27282e;" align="center">
            <h2 class="text-center text-light mt-4 mb-4">Registrasi</h2>
            <div>
                <form action="/simpan" autocomplete="off" method="post">
                    <div class="form-kontrol">
                        <?= csrf_field() ?>
                        <input type="text" required autofocus id="nama" name="nama_depan" >
                        <label>
                            <span style="transition-delay: 0ms">N</span>
                            <span style="transition-delay: 50ms">a</span>
                            <span style="transition-delay: 100ms">m</span>
                            <span style="transition-delay: 150ms">a</span>
                            <span style="transition-delay: 200ms"> </span>
                            <span style="transition-delay: 250ms">D</span>
                            <span style="transition-delay: 300ms">e</span>
                            <span style="transition-delay: 350ms">p</span>
                            <span style="transition-delay: 400ms">a</span>
                            <span style="transition-delay: 450ms">n</span>

                        </label>
                    </div>
                    <div class="form-kontrol">
                        <input type="text" required id="nama_blkg" name="nama_belakang" >
                        <label>
                            <span style="transition-delay: 0ms">N</span>
                            <span style="transition-delay: 50ms">a</span>
                            <span style="transition-delay: 100ms">m</span>
                            <span style="transition-delay: 150ms">a</span>
                            <span style="transition-delay: 200ms"> </span>
                            <span style="transition-delay: 250ms">B</span>
                            <span style="transition-delay: 300ms">e</span>
                            <span style="transition-delay: 350ms">l</span>
                            <span style="transition-delay: 400ms">a</span>
                            <span style="transition-delay: 450ms">k</span>
                            <span style="transition-delay: 500ms">a</span>
                            <span style="transition-delay: 550ms">n</span>
                            <span style="transition-delay: 600ms">g</span>
                        </label>
                    </div>
                    <div class="form-kontrol">
                        <input type="text" required id="kelas" name="kelas" >
                        <label>
                            <span style="transition-delay: 0ms">K</span>
                            <span style="transition-delay: 50ms">e</span>
                            <span style="transition-delay: 100ms">l</span>
                            <span style="transition-delay: 150ms">a</span>
                            <span style="transition-delay: 150ms">s</span>
                        </label>
                    </div>
                    <button type="submit" id="masuk" class="button"><span></span><span></span><span></span>Masuk</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>