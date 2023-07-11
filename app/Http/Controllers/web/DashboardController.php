<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function getTitle()
    {
        return "Dashboard";
    }

    public function index()
    {
        $data['data'] = [];
        $view = view('dashboard', $data);
        $put['title_content'] = $this->getTitle();
        $put['title_top'] = $this->getTitle();
        $put['view_file'] = $view;

        return view('template.main', $put);
    }
}
