<?php

namespace App\Controllers;

class Widget extends BaseController
{

	public function widgets()
	{
		$data['IconMain']   = "list-alt";
		$data['page_title_main'] = "Widgets";
		return view('widgets', $data);
	}
}
