<?php

namespace App\Http\Controllers;

use App\DataTables\KategoriDataTable;
use App\Http\Requests\StorePostRequest;
use App\Models\KategoriModel;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\VarDumper\Caster\RedisCaster;


class KategoriController extends Controller
{
    public function index(KategoriDataTable $dataTable) {
       /* $data = [
            'kategori_kode' => 'SNK',
            'kategori_nama' => 'Snack/Makanan Ringan',
            'created_at' => now()
        ];
        DB::table('m_kategori')->insert($data);
        return 'Insert data baru berhasil';

        $row = DB::table('m_kategori')->where('kategori_kode', 'SNK')->update(['kategori_nama'=>'Camilan']);
        return 'Update data berhasil. Jumlah data yang diupdate : '.$row.' baris';
        
        $row = DB::table('m_kategori')->where('kategori_kode','SNK')->delete();
        return 'Delete data berhasil. Jumlah data yang dihapus : '.$row.' baris';
        
        $data = DB::table('m_kategori')->get();
        return view('kategori', ['data' => $data]); */
        
        return $dataTable->render('kategori.index');
    }

    public function create(){
        return view('kategori.create');
    }

     // public function store(Request $request)
    // {
    //     KategoriModel::create([
    //         'kategori_kode' => $request->kategori_kode,
    //         'kategori_nama' => $request->kategori_nama,
    //     ]);
    //     return redirect('/kategori');
    // }

    // JS 6 B bagian 3
      // public function store(Request $request):RedirectResponse
    // {
    //     $validation = $request->validate([
    //         'kategori_kode' => 'bail|required|unique:m_kategori|max:255',
    //         'kategori_nama' => 'required',
    //     ]);

    //     return redirect('/kategori');
    // }

    // JS 6 B bagian 2
    public function store(StorePostRequest $request): RedirectResponse{
        $validated = $request->validated();

        $validated = $request->safe()->only('kategori_kode', 'kategori_nama');
        $validated = $request->safe()->except('kategori_kode', 'kategori_nama');

        return redirect('/kategori');
    
    }

    public function edit($id)
    {
        $data = KategoriModel::find($id);
        return view('kategori.edit', ['data' => $data]);
    }

    public function update($id, Request $request)
    {
        $kategori= KategoriModel::find($id);

        $kategori->kategori_kode = $request->kategori_kode;
        $kategori->kategori_nama = $request->kategori_nama;

        $kategori->save();
        return redirect('/kategori');
    }

    public function delete($id)
    {
        $data = KategoriModel::find($id);
        $data->delete();
        return redirect('/kategori');
    }

}
