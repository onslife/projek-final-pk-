<?php

namespace App\Models;

use CodeIgniter\Model;

class PengunjungModel extends Model
{
	protected $table='tbl_pengunjung';
	protected $createdField='waktu_masuk';
	protected $useTimestamps=true;
	protected $allowedFields=['nama_depan','nama_belakang','kelas'];
}