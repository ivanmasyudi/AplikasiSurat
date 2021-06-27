<?php

namespace Modules\SuratMasuk\Controllers;

use App\Controllers\BaseController;

use Modules\SuratMasuk\Models\SuratmasukModel;

class Suratmasuk extends BaseController
{
	protected $suratmasukmodel;

	public function __construct()
	{
		$this->suratmasukmodel = new SuratmasukModel();

        //meload validation
        $this->validation = \Config\Services::validation();

        //meload session
        $this->session = \Config\Services::session();
	}


	public function index()
	{
    $srtmsk = $this->suratmasukmodel->findAll();
    // dd($srtmsk);
		$data = [
			'title' => 'Surat Masuk',
      'suratmasuk' => $srtmsk
			// 'validation' => $this->validation
		];

		return view('Modules\SuratMasuk\Views\Suratmasuk_v', $data);
	}

  public function tambah()
  {
    $data = [
      'title' => 'Tambah Surat Masuk'
    ];

    return view('Modules\SuratMasuk\Views\Addsuratmsk_v', $data);
  }

	// public function cekLogin()
  //   {
	// 		if (!$this->validate([
	// 			'username' => [
	// 				'rules' => 'required|alpha_numeric',
	// 				'errors' => [
	// 					'required' => '{field} tidak boleh kosong',
	// 					'alpha_numeric' => '{field} hanya boleh mengandung huruf dan angka'
  //          ]
	// 			],
  //       'password' => [
	// 				'rules' => 'required|min_length[8]|alpha_numeric_punct',
	// 				'errors' => [
	// 					'required' => '{field} tidak boleh kosong',
	// 					'min_length' => '{field} harus terdiri dari 8 kata',
	// 					'alpha_numeric_punct' => '{field} hanya boleh mengandung angka, huruf, dan karakter yang valid'
  //          ]
	// 			]
	// 			])) {
	// 				// dd($this->validation);
	// 				return redirect()->to(base_url())->withInput()->with('validation', $this->validation);
	// 		}
	// 		//ambil data dari form
	// 		$data = $this->request->getPost();
  //
	// 		//ambil data user di database yang usernamenya sama
	// 		$user = $this->authmodel->where('username', $data['username'])->first();
	// 		//cek apakah username ditemukan
	// 		if($user){
	// 				//cek password
	// 				//jika salah arahkan lagi ke halaman login
	// 				if($user['password'] != $data['password']){
	// 						session()->setFlashdata('password', 'Password salah');
	// 						return redirect()->to(base_url());
	// 				}
	// 				else{
	// 						//jika benar, arahkan user masuk ke aplikasi
	// 						$sessLogin = [
	// 								'isLogin' => true,
	// 								'username' => $user['username'],
	// 								'level' => $user['level']
	// 								];
	// 						$this->session->set($sessLogin);
	// 						// cek level
	// 						if ($this->session->get('level') != 1) {
	// 							return redirect()->to('/user');
	// 						} else {
	// 							return redirect()->to('/admin/Dashboard');
	// 						}
  //
	// 				}
	// 		}
	// 		else{
	// 				//jika username tidak ditemukan, balikkan ke halaman login
	// 				session()->setFlashdata('username', 'Username tidak ditemukan');
	// 				return redirect()->to(base_url());
	// 		}
  //   }
  //
  //   public function logout()
  //   {
  //       //hancurkan session
  //       //balikan ke halaman login
  //       $this->session->destroy();
  //       return redirect()->to(base_url());
  //   }
}
