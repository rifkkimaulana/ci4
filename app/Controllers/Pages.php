<?php
namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home'
        ];
        echo view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About'
        ];
        echo view('pages/about', $data);
    }
    public function contact()
    {
        $data = [
            'title' => 'Contact Us',
            'alamat' => [
                [
                    'tipe' => 'rumah',
                    'alamat' => 'Jl. Abc 1',
                    'kota' => 'bandung'
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'Jl. Abc 2',
                    'kota' => 'bandung'
                ]
            ]
        ];
        echo view('pages/contact', $data);
    }
    //--------------------------------------------------------------------
}