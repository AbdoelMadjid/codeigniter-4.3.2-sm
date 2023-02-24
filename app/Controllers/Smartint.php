<?php

namespace App\Controllers;

class Smartint extends BaseController
{

	public function smartint_layouts()
	{
		return view('smartint-layouts');
	}
	public function smartint_skins()
	{
		return view('smartint-skins');
	}
	public function smartint_applayout()
	{
		$data = [
			'IconMain' => 'cube',
			'page_title_main' => 'SmartAdmin Intel'
		];
		return view('smartint-applayout', $data);
	}
	public function smartint_difver()
	{
		return view('smartint-difver');
	}
}
