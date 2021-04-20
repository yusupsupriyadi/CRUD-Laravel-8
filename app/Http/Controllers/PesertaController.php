<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use Illuminate\Http\Request;

class PesertaController extends Controller
{
    public function index()
    {
        $pesertas = Peserta::all();
        return view('peserta.index',compact(['pesertas']));
    }
    public function create()
    {
        return view('peserta.create');
    }
    public function store(Request $request)
    {
        Peserta::create($request->all());
        return redirect('/sukses');
    }
    public function edit($id)
    {
        $peserta = Peserta::find($id);
        return view('/peserta.edit',compact(['peserta']));
    }
    public function update(Request $request,$id)
    {
        $peserta = Peserta::find($id);
        $peserta->update($request->all());
        return redirect('/peserta');
    }
    public function delete($id)
    {
        $peserta = Peserta::find($id);
        $peserta->delete();
        return redirect('/peserta');
    }
    public function cetakPeserta()
    {
        $pesertas = Peserta::all();
        return view('peserta.cetakPeserta',compact(['pesertas']));
    }
}
