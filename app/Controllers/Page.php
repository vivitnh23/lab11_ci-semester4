<?php
namespace App\Controllers;

class Page extends BaseController
{
    public function about()
    {
        return view('about', [
            'title' => 'Halaman About',
            'content' => 'Ini adalah halaman about yang menjelaskan tentang isi halaman ini.'
        ]);
    }

    public function contact()
    {
        return view('about', [ // Menggunakan view yang sama agar layout konsisten
            'title' => 'Halaman Kontak',
            'content' => 'Silakan hubungi kami melalui email atau media sosial.'
        ]);
    }
}