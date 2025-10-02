<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class DashboardClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.client.index', [
            'client' => Client::latest()->paginate(10)->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.client.create');
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
            'name' => 'required|max:255',
            'image' => 'required|image|file|max:1024'
        ]);

        // menyimpan data file yang diupload ke variabel $file
		$file = $request->file('image');
        $tujuan_upload = 'assets/img/client';
        $file->move($tujuan_upload,$file->getClientOriginalName());
        $validated['image'] = $file->getClientOriginalName();


        Client::create($validated);

        return redirect('/dashboard/client')->with('success', 'Berhasil menambah data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        return view('dashboard.client.show', [
            'client' => $client
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        return view('dashboard.client.edit', [
            'client' => $client
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        $rules = [
            'name' => 'required|max:255',
            'image' => 'image|file|max:1024'
        ];

        $validated = $request->validate($rules);
            
        if ($request->file('image')) {
            @unlink('assets/img/client/'.$request->oldImage);
            
            // menyimpan data file yang diupload ke variabel $file
            $tujuan_upload = 'assets/img/bimtek';
            $file = $request->file('image');
            $file->move($tujuan_upload,$file->getClientOriginalName());
            $validated['image'] = $file->getClientOriginalName();
        }

        Client::where('id', $client->id)
        ->update($validated);

        return redirect('/dashboard/client')->with('success', 'Post sudah diubah');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        @unlink('assets/img/training/'.$client->image);
        
        Client::destroy($client->id);

        return redirect('/dashboard/client')->with('success', 'Post sudah dihapus');;
    }
}
