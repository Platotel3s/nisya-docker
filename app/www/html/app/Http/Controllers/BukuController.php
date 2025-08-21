<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        $bukus=Buku::all();
        return view('book.index',compact('bukus'));
    }
    public function create()
    {
        return view('book.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'judul'=>'required',
            'author'=>'required',
            'kategori'=>'required',
            'qty'=>'required',
            'img'=>'required|mimes:png,jpg,jpeg|max:2048',
        ]);
        $pathImage=null;
        if ($request->hasFile('img')) {
            $ext=$request->file('img')->getClientOriginalExtension();
            $namaFile=now()->format('YmdHis').'.'.$ext;
            $pathImage=$request->file('img')->storeAs('gambar_buku',$namaFile,'public');
        }
        $bukus=Buku::create([
           'judul'=>$request->judul,
           'author'=>$request->author,
           'kategori'=>$request->kategori,
           'qty'=>$request->qty,
           'img'=>$pathImage
        ]);
        return redirect()->route('index.buku');
    }
    public function show(string $id)
    {
        $bukus=Buku::findOrFail($id);
        return view('buku.show',compact('bukus'));
    }
    public function edit(string $id)
    {
        $bukus=Buku::findOrFail($id);
        return view('book.edit',compact('bukus'));
    }
    public function update(Request $request, string $id)
    {
        $request->validate([
            'judul'=>'required',
            'author'=>'required',
            'kategori'=>'required',
            'qty'=>'required',
            'img'=>'required|mimes:png,jpg,jpeg|max:2048',
        ]);
        $pathImage=null;
        if ($request->hasFile('img')) {
            $ext=$request->file('img')->getClientOriginalExtension();
            $namaFile=now()->format('YmdHis').'.'.$ext;
            $pathImage=$request->file('img')->storeAs('gambar_buku',$namaFile,'public');
        }
        $bukus=Buku::findOrFail($id);
        $bukus->update([
            'judul'=>$request->judul,
            'author'=>$request->author,
            'kategori'=>$request->kategori,
            'img'=>$pathImage,
        ]);
        return redirect()->route('index.buku');
    }
    public function destroy(string $id)
    {
        $bukus=Buku::findOrFail($id);
        $bukus->delete();
        return redirect()->route('index.buku');
    }
}
