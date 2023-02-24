<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function dashboard_analytics()
    {
        $data = [
            'IconMain' => 'home',
            'page_title_main' => 'Dashboard'
        ];
        return view('dashboard-analytics', $data);
    }
    public function dashboard_marketing()
    {
        $data = [
            'IconMain' => 'home',
            'page_title_main' => 'Dashboard'
        ];
        return view('dashboard-marketing', $data);
    }
    public function dashboard_social()
    {
        $data = [
            'IconMain' => 'home',
            'page_title_main' => 'Dashboard'
        ];
        return view('dashboard-social', $data);
    }
}
