<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use Illuminate\Support\Facades\File;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $masjid = Gallery::select()->where('kategori', '=', 'Masjid')->get();
        $md = Gallery::select()->where('kategori', '=', 'Madrasah Diniyyah')->get();
        $pl = Gallery::select()->where('kategori', '=', 'Pengajian Lapanan')->get();
        $event = Gallery::select()->where('kategori', '=', 'Event')->get();

        return view('Admin.Menu.adminGallery', compact('masjid', 'md', 'pl', 'event'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nama = $request->nama_gambar;
        $namafile = $nama->getClientOriginalName();

        $upload = new Gallery;
        $upload->foto = $namafile;
        $upload->kategori = $request->kategori;

        $nama->move(public_path() . '/AsSidasGallery', $namafile);
        $upload->save();

       return redirect('adminGallery');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($request->nama_gambar == null ){

            $edit    = Gallery::find($id);

            $edit->update([
                'kategori'   => $request->kategori,
                'foto' => $request->nama_gambar_alternatif,
            ]);

            return redirect('adminGallery');

        }else{

            $edit    = Gallery::find($id);
            $pertama = $edit->foto;

            $request->nama_gambar->move(public_path() . '/AsSidasGallery', $pertama);

            $edit->update([
                'kategori'   => $request->kategori,
                'foto' => $pertama,
            ]);

            return redirect('adminGallery');

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gambar = Gallery::where('id', $id)->first();

        unlink(public_path() . '\AsSidasGallery/' . "$gambar->foto");
        // File::delete('public/AsSidasGallery/' . $gambar->foto);

        Gallery::where('id', $id)->delete();

        return redirect('adminGallery');
    }

    public function userview(){

        return view('menu.galeri');

    }
}
