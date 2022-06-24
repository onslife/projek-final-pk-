<?php 

namespace App\Controllers;

class Belajar extends BaseController
{
	public function index(){
		$data=[
			'title'=>'Belajar Bangun Datar'
		];
		return view('materi',$data);
	}
}