<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;
use Illuminate\Support\Facades\DB;

class PelangganController extends Controller
{
    public function index(Request $request)
    {
        $filter = $request->filter;

        $data = Pelanggan::select('*');
        if ($filter) {
            $data = $data->where('name', 'like', '%'.$filter.'%');
        }

        $data = $data->get();

        $module = 'Pelanggan';

        return view('pages.pelanggan.main', 
            ['list' => $data, 'module' => $module, 'filter' => $filter]
        ); 
    }

    public function add()
    {
        $title = 'Tambah Pelanggan';

        return view('pages.pelanggan.add', ['title' => $title]);
    }

    public function edit($id)
    {
        $title = 'Edit Pelanggan';
        
        // untuk get data pelanggan berdasarkan id
        $data = Pelanggan::find($id);

        return view('pages.pelanggan.edit', 
            [
                'title' => $title,
                'data' => $data
            ]
        );
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

    public function destroy($id)
    {
        $query = Pelanggan::where('id', $id)->delete();

        return redirect()->to('/pelanggan');
    }
}
