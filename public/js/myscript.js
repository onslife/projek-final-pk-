// $('#tombol-some').on('click', function () {
//     Swal.fire('Hello world', 'Berhasil aktif', 'success');
// });
$('#masuk').on('click', function () {
    var nama = document.getElementById("nama").value;
    var nama_blkg = document.getElementById("nama_blkg").value;
    var kelas = document.getElementById("kelas").value;
    if (nama === '' || nama_blkg === '' || kelas === '') {
        Swal.fire('Gagal Masuk', 'Masukan data terlebih dahulu', 'warning');
    }
})

const flashData=$('.flash-data').data('flashdata');
if(flashData){
	Swal.fire('Berhasil',flashData,'success')
}