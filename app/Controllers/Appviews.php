<?php

namespace App\Controllers;

class Appviews extends BaseController
{
	public function views_projects()
	{
		$data['IconMain']   = "file-text-o";
		$data['page_title_main'] = "App Views";
		return view('views-projects', $data);
	}
	public function views_blog()
	{
		$data['IconMain']   = "paragraph";
		$data['page_title_main'] = "App Views";
		return view('views-blog', $data);
	}
	public function views_gallery()
	{
		$data['IconMain']   = "picture-o";
		$data['page_title_main'] = "App Views";
		return view('views-gallery', $data);
	}
	public function views_forum()
	{
		$data['IconMain']   = "comments";
		$data['page_title_main'] = "App Views";
		return view('views-forum', $data);
	}
	public function views_forum_topic()
	{
		$data['IconMain']   = "comments";
		$data['page_title_main'] = "App Views";
		return view('views-forum-topic', $data);
	}
	public function views_forum_post()
	{
		$data['IconMain']   = "comments";
		$data['page_title_main'] = "App Views";
		return view('views-forum-post', $data);
	}
	public function views_profile()
	{
		$data['IconMain']   = "user-circle-o";
		$data['page_title_main'] = "App Views";
		return view('views-profile', $data);
	}
	public function views_timeline()
	{
		$data['IconMain']   = "clock-o";
		$data['page_title_main'] = "App Views";
		return view('views-timeline', $data);
	}
	public function views_search()
	{
		$data['IconMain']   = "search";
		$data['page_title_main'] = "App Views";
		return view('views-search', $data);
	}
}
