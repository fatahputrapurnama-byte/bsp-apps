<?php

namespace App\Http\Controllers;

use App\Models\Kajianstudy;
use Illuminate\Http\Request;

class DashboardKajianstudyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.kajianstudy.index', [
            'kajianstudy' => Kajianstudy::latest()->paginate(10)->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.kajianstudy.create');
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
        $tujuan_upload = 'assets/img/kajianstudy';
        $file->move($tujuan_upload,$file->getClientOriginalName());
        $validated['image'] = $file->getClientOriginalName();

        if ($request->file('image_brosur')) {
        $fileBrosur = $request->file('image_brosur');
        $tujuan_upload_brosur = 'assets/img/kajianstudy/brosur';
        $fileBrosur->move($tujuan_upload_brosur,$fileBrosur->getClientOriginalName());
        $validated['image_brosur'] = $fileBrosur->getClientOriginalName();
        }

        Kajianstudy::create($validated);

        return redirect('/dashboard/kajianstudy')->with('success', 'Berhasil menambah data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kajianstudy  $kajianstudy
     * @return \Illuminate\Http\Response
     */
    public function show(Kajianstudy $kajianstudy)
    {
        return view('dashboard.kajianstudy.show', [
            'kajianstudy' => $kajianstudy
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kajianstudy  $kajianstudy
     * @return \Illuminate\Http\Response
     */
    public function edit(Kajianstudy $kajianstudy)
    {
        return view('dashboard.kajianstudy.edit', [
            'kajianstudy' => $kajianstudy
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kajianstudy  $kajianstudy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kajianstudy $kajianstudy)
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
            @unlink('assets/img/kajianstudy/'.$request->oldImage);
            
            // menyimpan data file yang diupload ke variabel $file
            $tujuan_upload = 'assets/img/kajianstudy';
            $file = $request->file('image');
            $file->move($tujuan_upload,$file->getClientOriginalName());
            $validated['image'] = $file->getClientOriginalName();
        }

        if ($request->file('image_brosur')) {
            @unlink('assets/img/kajianstudy/brosur/'.$request->oldImageBrosur);
            
            // menyimpan data file yang diupload ke variabel $file
            $tujuan_upload = 'assets/img/kajianstudy/brosur';
            $file = $request->file('image_brosur');
            $file->move($tujuan_upload,$file->getClientOriginalName());
            $validated['image_brosur'] = $file->getClientOriginalName();
        }

        Kajianstudy::where('id', $kajianstudy->id)
        ->update($validated);

        return redirect('/dashboard/kajianstudy')->with('success', 'Post sudah diubah');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kajianstudy  $kajianstudy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kajianstudy $kajianstudy)
    {
        @unlink('assets/img/kajianstudy/'.$kajianstudy->image);
        @unlink('assets/img/kajianstudy/brosur/'.$kajianstudy->image_brosur);
        
        Kajianstudy::destroy($kajianstudy->id);

        return redirect('/dashboard/kajianstudy')->with('success', 'Post sudah dihapus');
    }
}
