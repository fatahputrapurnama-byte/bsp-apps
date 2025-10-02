<?php

namespace App\Http\Controllers;

use App\Models\Auditing;
use Illuminate\Http\Request;

class DashboardAuditingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.auditing.index', [
            'auditing' => Auditing::latest()->paginate(10)->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.auditing.create');
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
        $tujuan_upload = 'assets/img/auditing';
        $file->move($tujuan_upload,$file->getClientOriginalName());
        $validated['image'] = $file->getClientOriginalName();

        if ($request->file('image_brosur')) {
            # code...
            $fileBrosur = $request->file('image_brosur');
            $tujuan_upload_brosur = 'assets/img/auditing/brosur';
            $fileBrosur->move($tujuan_upload_brosur,$fileBrosur->getClientOriginalName());
            $validated['image_brosur'] = $fileBrosur->getClientOriginalName();
        }

        Auditing::create($validated);

        return redirect('/dashboard/auditing')->with('success', 'Berhasil menambah data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Auditing  $auditing
     * @return \Illuminate\Http\Response
     */
    public function show(Auditing $auditing)
    {
        return view('dashboard.auditing.show', [
            'auditing' => $auditing
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Auditing  $auditing
     * @return \Illuminate\Http\Response
     */
    public function edit(Auditing $auditing)
    {
        return view('dashboard.auditing.edit', [
            'auditing' => $auditing
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Auditing  $auditing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Auditing $auditing)
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
            @unlink('assets/img/auditing/'.$request->oldImage);
            
            // menyimpan data file yang diupload ke variabel $file
            $tujuan_upload = 'assets/img/auditing';
            $file = $request->file('image');
            $file->move($tujuan_upload,$file->getClientOriginalName());
            $validated['image'] = $file->getClientOriginalName();
        }

        if ($request->file('image_brosur')) {
            @unlink('assets/img/auditing/brosur/'.$request->oldImageBrosur);
            
            // menyimpan data file yang diupload ke variabel $file
            $tujuan_upload = 'assets/img/auditing/brosur';
            $file = $request->file('image_brosur');
            $file->move($tujuan_upload,$file->getClientOriginalName());
            $validated['image_brosur'] = $file->getClientOriginalName();
        }

        Auditing::where('id', $auditing->id)
        ->update($validated);

        return redirect('/dashboard/auditing')->with('success', 'Post sudah diubah');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Auditing  $auditing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Auditing $auditing)
    {
        @unlink('assets/img/auditing/'.$auditing->image);
        @unlink('assets/img/auditing/brosur/'.$auditing->image_brosur);
        
        Auditing::destroy($auditing->id);

        return redirect('/dashboard/auditing')->with('success', 'Post sudah dihapus');
    }
}
