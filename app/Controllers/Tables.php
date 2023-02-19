<?php

namespace App\Controllers;

class Tables extends BaseController
{

	public function table_normal()
	{
		$data['IconMain']   = "table";
		$data['page_title_main'] = "Tables";
		return view('table-normal', $data);
	}
	public function table_datatables()
	{
		$data['IconMain']   = "table";
		$data['page_title_main'] = "Tables";
		return view('table-datatables', $data);
	}
	public function table_jqgrid()
	{
		$data['IconMain']   = "table";
		$data['page_title_main'] = "Tables";
		return view('table-jqgrid', $data);
	}
}
