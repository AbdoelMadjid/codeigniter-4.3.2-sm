<?php

namespace App\Controllers;

class Ecommerce extends BaseController
{
	public function ecommerce_orders()
	{
		$data = [
            'IconMain'=>'shopping-cart',
            'page_title_main'=>'E-Commerce'
		];
		return view('ecommerce-orders', $data);
	}
	public function ecommerce_products_view()
	{
		$data = [
            'IconMain'=>'shopping-cart',
            'page_title_main'=>'E-Commerce'
		];
		return view('ecommerce-products-view', $data);
	}
	public function ecommerce_products_detail()
	{
		$data = [
            'IconMain'=>'shopping-cart',
            'page_title_main'=>'E-Commerce'
		];
		return view('ecommerce-products-detail', $data);
	}
}
