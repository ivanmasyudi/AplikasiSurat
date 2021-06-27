<?php

namespace Modules\Login\Controllers;

use App\Controllers\BaseController;

class Login extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Login'
		];
		return view('Modules\Login\Views\Home', $data);
	}
}
