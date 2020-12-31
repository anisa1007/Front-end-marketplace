<?php

namespace App\Controllers;

class Pages extends BaseController
{

    public function home()
    {
        $data = [
            'title' => 'Home | JehaShop'
        ];
        return view('pages/home', $data);
    }


    public function about()
    {
        $data = [
            'title' => 'About | JehaShop'
        ];
        return view('pages/about', $data);
    }


    public function contact()
    {
        $data = [
            'title' => 'Contact | JehaShop'
        ];
        return view('pages/contact', $data);
    }

    public function keranjang()
    {
        $data = [
            'title' => 'Keranjang Saya | JehaShop'
        ];
        return view('pages/keranjang', $data);
    }

    public function checkout()
    {
        $data = [
            'title' => 'Checkout | JehaShop'
        ];
        return view('pages/checkout', $data);
    }

    public function sukses()
    {
        $data = [
            'title' => 'CheckOut | JehaShop'
        ];
        return view('pages/sukses', $data);
    }

    public function payment()
    {
        $data = [
            'title' => 'CheckOut | JehaShop'
        ];
        return view('pages/payment', $data);
    }
}
