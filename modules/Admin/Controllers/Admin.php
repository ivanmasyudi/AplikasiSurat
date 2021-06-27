<?php

namespace Modules\Admin\Controllers;

use App\Controllers\BaseController;

class Admin extends BaseController
{
	public function __construct()
    {
        $this->session = session();
    }

	public function index()
	{
		//cek apakah ada session bernama isLogin
        if(!$this->session->has('isLogin')){
            return redirect()->to(base_url());
        }

		$data = [
			'title' => 'Admin Dashboard'
		];
		return view('Modules\Admin\Views\Dashboard', $data);
	}
}
