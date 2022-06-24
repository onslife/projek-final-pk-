<?php

namespace App\Controllers;
use App\Models\PengunjungModel;
class Pages extends BaseController
{
    protected $PengunjungModel;
    public function __construct(){
        $this->PengunjungModel=new PengunjungModel();
    }
    public function login(){
        $data=[
            'title'=>'Registrasi'
        ];
        return view('login',$data);
    }
    public function home()
    {
        $data=[
            'title'=>'Home'
        ];
        return view('home',$data);
    }

    public function about(){
        $data=[
            'title'=>'About Us'
        ];
        return view('about',$data);
    }

    public function contact(){
        $data=[
            'title'=>'Contact Us'
        ];
        return view('contact',$data);
    }

    public function simpan()
    {
        $this->PengunjungModel->save([
            'nama_depan' => $this->request->getVar('nama_depan'),
            'nama_belakang' => $this->request->getVar('nama_belakang'),
            'kelas' => $this->request->getVar('kelas'),
        ]);
        session()->setFlashData('pesan','Data berhasil ditambahkan');
        return redirect()->route('/');
    }
}
