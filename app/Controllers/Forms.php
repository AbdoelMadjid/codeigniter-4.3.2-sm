<?php

namespace App\Controllers;

class Forms extends BaseController
{

	public function form_elements()
	{
		$data = [
			'IconMain' => 'edit',
			'page_title_main' => 'Form'
		];
		return view('form-elements', $data);
	}
	public function form_layout()
	{
		$data = [
			'IconMain' => 'edit',
			'page_title_main' => 'Form'
		];
		return view('form-layout', $data);
	}
	public function form_validation()
	{
		$data = [
			'IconMain' => 'edit',
			'page_title_main' => 'Form'
		];
		return view('form-validation', $data);
	}
	public function form_bootstrap_forms()
	{
		$data = [
			'IconMain' => 'edit',
			'page_title_main' => 'Form'
		];
		return view('form-bootstrap-forms', $data);
	}
	public function form_plugins()
	{
		$data = [
			'IconMain' => 'edit',
			'page_title_main' => 'Form'
		];
		return view('form-plugins', $data);
	}
	public function form_wizard()
	{
		$data = [
			'IconMain' => 'edit',
			'page_title_main' => 'Form'
		];
		return view('form-wizard', $data);
	}
	public function form_other_editors()
	{
		$data = [
			'IconMain' => 'edit',
			'page_title_main' => 'Form'
		];
		return view('form-other-editors', $data);
	}
	public function form_dropzone()
	{
		$data = [
			'IconMain' => 'edit',
			'page_title_main' => 'Form'
		];
		return view('form-dropzone', $data);
	}
	public function form_image_editor()
	{
		$data = [
			'IconMain' => 'edit',
			'page_title_main' => 'Form'
		];
		return view('form-image-editor', $data);
	}
	public function form_ckeditor()
	{
		$data = [
			'IconMain' => 'edit',
			'page_title_main' => 'Form'
		];
		return view('form-ckeditor', $data);
	}
}
