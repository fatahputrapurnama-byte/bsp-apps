<?php

namespace App\Http\Controllers;

use App\Models\Training;
use Illuminate\Http\Request;


class DashboardPelatihanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.pelatihan.index', [
            'trainings' => Training::latest()->paginate(10)->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pelatihan.create');
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
            'image' => 'image|file|max:1024',
            'image_brosur' => 'image|file|max:1024',
            'image_jadwal' => 'image|file|max:1024',
            'paket' => 'required',
            'advantage' => 'required',
            'body' => 'required'
        ]);

        // menyimpan data file yang diupload ke variabel $file
		$file = $request->file('image');
        $tujuan_upload = 'assets/img/training';
        $file->move($tujuan_upload,$file->getClientOriginalName());
        $validated['image'] = $file->getClientOriginalName();
        
        if ($request->file('image_brosur')) {
		$fileBrosur = $request->file('image_brosur');
        $tujuan_upload_brosur = 'assets/img/training/brosur';
        $fileBrosur->move($tujuan_upload_brosur,$fileBrosur->getClientOriginalName());
        $validated['image_brosur'] = $fileBrosur->getClientOriginalName();
        }
        
        if ($request->file('image_jadwal')) {
		$fileJadwal = $request->file('image_jadwal');
        $tujuan_upload_jadwal = 'assets/img/training/jadwal';
        $fileJadwal->move($tujuan_upload_jadwal,$fileJadwal->getClientOriginalName());
        $validated['image_jadwal'] = $fileJadwal->getClientOriginalName();
        }

        Training::create($validated);

        return redirect('/dashboard/pelatihan')->with('success', 'Berhasil menambah data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Training  $training
     * @return \Illuminate\Http\Response
     */
    public function show(Training $pelatihan)
    {
        // if ($post->user->id !== auth()->user()->id) {
        //     abort(403);
        // }
        return view('dashboard.pelatihan.show', [
            'training' => $pelatihan
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Training  $training
     * @return \Illuminate\Http\Response
     */
    public function edit(Training $pelatihan)
    {
        return view('dashboard.pelatihan.edit', [
            'training' => $pelatihan
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Training  $training
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Training $pelatihan)
    {
        $rules = [
            'title' => 'required|max:255',
            'subtitle' => 'max:255',
            'image' => 'image|file|max:1024',
            'image_brosur' => 'image|file|max:1024',
            'image_jadwal' => 'image|file|max:1024',
            'paket' => 'required',
            'advantage' => 'required',
            'body' => 'required'
        ];

        $validated = $request->validate($rules);
            
        if ($request->file('image')) {
            @unlink('assets/img/training/'.$request->oldImage);
            
            // menyimpan data file yang diupload ke variabel $file
            $tujuan_upload = 'assets/img/training';
            $file = $request->file('image');
            $file->move($tujuan_upload,$file->getClientOriginalName());
            $validated['image'] = $file->getClientOriginalName();
        }

        if ($request->file('image_brosur')) {
            @unlink('assets/img/training/brosur/'.$request->oldImageBrosur);
            
            // menyimpan data file yang diupload ke variabel $file
            $tujuan_upload = 'assets/img/training/brosur';
            $file = $request->file('image_brosur');
            $file->move($tujuan_upload,$file->getClientOriginalName());
            $validated['image_brosur'] = $file->getClientOriginalName();
        }

        if ($request->file('image_jadwal')) {
            @unlink('assets/img/training/jadwal/'.$request->oldImageJadwal);
            
            // menyimpan data file yang diupload ke variabel $file
            $tujuan_upload = 'assets/img/training/jadwal';
            $file = $request->file('image_jadwal');
            $file->move($tujuan_upload,$file->getClientOriginalName());
            $validated['image_jadwal'] = $file->getClientOriginalName();
        }

        Training::where('id', $pelatihan->id)
        ->update($validated);

        return redirect('/dashboard/pelatihan')->with('success', 'Post sudah diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Training  $training
     * @return \Illuminate\Http\Response
     */
    public function destroy(Training $pelatihan)
    {
        @unlink('assets/img/training/'.$pelatihan->image);
        @unlink('assets/img/training/brosur/'.$pelatihan->image_brosur);
        @unlink('assets/img/training/jadwal/'.$pelatihan->image_jadwal);
        
        Training::destroy($pelatihan->id);

        return redirect('/dashboard/pelatihan')->with('success', 'Post sudah dihapus');
    }
}
