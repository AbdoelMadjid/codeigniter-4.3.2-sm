<?php

namespace App\Controllers;

class Miscellaneous extends BaseController
{


	public function misc_pricing_table()
	{
		return view('misc-pricing-table');
	}
	public function misc_invoice()
	{
		return view('misc-invoice');
	}
	public function misc_login()
	{
		return view('misc-login');
	}
	public function misc_register()
	{
		return view('misc-register');
	}
	public function misc_forgotpassword()
	{
		return view('misc-forgotpassword');
	}
	public function misc_lock()
	{
		return view('misc-lock');
	}
	public function misc_email_template()
	{
		return view('misc-email-template');
	}
	public function misc_error404()
	{
		return view('misc-error404');
	}
	public function misc_error500()
	{
		return view('misc-error500');
	}
	public function misc_blank_()
	{
		return view('misc-blank_');
	}
	public function misc_chat()
	{
		return view('misc-chat');
	}
	public function misc_coming_soon()
	{
		return view('misc-coming-soon');
	}
}
