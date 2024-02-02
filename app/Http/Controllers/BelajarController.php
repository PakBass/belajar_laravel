<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BelajarController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Project XI RPL',
            'nama'  => 'Kelas XI RPL',
            'total' => '25 siswa'
        ];
        return view('index', $data);
    }

    public function berita()
    {
        $data = [
            'title' => 'Project XI RPL',
            'news'  => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, sint fugiat. Cum a eveniet minima quam ipsa quisquam reiciendis, quis in sequi iste porro repellendus voluptatibus quas corporis. Vel rem minus reiciendis nisi minima, perferendis quas animi odio nam sint iure voluptas, saepe inventore deleniti. Iusto nihil dignissimos voluptatem velit unde aspernatur. Quia voluptates laboriosam a officia facilis reprehenderit est, libero sunt ab sed et illo quis delectus nihil. Reprehenderit accusantium itaque neque vitae quod. Dolor asperiores ad voluptatem commodi porro dolorem iusto minus corrupti tenetur blanditiis unde sint temporibus, animi cupiditate provident molestias sunt. Commodi quos quidem deserunt corporis.',
        ];
        return view('berita', $data);
    }

    public function clone_x()
    {
        return view('clone_x.index', [
            'title'     => "Clone X"
        ]);
    }
    public function latihan_b5()
    {
        return view('latihan.index', [
            'title'     => "Latihan B5"
        ]);
    }
}

