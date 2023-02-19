<?php

namespace App\Controllers;

class Cool extends BaseController
{
	public function cool_calendar()
	{
		$data['IconMain']   = "calendar";
		$data['page_title_main'] = "Cool Features!";
		return view('cool-calendar', $data);
	}
	public function cool_gmap_xml()
	{
		$data['IconMain']   = "map-marker";
		$data['page_title_main'] = "Cool Features!";
		return view('cool-gmap-xml', $data);
	}
}
