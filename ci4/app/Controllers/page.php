<?php 
namespace App\Controllers;
class page extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Selamat datang | Unipdu Press',
            'tes' => ['Satu, dua, tiga']
        ];

        return view ('page/home', $data);
        
    }
    
    public function about()
    {
        $data= [
            'title' => 'Tentang kami | Unipdu Press',
        ];
        
        return view ('page/about', $data);
        
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact | Unipdu Press',
            'alamat' => [
                ['tipe' => 'Rumah', 'alamat' => 'Desa Kalipang Sarang', 'kota' => 'Rembang'],
                ['tipe' => 'Kantor', 'alamat' => 'Kalipang Sarang', 'kota' => 'Rembang']
            ]
        ];
        return view('page/contact', $data);
    }
}