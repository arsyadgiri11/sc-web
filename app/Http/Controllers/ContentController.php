<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\content;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $content = content::all();
        return view('admin', compact('content'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function load_image($name_file)
    {
        $gambar = array(
            'gambar' => $name_file
        );
        return view('image', $gambar);
        //echo 'hei';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('gambar');
        content::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $file->getClientOriginalName(),
        ]);

        // Authors::create($request->all());
        return redirect('admin');
        //return redirect()->view('admin');
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
        $content = content::findOrFail($id);
        return view('edit', compact('content'));
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

        $file = $request->file('gambar');
        content::findOrFail($id)->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $file->getClientOriginalName(),
        ]);
        return redirect('admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        content::findOrFail($id)->delete();
        return redirect('admin');
    }
}
