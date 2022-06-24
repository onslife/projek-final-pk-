<?= $this->extend('layouts/template'); ?>
<?= $this->section('content'); ?>
<div class="container mt-4 d-flex flex-column justify-content-center">
    <div class="row">
        <h3 class="text-center mb-3 text-light">About Us</h3>
        <div class="col-sm mx-auto mb-4 d-flex justify-content-center">
            <div class="card p-2 text-center" style="width: 18rem;">
                <!-- <img src="./img/lingkaran.jpg" class="card-img-top" alt="..."> -->
                <i class="bi bi-person-circle card-img-top text-center display-1"></i>
                <div class="card-body">
                    <h5 class="card-title">Al Afiah Ifrah Aulia</h5>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#alfiah">
                        Detail
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="alfiah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Detail</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm mb-4 d-flex justify-content-center">
            <div class="card p-2 text-center" style="width: 18rem;">
                <div>
                    <img src="./img/alfons.jpg" class="shadow-lg rounded-circle border border-2" width="150px" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Alfons pia</h5>
                    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#alfons">
                        Detail
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="alfons" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content bg-dark text-light">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Detail</h5>
                                    <button type="button" class="btn-close" style="background-color: white;" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <table class="table text-start table-dark table-hover">
                                        <tr>
                                            <td>Nama</td>
                                            <td>Alfons Pia</td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td>piaalfons@gmail.com</td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal Lahir</td>
                                            <td>11 Februari 2004</td>
                                        </tr>
                                        <tr>
                                            <td>Jurusan</td>
                                            <td>Pendidikan Matematika</td>
                                        </tr>
                                        <tr>
                                            <td>Kelas</td>
                                            <td>A</td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm mb-4 d-flex justify-content-center ">
            <div class="card p-2 text-center" style="width: 18rem;">
                <!-- <img src="./img/lingkaran.jpg" class="card-img-top" alt="..."> -->
                <i class="bi bi-person-circle card-img-top text-center display-1"></i>
                <div class="card-body">
                    <h5 class="card-title">Sukma Abdil Mahbub</h5>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#abub">
                        Detail
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="abub" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Detail</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>