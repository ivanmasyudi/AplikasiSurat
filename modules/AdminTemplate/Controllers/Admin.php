<?php

namespace Modules\AdminTemplate\Controllers;

use App\Controllers\BaseController;

class Admin extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Admin'
		];
		return view('Modules\AdminTemplate\Views\index', $data);
	}
}
