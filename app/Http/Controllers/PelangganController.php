<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;

class PelangganController extends Controller
{
    public function index()
    {
        $data = Pelanggan::get();

        return view('pages.pelanggan.main', ['data' => $data]); 
    }

    public function add()
    {
        return view('pages.pelanggan.add');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $query = new Pelanggan();
        if (isset($data['id']) && !empty($data['id'])) {
            $query = $query->find($data['id']);
        }
        $query = $query->fill($data);
        $query->save();

        return redirect()->to('/pelanggan');
    }
}
