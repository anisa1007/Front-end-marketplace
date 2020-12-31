<?php

namespace App\Controllers;

class User extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Login | JehaShop'
        ];
        return view('user/login', $data);
    }
    public function login()
    {
        $data = [
            'title' => 'Login | JehaShop'
        ];
        return view('user/login', $data);
    }

    public function loginadmin()
    {
        $data = [
            'title' => 'Login Admin | JehaShop'
        ];
        return view('user/loginadmin', $data);
    }

    public function registrasi()
    {
        $data = [
            'title' => 'Registrasi | JehaShop'
        ];
        return view('user/registrasi', $data);
    }
}
