<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use Illuminate\Http\Request;

class DashboardConsultationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.konsultasi.index', [
            'consultation' => Consultation::latest()->paginate(10)->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.konsultasi.create');
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
        $tujuan_upload = 'assets/img/konsultasi';
        $file->move($tujuan_upload,$file->getClientOriginalName());
        $validated['image'] = $file->getClientOriginalName();

        if ($request->file('image_brosur')) {
        $fileBrosur = $request->file('image_brosur');
        $tujuan_upload_brosur = 'assets/img/konsultasi/brosur';
        $fileBrosur->move($tujuan_upload_brosur,$fileBrosur->getClientOriginalName());
        $validated['image_brosur'] = $fileBrosur->getClientOriginalName();
        }
        
        Consultation::create($validated);

        return redirect('/dashboard/konsultasi')->with('success', 'Berhasil menambah data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Consultation  $consultation
     * @return \Illuminate\Http\Response
     */
    public function show(Consultation $konsultasi)
    {
        return view('dashboard.konsultasi.show', [
            'consultation' => $konsultasi
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Consultation  $consultation
     * @return \Illuminate\Http\Response
     */
    public function edit(Consultation $konsultasi)
    {
        return view('dashboard.konsultasi.edit', [
            'consultation' => $konsultasi
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Consultation  $consultation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Consultation $konsultasi)
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
            @unlink('assets/img/konsultasi/'.$request->oldImage);
            // menyimpan data file yang diupload ke variabel $file
            $tujuan_upload = 'assets/img/konsultasi';
            $file = $request->file('image');
            $validated['image'] = $file->getClientOriginalName();
            $file->move($tujuan_upload,$file->getClientOriginalName());
        }

        if ($request->file('image_brosur')) {
            @unlink('assets/img/konsultasi/brosur/'.$request->oldImageBrosur);
            
            // menyimpan data file yang diupload ke variabel $file
            $tujuan_upload = 'assets/img/konsultasi/brosur';
            $file = $request->file('image_brosur');
            $file->move($tujuan_upload,$file->getClientOriginalName());
            $validated['image_brosur'] = $file->getClientOriginalName();
        }
        
        Consultation::where('id', $konsultasi->id)
        ->update($validated);

        return redirect('/dashboard/konsultasi')->with('success', 'Post sudah diubah');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Consultation  $consultation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Consultation $konsultasi)
    {
        @unlink('assets/img/konsultasi/'.$konsultasi->image);
        @unlink('assets/img/konsultasi/brosur/'.$konsultasi->image_brosur);
        
        Consultation::destroy($konsultasi->id);

        return redirect('/dashboard/konsultasi')->with('success', 'Post sudah dihapus');;
    }
}
