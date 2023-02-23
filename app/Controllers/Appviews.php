<?php

namespace App\Controllers;

class Appviews extends BaseController
{
	public function views_projects()
	{
		$data = [
			'IconMain'=>'file-text-o',
			'page_title_main'=>'App Views'
		];
		return view('views-projects', $data);
	}
	public function views_blog()
	{
		$data = [
			'IconMain'=>'paragraph',
			'page_title_main'=>'App Views'
		];
		return view('views-blog', $data);
	}
	public function views_gallery()
	{
		$data = [
			'IconMain'=>'picture-o',
			'page_title_main'=>'App Views'
		];
		return view('views-gallery', $data);
	}
	public function views_forum()
	{
		$data = [
			'IconMain'=>'comments',
			'page_title_main'=>'App Views'
		];
		return view('views-forum', $data);
	}
	public function views_forum_topic()
	{
		$data = [
			'IconMain'=>'comments',
			'page_title_main'=>'App Views'
		];
		return view('views-forum-topic', $data);
	}
	public function views_forum_post()
	{
		$data = [
			'IconMain'=>'comments',
			'page_title_main'=>'App Views'
		];
		return view('views-forum-post', $data);
	}
	public function views_profile()
	{
		$data = [
			'IconMain'=>'user-circle-o',
			'page_title_main'=>'App Views'
		];		
		return view('views-profile', $data);
	}
	public function views_timeline()
	{
		$data = [
			'IconMain'=>'clock-o',
			'page_title_main'=>'App Views'
		];			
		return view('views-timeline', $data);
	}
	public function views_search()
	{
		$data = [
			'IconMain'=>'search',
			'page_title_main'=>'App Views'
		];
		return view('views-search', $data);
	}
}
