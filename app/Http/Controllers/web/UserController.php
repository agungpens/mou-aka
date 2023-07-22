<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function getTitle()
    {
        return "Profile";
    }

    public function index($id)
    {
        $userdata = DB::table('users as usr')
            ->select(['usr.*'])
            ->where('usr.id', '=', $id)
            ->first();

        if ($userdata == null) {
            return view('404');
        }

        $data['data'] = [
            'id' => $id
        ];
        $view = view('page.user.profile', $data);
        $put['title_content'] = $this->getTitle();
        $put['title_top'] = $this->getTitle();
        $put['view_file'] = $view;

        return view('template.main', $put);
    }
}
