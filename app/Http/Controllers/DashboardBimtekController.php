<?php

namespace App\Http\Controllers;

use App\Models\Bimtek;
use Illuminate\Http\Request;

class DashboardBimtekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.bimtek.index', [
            'bimtek' => Bimtek::latest()->paginate(10)->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.bimtek.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'subtitle' => 'max:255',
            'image' => 'required|image|file|max:1024',
            'image_brosur' => 'image|file|max:1024',
            'paket' => 'required',
            'advantage' => 'required',
            'body' => 'required'
        ]);

        // menyimpan data file yang diupload ke variabel $file
		$file = $request->file('image');
        $tujuan_upload = 'assets/img/bimtek';
        $file->move($tujuan_upload,$file->getClientOriginalName());
        $validated['image'] = $file->getClientOriginalName();

        if ($request->file('image_brosur')) {
        $fileBrosur = $request->file('image_brosur');
        $tujuan_upload_brosur = 'assets/img/bimtek/brosur';
        $fileBrosur->move($tujuan_upload_brosur,$fileBrosur->getClientOriginalName());
        $validated['image_brosur'] = $fileBrosur->getClientOriginalName();
        }

        Bimtek::create($validated);

        return redirect('/dashboard/bimtek')->with('success', 'Berhasil menambah data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bimtek  $bimtek
     * @return \Illuminate\Http\Response
     */
    public function show(Bimtek $bimtek)
    {
        return view('dashboard.bimtek.show', [
            'bimtek' => $bimtek
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bimtek  $bimtek
     * @return \Illuminate\Http\Response
     */
    public function edit(Bimtek $bimtek)
    {
        return view('dashboard.bimtek.edit', [
            'bimtek' => $bimtek
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bimtek  $bimtek
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bimtek $bimtek)
    {
        $rules = [
            'title' => 'required|max:255',
            'subtitle' => 'max:255',
            'image' => 'image|file|max:1024',
            'image_brosur' => 'image|file|max:1024',
            'paket' => 'required',
            'advantage' => 'required',
            'body' => 'required'
        ];

        $validated = $request->validate($rules);
            
        if ($request->file('image')) {
            @unlink('assets/img/bimtek/'.$request->oldImage);
            
            // menyimpan data file yang diupload ke variabel $file
            $tujuan_upload = 'assets/img/bimtek';
            $file = $request->file('image');
            $file->move($tujuan_upload,$file->getClientOriginalName());
            $validated['image'] = $file->getClientOriginalName();
        }

        if ($request->file('image_brosur')) {
            @unlink('assets/img/bimtek/brosur/'.$request->oldImageBrosur);
            
            // menyimpan data file yang diupload ke variabel $file
            $tujuan_upload = 'assets/img/bimtek/brosur';
            $file = $request->file('image_brosur');
            $file->move($tujuan_upload,$file->getClientOriginalName());
            $validated['image_brosur'] = $file->getClientOriginalName();
        }

        Bimtek::where('id', $bimtek->id)
        ->update($validated);

        return redirect('/dashboard/bimtek')->with('success', 'Post sudah diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bimtek  $bimtek
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bimtek $bimtek)
    {
        @unlink('assets/img/bimtek/'.$bimtek->image);
        @unlink('assets/img/bimtek/brosur/'.$bimtek->image_brosur);
        
        Bimtek::destroy($bimtek->id);

        return redirect('/dashboard/bimtek')->with('success', 'Post sudah dihapus');
    }
}
